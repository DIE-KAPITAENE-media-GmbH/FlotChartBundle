<?php
namespace RobQ\FlotChartBundle\Creator;

use \RobQ\FlotChartBundle\Twig\Extension;
use \RobQ\FlotChartBundle\Charts\Components\DefaultChart;
use RobQ\FlotChartBundle\Charts\Components\Series;

use RobQ\FlotChartBundle\Charts\Components\DataRow;

class ChartDataCreator {

    private $charttypes;
    private $container;

    public function __construct($charttypes, $container) {
        $this->charttypes = $charttypes;
        $this->container = $container;
    }

    public function createChart($type = "line", array $dataRows) {

        if( !isset($this->charttypes[$type]) ) {
            throw new \Exception("wrong chart type");
        }

        $chart = $this->charttypes[$type];

        $datarow_ar = array();
        foreach( $dataRows as $row ) {
            if( $row instanceof DataRow ) {
                $datarow_ar[] = $row;
            } else {
                $dataRow = new DataRow();
                $dataRow->setData($row);
                $datarow_ar[] = $dataRow;
            }
        }

        $chart->setDataRows($datarow_ar);

        return $chart;
    }

    public function renderChart(DefaultChart $chart,$part=false) {
        $ext = new Extension($this->container);
        return $ext->create($chart,$part);
    }

    public function setPropertyToAllDataRows($chart, array $propertyData) {
        foreach( $chart->getDataRows() as $row ) {
            $method = "set" . key($propertyData);
            $row->$method(current($propertyData));
        }
    }
}
