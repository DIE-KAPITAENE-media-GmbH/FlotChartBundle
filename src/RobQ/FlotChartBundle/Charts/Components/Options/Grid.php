<?php

namespace RobQ\FlotChartBundle\Charts\Components\Options;

class Grid {

    /**
     * @var bool
     */
    protected $show = true;

    /**
     * @var bool
     */
    protected $aboveData = false;

    /**
     * @var string
     */
    protected $color = "#545454"; // primary color used for outline and labels

    /**
     * @var null
     */
    protected $backgroundColor = null; // null for transparent; else color

    /**
     * @var null
     */
    protected $borderColor = null; // set if different from the grid color

    /**
     * @var null
     */
    protected $tickColor = null; // color for the ticks; e.g. "rgba(0;0;0;0.15)"

    /**
     * @var int
     */
    protected $labelMargin = 5; // in pixels

    /**
     * @var int
     */
    protected $axisMargin = 8; // in pixels

    /**
     * @var int
     */
    protected $borderWidth = 2; // in pixels

    /**
     * @var null
     */
    protected $minBorderMargin = null; // in pixels; null means taken from points radius

    /**
     * @var null
     */
    protected $markings = null; // array of ranges or fn= axes -> array of ranges

    /**
     * @var string
     */
    protected $markingsColor = "#f4f4f4";

    /**
     * @var int
     */
    protected $markingsLineWidth = 2; // interactive stuff

    /**
     * @var bool
     */
    protected $clickable = false;

    /**
     * @var bool
     */
    protected $hoverable = false;

    /**
     * @var bool
     */
    protected $autoHighlight = true; // highlight in case mouse is near

    /**
     * @var int
     */
    protected $mouseActiveRadius = 10; // how far the mouse can be away to activate an item

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
     * @return boolean
     */
    public function getAboveData() {
        return $this->aboveData;
    }

    /**
     * @param boolean $aboveData
     */
    public function setAboveData($aboveData) {
        $this->aboveData = $aboveData;
    }

    /**
     * @return string
     */
    public function getColor() {
        return $this->color;
    }

    /**
     * @param string $color
     */
    public function setColor($color) {
        $this->color = $color;
    }

    /**
     * @return null
     */
    public function getBackgroundColor() {
        return $this->backgroundColor;
    }

    /**
     * @param null $backgroundColor
     */
    public function setBackgroundColor($backgroundColor) {
        $this->backgroundColor = $backgroundColor;
    }

    /**
     * @return null
     */
    public function getBorderColor() {
        return $this->borderColor;
    }

    /**
     * @param null $borderColor
     */
    public function setBorderColor($borderColor) {
        $this->borderColor = $borderColor;
    }

    /**
     * @return null
     */
    public function getTickColor() {
        return $this->tickColor;
    }

    /**
     * @param null $tickColor
     */
    public function setTickColor($tickColor) {
        $this->tickColor = $tickColor;
    }

    /**
     * @return int
     */
    public function getLabelMargin() {
        return $this->labelMargin;
    }

    /**
     * @param int $labelMargin
     */
    public function setLabelMargin($labelMargin) {
        $this->labelMargin = $labelMargin;
    }

    /**
     * @return int
     */
    public function getAxisMargin() {
        return $this->axisMargin;
    }

    /**
     * @param int $axisMargin
     */
    public function setAxisMargin($axisMargin) {
        $this->axisMargin = $axisMargin;
    }

    /**
     * @return int
     */
    public function getBorderWidth() {
        return $this->borderWidth;
    }

    /**
     * @param int $borderWidth
     */
    public function setBorderWidth($borderWidth) {
        $this->borderWidth = $borderWidth;
    }

    /**
     * @return null
     */
    public function getMinBorderMargin() {
        return $this->minBorderMargin;
    }

    /**
     * @param null $minBorderMargin
     */
    public function setMinBorderMargin($minBorderMargin) {
        $this->minBorderMargin = $minBorderMargin;
    }

    /**
     * @return null
     */
    public function getMarkings() {
        return $this->markings;
    }

    /**
     * @param null $markings
     */
    public function setMarkings($markings) {
        $this->markings = $markings;
    }

    /**
     * @return string
     */
    public function getMarkingsColor() {
        return $this->markingsColor;
    }

    /**
     * @param string $markingsColor
     */
    public function setMarkingsColor($markingsColor) {
        $this->markingsColor = $markingsColor;
    }

    /**
     * @return int
     */
    public function getMarkingsLineWidth() {
        return $this->markingsLineWidth;
    }

    /**
     * @param int $markingsLineWidth
     */
    public function setMarkingsLineWidth($markingsLineWidth) {
        $this->markingsLineWidth = $markingsLineWidth;
    }

    /**
     * @return boolean
     */
    public function getClickable() {
        return $this->clickable;
    }

    /**
     * @param boolean $clickable
     */
    public function setClickable($clickable) {
        $this->clickable = $clickable;
    }

    /**
     * @return boolean
     */
    public function getHoverable() {
        return $this->hoverable;
    }

    /**
     * @param boolean $hoverable
     */
    public function setHoverable($hoverable) {
        $this->hoverable = $hoverable;
    }

    /**
     * @return boolean
     */
    public function getAutoHighlight() {
        return $this->autoHighlight;
    }

    /**
     * @param boolean $autoHighlight
     */
    public function setAutoHighlight($autoHighlight) {
        $this->autoHighlight = $autoHighlight;
    }

    /**
     * @return int
     */
    public function getMouseActiveRadius() {
        return $this->mouseActiveRadius;
    }

    /**
     * @param int $mouseActiveRadius
     */
    public function setMouseActiveRadius($mouseActiveRadius) {
        $this->mouseActiveRadius = $mouseActiveRadius;
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
