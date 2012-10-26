<?php

namespace DieKapitaene\FlotChartBundle\Charts\Components\Options;

use DieKapitaene\FlotChartBundle\Charts\Components\Options\Series\Points;
use DieKapitaene\FlotChartBundle\Charts\Components\Options\Series\Lines;
use DieKapitaene\FlotChartBundle\Charts\Components\Options\Series\Bars;

class Series {

    /**
     * @var \DieKapitaene\FlotChartBundle\Charts\Components\Options\Series\Points
     */
    protected $points;

    /**
     * @var \DieKapitaene\FlotChartBundle\Charts\Components\Options\Series\Lines
     */
    protected $lines;

    /**
     * @var \DieKapitaene\FlotChartBundle\Charts\Components\Options\Series\Bars
     */
    protected $bars;

    /**
     * @var int
     */
    protected $shadowSize = 3;

    /**
     * @return \DieKapitaene\FlotChartBundle\Charts\Components\Options\Series\Points
     */
    public function getPoints() {
        return $this->points;
    }

    /**
     * @param \DieKapitaene\FlotChartBundle\Charts\Components\Options\Series\Points $points
     */
    public function setPoints(Points $points) {
        $this->points = $points;
    }

    /**
     * @return \DieKapitaene\FlotChartBundle\Charts\Components\Options\Series\Lines
     */
    public function getLines() {
        return $this->lines;
    }

    /**
     * @param \DieKapitaene\FlotChartBundle\Charts\Components\Options\Series\Lines $lines
     */
    public function setLines(Lines $lines) {
        $this->lines = $lines;
    }

    /**
     * @return \DieKapitaene\FlotChartBundle\Charts\Components\Options\Series\Bars
     */
    public function getBars() {
        return $this->bars;
    }

    /**
     * @param \DieKapitaene\FlotChartBundle\Charts\Components\Options\Series\Bars $bars
     */
    public function setBars(Bars $bars) {
        $this->bars = $bars;
    }

    /**
     * @return int
     */
    public function getShadowSize() {
        return $this->shadowSize;
    }

    /**
     * @param int $shadowSize
     */
    public function setShadowSize($shadowSize) {
        $this->shadowSize = $shadowSize;
    }

    public function toArray() {
        $array = array();
        foreach( $this as $key => $value ) {
            if( !is_null($value) ) {
                $array[$key] = is_object($value) ? $value->toArray() : $value;
            }
        }
        return $array;
    }
}
