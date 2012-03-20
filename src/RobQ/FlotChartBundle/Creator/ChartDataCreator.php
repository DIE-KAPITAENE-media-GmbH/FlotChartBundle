<?php
namespace RobQ\FlotChartBundle\Creator;

use RobQ\FlotChartBundle\Charts\Components\Series;

use RobQ\FlotChartBundle\Charts\Components\DataRow;

class ChartDataCreator {

    private $charttypes;

    public function __construct($charttypes) {
        $this->charttypes = $charttypes;
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
}
