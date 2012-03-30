<?php

namespace RobQ\FlotChartBundle\Charts\Components\Options\Series;

class Points {

    /**
     * @var bool
     */
    protected $show = false;

    /**
     * @var int
     */
    protected $radius = 3;

    /**
     * @var int
     */
    protected $lineWidth = 2; // in pixels

    /**
     * @var bool
     */
    protected $fill = true;

    /**
     * @var string
     */
    protected $fillColor = "#ffffff";

    /**
     * @var string
     */
    protected $symbol = "circle"; // or callback

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
    public function getRadius() {
        return $this->radius;
    }

    /**
     * @param int $radius
     */
    public function setRadius($radius) {
        $this->radius = $radius;
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
     * @return string
     */
    public function getFillColor() {
        return $this->fillColor;
    }

    /**
     * @param string $fillColor
     */
    public function setFillColor($fillColor) {
        $this->fillColor = $fillColor;
    }

    /**
     * @return string
     */
    public function getSymbol() {
        return $this->symbol;
    }

    /**
     * @param string $symbol
     */
    public function setSymbol($symbol) {
        $this->symbol = $symbol;
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
