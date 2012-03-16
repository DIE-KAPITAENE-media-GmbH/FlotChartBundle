<?php
namespace RobQ\FlotChartBundle\Twig;

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

        $rowdata = array();
        foreach( $chartObj->getDataRows() as $row ) {
            $rowdata[] = $row->toArray();
        }

        $placeholder = $chartObj->getPlaceholder();
        $data = json_encode($rowdata);
        $options = json_encode($chartObj->getOptions()->toArray());

        $engine = $this->container->get('templating');
        return $engine->render('FlotChartBundle::plot.html.twig', array( "placeholder" => $placeholder,
                                                                         "data"        => $data,
                                                                         "options"     => $options ));
    }
}