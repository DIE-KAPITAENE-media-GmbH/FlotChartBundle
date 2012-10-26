<?php

namespace DieKapitaene\FlotChartBundle\Charts;

use DieKapitaene\FlotChartBundle\Charts\Components\DefaultChart;

use DieKapitaene\FlotChartBundle\Charts\Components\Options;
use DieKapitaene\FlotChartBundle\Charts\Components\Options\Series;
use DieKapitaene\FlotChartBundle\Charts\Components\Options\Series\Bars;

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
