<?php

namespace DieKapitaene\FlotChartBundle\Charts;

use DieKapitaene\FlotChartBundle\Charts\Components\DefaultChart;

use DieKapitaene\FlotChartBundle\Charts\Components\Options;
use DieKapitaene\FlotChartBundle\Charts\Components\Options\Series;
use DieKapitaene\FlotChartBundle\Charts\Components\Options\Series\Points;

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
