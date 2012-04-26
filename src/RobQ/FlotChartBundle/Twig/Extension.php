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

    public function create($chartObj, $part = false) {

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

        // Events
        $events = array();

        // jsClick / jsHover
        $grid = $chartObj->getOptions()->getGrid();
        if( $grid->getClickable() && $clickFunction = $grid->getJsClickFunction() ) {
            $events["plot"]["plotclick"] = $clickFunction;
        }

        if( $grid->getHoverable() && $hoverFunction = $grid->getJsHoverFunction() ) {
            $events["plot"]["plothover"] = $hoverFunction;
        }

        // Plugins
        $pluginObjs = $chartObj->getPlugins();
        foreach( $pluginObjs as $pluginObj ) {
            $options_ar = array_merge_recursive($options_ar, $pluginObj->getOptions());
            $events = array_merge_recursive($events, $pluginObj->getEvents());
        }

        $engine = $this->container->get('templating');

        return $engine->render('FlotChartBundle::plot.html.twig', array( "placeholder"           => $placeholder . "_" . substr(uniqid(), 7, 3),
                                                                         "data"                  => json_encode($rowdata),
                                                                         "options"               => json_encode($options_ar),
                                                                         "events"                => json_encode($events),
                                                                         "dimensions"            => $chartObj->getDimensions(),
                                                                         "overview"              => $chartObj->getOverview() ? "true" : "false",
                                                                         "choiceLegend"          => $chartObj->getChoiceLegend() ? "true" : "false",
                                                                         "choiceLegendFormatter" => $chartObj->getChoiceLegendFormatter() ? $chartObj->getChoiceLegendFormatter() : "''",
                                                                         "part"                  => $part ));
    }
}