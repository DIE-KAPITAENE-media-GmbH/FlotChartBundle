<?php
namespace RobQ\FlotChartBundle\Twig;

/* test ***********************************/ use \RobQ\FlotChartBundle\Charts\Components\Options\Yaxis;

/* test ***********************************/

use Symfony\Component\DependencyInjection\Exception\RuntimeException;
use Symfony\Component\HttpKernel\KernelInterface;

use RobQ\FlotChartBundle\Charts\Components\DefaultChartInterface;

class Extension extends \Twig_Extension {
    protected $container;

    public function __construct($container) {
        $this->container = $container;
    }

    public function getFunctions() {
        return array( 'flotchart' => new \Twig_Function_Method($this, 'create', array( 'is_safe' => array( 'html' ) )), );
    }

    public function getName() {
        return 'robq_flotchart';
    }

    public function create($chartObj) {

        if( !$chartObj instanceof DefaultChartInterface ) {
            return "no ChartObject given!";
        }

        // Placeholder
        $placeholder = $chartObj->getPlaceholder();

        // Data
        $rowdata = array();
        foreach( $chartObj->getDataRows() as $row ) {
            $rowdata[] = $row->toArray();
        }

        // Options
        $options_ar = $chartObj->getOptions()->toArray();

        // Plugins
        $plugins = array();
        $pluginObjs = $chartObj->getPlugins();
        foreach( $pluginObjs as $pluginObj ) {
            $options_ar = array_merge($options_ar, $pluginObj->getOptions());
            $plugins[$pluginObj->getName()] = $this->getJsPluginCode($pluginObj);
        }

        // Events
        $events = array();

        // jsClick / jsHover
        $grid = $chartObj->getOptions()->getGrid();
        if( $grid->getClickable() && $clickFunction = $grid->getJsClickFunction() ) {
            $events["plotclick"] = $clickFunction;
        }

        if( $grid->getHoverable() && $hoverFunction = $grid->getJsHoverFunction() ) {
            $events["plothover"] = $hoverFunction;
        }

        $engine = $this->container->get('templating');

        return $engine->render('FlotChartBundle::plot.html.twig', array( "placeholder"     => $placeholder,
                                                                         "data"            => json_encode($rowdata),
                                                                         "options"         => json_encode($options_ar),
                                                                         "extendedOptions" => $this->getExtendedOptions($options_ar),
                                                                         "plugins"         => $plugins,
                                                                         "events"          => $events ));
    }

    public function getExtendedOptions($options_ar) {
        $extendedOptions = "";

        // tickFormatter
        foreach( array( "x", "y" ) as $coord ) {
            if( isset($options_ar[$coord . "axis"]["tickFormatter"]) ) {
                $tickFormatter = $options_ar[$coord . "axis"]["tickFormatter"];
                $extendedOptions .= $coord . "axis:{ tickFormatter: function (v, a) { return $tickFormatter }},";
            }
        }

        return $extendedOptions;
    }

    public function getJsPluginCode($plugin) {
        switch( $plugin->getName() ) {
            case "selection":
                $jscode = "placeholder.bind('plotselected', function (event, ranges) {

                                selectoptions = $.extend(true, {}, rawoptions, {
                                    xaxis:{ min:ranges.xaxis.from, max:ranges.xaxis.to },
                                    yaxis:{ min:ranges.yaxis.from, max:ranges.yaxis.to }
                                })

                                plotChart(selectoptions);

                                // don't fire event on the overview to prevent eternal loop
                                overview_plot.setSelection(ranges, true);
                            });

                            placeholder_over.bind('plotselected', function (event, ranges) {
                                plot.setSelection(ranges);
                            });

                            placeholder_over.bind('dblclick', function () {
                                selectoptions = rawoptions;
                                plotChart();
                            });
                            ";
                break;
        }
        return $jscode;
    }

}