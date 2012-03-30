<?php

namespace RobQ\FlotChartBundle\Charts\Components\Options\Series;

class Lines {

    /**
     * @var bool
     */
    protected $show = true;
    /**
     * @var int
     */
    protected $lineWidth = 2; // in pixels
    /**
     * @var bool
     */
    protected $fill = false;
    /**
     * @var null
     */
    protected $fillColor = null;
    /**
     * @var bool
     */
    protected $steps = false;

    /**
     * @return boolean
     */
    public function getShow() {
        return $this->show;
    }

    /**
     * @param boolean $show
     */
    public function setShow($show) {
        $this->show = $show;
    }

    /**
     * @return int
     */
    public function getLineWidth() {
        return $this->lineWidth;
    }

    /**
     * @param int $lineWidth
     */
    public function setLineWidth($lineWidth) {
        $this->lineWidth = $lineWidth;
    }

    /**
     * @return boolean
     */
    public function getFill() {
        return $this->fill;
    }

    /**
     * @param boolean $fill
     */
    public function setFill($fill) {
        $this->fill = $fill;
    }

    /**
     * @return null
     */
    public function getFillColor() {
        return $this->fillColor;
    }

    /**
     * @param null $fillColor
     */
    public function setFillColor($fillColor) {
        $this->fillColor = $fillColor;
    }

    /**
     * @return boolean
     */
    public function getSteps() {
        return $this->steps;
    }

    /**
     * @param boolean $steps
     */
    public function setSteps($steps) {
        $this->steps = $steps;
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

