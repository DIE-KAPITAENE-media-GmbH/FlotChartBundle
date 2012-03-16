<?php

namespace RobQ\FlotChartBundle\Charts\Components\Options\Series;

class Bars {

    /**
     * @var bool
     */
    protected $show = false;

    /**
     * @var int
     */
    protected $lineWidth = 2; // in pixels

    /**
     * @var int
     */
    protected $barWidth = 1; // in units of the x axis

    /**
     * @var bool
     */
    protected $fill = true;

    /**
     * @var null
     */
    protected $fillColor = null;

    /**
     * @var string
     */
    protected $align = "left"; // or "center"

    /**
     * @var bool
     */
    protected $horizontal = false;

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
     * @return int
     */
    public function getBarWidth() {
        return $this->barWidth;
    }

    /**
     * @param int $barWidth
     */
    public function setBarWidth($barWidth) {
        $this->barWidth = $barWidth;
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
     * @return string
     */
    public function getAlign() {
        return $this->align;
    }

    /**
     * @param string $align
     */
    public function setAlign($align) {
        $this->align = $align;
    }

    /**
     * @return boolean
     */
    public function getHorizontal() {
        return $this->horizontal;
    }

    /**
     * @param boolean $horizontal
     */
    public function setHorizontal($horizontal) {
        $this->horizontal = $horizontal;
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
