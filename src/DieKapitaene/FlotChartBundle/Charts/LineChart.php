<?php

namespace DieKapitaene\FlotChartBundle\Charts;

use DieKapitaene\FlotChartBundle\Charts\Components\DefaultChart;

use DieKapitaene\FlotChartBundle\Charts\Components\Options;
use DieKapitaene\FlotChartBundle\Charts\Components\Options\Series;
use DieKapitaene\FlotChartBundle\Charts\Components\Options\Series\Lines;

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
