<?php

namespace RobQ\FlotChartBundle\Charts\Components\Options;

class Yaxis {
    /**
     * @var float
     */
    protected $autoscaleMargin = 0.02;

    /**
     * left or right
     * @var string
     */
    protected $position = "left";

    /**
     * @return float
     */
    public function getAutoscaleMargin() {
        return $this->autoscaleMargin;
    }

    /**
     * @param float $autoscaleMargin
     */
    public function setAutoscaleMargin($autoscaleMargin) {
        $this->autoscaleMargin = $autoscaleMargin;
    }

    /**
     * @return string
     */
    public function getPosition() {
        return $this->position;
    }

    /**
     * @param string $position
     */
    public function setPosition($position) {
        $this->position = $position;
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
