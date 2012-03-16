<?php

namespace RobQ\FlotChartBundle\Charts;

use RobQ\FlotChartBundle\Charts\Components\DefaultChart;

use RobQ\FlotChartBundle\Charts\Components\Options;
use RobQ\FlotChartBundle\Charts\Components\Options\Series;
use RobQ\FlotChartBundle\Charts\Components\Options\Series\Points;

class PointChart extends DefaultChart
{
    public function __construct()
    {
        $options = new Options();
        $series = new Series();
        $points = new Points();

        $points->setShow(true);
        $series->setPoints($points);
        $options->setSeries($series);
        $this->setOptions($options);
    }
}
