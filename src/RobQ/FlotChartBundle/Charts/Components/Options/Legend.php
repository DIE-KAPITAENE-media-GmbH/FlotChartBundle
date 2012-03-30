<?php

namespace RobQ\FlotChartBundle\Charts\Components\Options;

class Legend {
    /**
     * @var boolean
     */
    protected $show = true;

    /**
     * @var string
     */
    protected $labelFormatter = null;

    /**
     * @var string
     */
    protected $labelBoxBorderColor= "#ccc";

    /**
     * @var int
     */
    protected $noColumns = 1;

    /**
     * @var string
     */
    protected $position = "ne";

    /**
     * number of pixels or [x margin, y margin]
     * @var mixed
     */
    protected $margin = 5;

    /**
     * @var string
     */
    protected $backgroundColor = null;

    /**
     * number between 0 and 1
     * @var float
     */
    protected $backgroundOpacity = 0.85;

    /**
     * @return boolean
     */
    public function getShow() {
        return $this->show ? true : false;
    }

    /**
     * @param boolean $show
     */
    public function setShow($show) {
        $this->show = $show ? true : false;
    }

    /**
     * @return string
     */
    public function getLabelFormatter() {
        return $this->labelFormatter;
    }

    /**
     * @param string $labelFormatter
     */
    public function setLabelFormatter($labelFormatter) {
        $this->labelFormatter = $labelFormatter;
    }

    /**
     * @return string
     */
    public function getLabelBoxBorderColor() {
        return $this->labelBoxBorderColor;
    }

    /**
     * @param string $labelBoxBorderColor
     */
    public function setLabelBoxBorderColor($labelBoxBorderColor) {
        $this->labelBoxBorderColor = $labelBoxBorderColor;
    }

    /**
     * @return int
     */
    public function getNoColumns() {
        return (int)$this->noColumns;
    }

    /**
     * @param int $noColumns
     */
    public function setNoColumns($noColumns) {
        $this->noColumns = intval($noColumns);
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
        $positions = array( "ne", "nw", "se", "sw" );
        if( in_array($position, $positions) ) {
            $this->position = $position;

        }
    }

    /**
     * @return mixed
     */
    public function getMargin() {
        return $this->margin;
    }

    /**
     * @param mixed $margin
     */
    public function setMargin($margin) {
        $this->margin = $margin;
    }

    /**
     * @return string
     */
    public function getBackgroundColor() {
        return $this->backgroundColor;
    }

    /**
     * @param string $backgroundColor
     */
    public function setBackgroundColor($backgroundColor) {
        $this->backgroundColor = $backgroundColor;
    }

    /**
     * @return float
     */
    public function getBackgroundOpacity() {
        return $this->backgroundOpacity;
    }

    /**
     * @param float $backgroundOpacity
     */
    public function setBackgroundOpacity($backgroundOpacity) {
        $this->backgroundOpacity = $backgroundOpacity;
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
