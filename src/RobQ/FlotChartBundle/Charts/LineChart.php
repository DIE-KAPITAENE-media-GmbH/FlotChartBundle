<?php

namespace RobQ\FlotChartBundle\Charts;

use RobQ\FlotChartBundle\Charts\Components\DefaultChart;

use RobQ\FlotChartBundle\Charts\Components\Options;
use RobQ\FlotChartBundle\Charts\Components\Options\Series;
use RobQ\FlotChartBundle\Charts\Components\Options\Series\Lines;

class LineChart extends DefaultChart
{
    public function __construct()
    {
        $options = new Options();
        $series = new Series();
        $lines = new Lines();

        $lines->setShow(true);
        $series->setLines($lines);
        $options->setSeries($series);
        $this->setOptions($options);
    }
}
