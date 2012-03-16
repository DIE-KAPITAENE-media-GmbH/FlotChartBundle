<?php

namespace RobQ\FlotChartBundle\Charts;

use RobQ\FlotChartBundle\Charts\Components\DefaultChart;

use RobQ\FlotChartBundle\Charts\Components\Options;
use RobQ\FlotChartBundle\Charts\Components\Options\Series;
use RobQ\FlotChartBundle\Charts\Components\Options\Series\Bars;

class BarChart extends DefaultChart
{
    public function __construct()
    {
        $options = new Options();
        $series = new Series();
        $bars = new Bars();

        $bars->setShow(true);
        $series->setBars($bars);
        $options->setSeries($series);
        $this->setOptions($options);
    }
}
