<?php

namespace RobQ\FlotChartBundle\Charts\Components\Options;

use RobQ\FlotChartBundle\Charts\Components\Options\Series\Points;
use RobQ\FlotChartBundle\Charts\Components\Options\Series\Lines;
use RobQ\FlotChartBundle\Charts\Components\Options\Series\Bars;

class Series {

    /**
     * @var \RobQ\FlotChartBundle\Charts\Components\Options\Series\Points
     */
    protected $points;

    /**
     * @var \RobQ\FlotChartBundle\Charts\Components\Options\Series\Lines
     */
    protected $lines;

    /**
     * @var \RobQ\FlotChartBundle\Charts\Components\Options\Series\Bars
     */
    protected $bars;

    /**
     * @var int
     */
    protected $shadowSize = 3;

    /**
     * @return \RobQ\FlotChartBundle\Charts\Components\Options\Series\Points
     */
    public function getPoints() {
        return $this->points;
    }

    /**
     * @param \RobQ\FlotChartBundle\Charts\Components\Options\Series\Points $points
     */
    public function setPoints(Points $points) {
        $this->points = $points;
    }

    /**
     * @return \RobQ\FlotChartBundle\Charts\Components\Options\Series\Lines
     */
    public function getLines() {
        return $this->lines;
    }

    /**
     * @param \RobQ\FlotChartBundle\Charts\Components\Options\Series\Lines $lines
     */
    public function setLines(Lines $lines) {
        $this->lines = $lines;
    }

    /**
     * @return \RobQ\FlotChartBundle\Charts\Components\Options\Series\Bars
     */
    public function getBars() {
        return $this->bars;
    }

    /**
     * @param \RobQ\FlotChartBundle\Charts\Components\Options\Series\Bars $bars
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
            if( $value ) {
                $array[$key] = is_object($value) ? $value->toArray() : $value;
            }
        }
        return $array;
    }
}
