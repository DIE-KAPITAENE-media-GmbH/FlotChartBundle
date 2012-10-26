<?php

namespace DieKapitaene\FlotChartBundle\Charts\Components\Options;

class Axis {
    /**
     * @var null
     */
    protected $show = null; // null = auto-detect; true = always; false = never
    /**
     * @var string
     */
    protected $position = "bottom"; // or "top"
    /**
     * @var null
     */
    protected $mode = null; // null or "time"
    /**
     * @var null
     */
    protected $color = null; // base color; labels; ticks
    /**
     * @var null
     */
    protected $tickColor = null; // possibly different color of ticks; e.g. "rgba(0;0;0;0.15)"
    /**
     * @var null
     */
    protected $transform = null; // null or f= number -> number to transform axis
    /**
     * @var null
     */
    protected $inverseTransform = null; // if transform is set; this should be the inverse function
    /**
     * @var null
     */
    protected $min = null; // min. value to show; null means set automatically
    /**
     * @var null
     */
    protected $max = null; // max. value to show; null means set automatically
    /**
     * @var null
     */
    protected $autoscaleMargin = null; // margin in % to add if auto-setting min/max
    /**
     * @var null
     */
    protected $ticks = null; // either [1; 3] or [[1; "a"]; 3] or (fn= axis info -> ticks) or app. number of ticks for auto-ticks
    /**
     * int v    successive integer value of the formated axis
     * Axis a   Axis Object for the formated axis
     *          setTickFormatter(" v.toFixed(a.tickDecimals) + ' %' ");
     * @var null
     */
    protected $tickFormatter = null; // fn= number -> string
    /**
     * @var null
     */
    protected $labelWidth = null; // size of tick labels in pixels
    /**
     * @var null
     */
    protected $labelHeight = null;
    /**
     * @var null
     */
    protected $reserveSpace = null; // whether to reserve space even if axis isn't shown
    /**
     * @var null
     */
    protected $tickLength = null; // size in pixels of ticks; or "full" for whole line
    /**
     * @var null
     */
    protected $alignTicksWithAxis = null; // axis number or null for no sync

// mode specific options
    /**
     * @var null
     */
    protected $tickDecimals = null; // no. of decimals; null means auto
    /**
     * @var null
     */
    protected $tickSize = null; // number or [number; "unit"]
    /**
     * @var null
     */
    protected $minTickSize = null; // number or [number; "unit"]
    /**
     * @var null
     */
    protected $monthNames = null; // list of names of months
    /**
     * @var null
     */
    protected $timeformat = null; // format string to use
    /**
     * @var bool
     */
    protected $twelveHourClock = false; // 12 or 24 time in time mode

    /**
     * @return null
     */
    public function getShow() {
        return $this->show;
    }

    /**
     * @param null $show
     */
    public function setShow($show) {
        $this->show = $show;
    }

    /**
     * @return null
     */
    public function getMode() {
        return $this->mode;
    }

    /**
     * @param null $mode
     */
    public function setMode($mode) {
        $this->mode = $mode;
    }

    /**
     * @return null
     */
    public function getColor() {
        return $this->color;
    }

    /**
     * @param null $color
     */
    public function setColor($color) {
        $this->color = $color;
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
     * @return null
     */
    public function getTransform() {
        return $this->transform;
    }

    /**
     * @param null $transform
     */
    public function setTransform($transform) {
        $this->transform = $transform;
    }

    /**
     * @return null
     */
    public function getInverseTransform() {
        return $this->inverseTransform;
    }

    /**
     * @param null $inverseTransform
     */
    public function setInverseTransform($inverseTransform) {
        $this->inverseTransform = $inverseTransform;
    }

    /**
     * @return null
     */
    public function getMin() {
        return $this->min;
    }

    /**
     * @param null $min
     */
    public function setMin($min) {
        $this->min = $min;
    }

    /**
     * @return null
     */
    public function getMax() {
        return $this->max;
    }

    /**
     * @param null $max
     */
    public function setMax($max) {
        $this->max = $max;
    }

    /**
     * @return null
     */
    public function getAutoscaleMargin() {
        return $this->autoscaleMargin;
    }

    /**
     * @param null $autoscaleMargin
     */
    public function setAutoscaleMargin($autoscaleMargin) {
        $this->autoscaleMargin = $autoscaleMargin;
    }

    /**
     * @return null
     */
    public function getTicks() {
        return $this->ticks;
    }

    /**
     * @param null $ticks
     */
    public function setTicks($ticks) {
        $this->ticks = $ticks;
    }

    /**
     * @return null
     */
    public function getTickFormatter() {
        return $this->tickFormatter;
    }

    /**
     * @param null $tickFormatter
     */
    public function setTickFormatter($tickFormatter) {
        $this->tickFormatter = $tickFormatter;
    }

    /**
     * @return null
     */
    public function getLabelWidth() {
        return $this->labelWidth;
    }

    /**
     * @param null $labelWidth
     */
    public function setLabelWidth($labelWidth) {
        $this->labelWidth = $labelWidth;
    }

    /**
     * @return null
     */
    public function getLabelHeight() {
        return $this->labelHeight;
    }

    /**
     * @param null $labelHeight
     */
    public function setLabelHeight($labelHeight) {
        $this->labelHeight = $labelHeight;
    }

    /**
     * @return null
     */
    public function getReserveSpace() {
        return $this->reserveSpace;
    }

    /**
     * @param null $reserveSpace
     */
    public function setReserveSpace($reserveSpace) {
        $this->reserveSpace = $reserveSpace;
    }

    /**
     * @return null
     */
    public function getTickLength() {
        return $this->tickLength;
    }

    /**
     * @param null $tickLength
     */
    public function setTickLength($tickLength) {
        $this->tickLength = $tickLength;
    }

    /**
     * @return null
     */
    public function getAlignTicksWithAxis() {
        return $this->alignTicksWithAxis;
    }

    /**
     * @param null $alignTicksWithAxis
     */
    public function setAlignTicksWithAxis($alignTicksWithAxis) {
        $this->alignTicksWithAxis = $alignTicksWithAxis;
    }

    /**
     * @return null
     */
    public function getTickDecimals() {
        return $this->tickDecimals;
    }

    /**
     * @param null $tickDecimals
     */
    public function setTickDecimals($tickDecimals) {
        $this->tickDecimals = $tickDecimals;
    }

    /**
     * @return null
     */
    public function getTickSize() {
        return $this->tickSize;
    }

    /**
     * @param null $tickSize
     */
    public function setTickSize($tickSize) {
        $this->tickSize = $tickSize;
    }

    /**
     * @return null
     */
    public function getMinTickSize() {
        return $this->minTickSize;
    }

    /**
     * @param null $minTickSize
     */
    public function setMinTickSize($minTickSize) {
        $this->minTickSize = $minTickSize;
    }

    /**
     * @return null
     */
    public function getMonthNames() {
        return $this->monthNames;
    }

    /**
     * @param null $monthNames
     */
    public function setMonthNames($monthNames) {
        $this->monthNames = $monthNames;
    }

    /**
     * @return null
     */
    public function getTimeformat() {
        return $this->timeformat;
    }

    /**
     * @param null $timeformat
     */
    public function setTimeformat($timeformat) {
        $this->timeformat = $timeformat;
    }

    /**
     * @return boolean
     */
    public function getTwelveHourClock() {
        return $this->twelveHourClock;
    }

    /**
     * @param boolean $twelveHourClock
     */
    public function setTwelveHourClock($twelveHourClock) {
        $this->twelveHourClock = $twelveHourClock;
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
            if( !is_null($value) ) {
                $array[$key] = is_object($value) ? $value->toArray() : $value;
            }
        }
        return $array;
    }
}
