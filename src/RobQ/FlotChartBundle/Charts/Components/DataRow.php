<?php
namespace RobQ\FlotChartBundle\Charts\Components;

use RobQ\FlotChartBundle\Charts\Components\Options\Series\Lines;
use RobQ\FlotChartBundle\Charts\Components\Options\Series\Bars;
use RobQ\FlotChartBundle\Charts\Components\Options\Series\Points;

class DataRow {
    /**
     * @var string
     */
    protected $color;

    /**
     * @var array
     */
    protected $data;

    /**
     * @var array
     */
    protected $additionalData;

    /**
     * @var string
     */
    protected $label;

    /**
     * @var \RobQ\FlotChartBundle\Charts\Components\Options\Series\Lines
     */
    protected $lines;

    /**
     * @var \RobQ\FlotChartBundle\Charts\Components\Options\Series\Bars
     */
    protected $bars;

    /**
     * @var \RobQ\FlotChartBundle\Charts\Components\Options\Series\Points
     */
    protected $points;

    /**
     * @var int
     */
    protected $xaxis;

    /**
     * @var int
     */
    protected $yaxis;

    /**
     * @var boolean
     */
    protected $clickable;

    /**
     * @var boolean
     */
    protected $hoverable;

    /**
     * @var int
     */
    protected $shadowSize;

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
     * @return string
     */
    public function getLabel() {
        return $this->label;
    }

    /**
     * @param string $label
     */
    public function setLabel($label) {
        $this->label = (string)$label;
    }

    /**
     * @return \RobQ\FlotChartBundle\Charts\Components\Options\Series\Lines
     */
    public function getLines() {
        if( !$this->lines ) {
            $this->lines = new Lines();
        }
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
        if( !$this->bars ) {
            $this->bars = new Bars();
        }
        return $this->bars;
    }

    /**
     * @param \RobQ\FlotChartBundle\Charts\Components\Options\Series\Bars $bars
     */
    public function setBars(Bars $bars) {
        $this->bars = $bars;
    }

    /**
     * @return \RobQ\FlotChartBundle\Charts\Components\Options\Series\Points
     */
    public function getPoints() {
        if( !$this->points ) {
            $this->points = new Points();
        }
        return $this->points;
    }

    /**
     * @param \RobQ\FlotChartBundle\Charts\Components\Options\Series\Points $points
     */
    public function setPoints(Points $points) {
        $this->points = $points;
    }

    /**
     * @return int
     */
    public function getXaxis() {
        return $this->xaxis;
    }

    /**
     * @param int $xaxis
     */
    public function setXaxis($xaxis) {
        $this->xaxis = $xaxis;
    }

    /**
     * @return int
     */
    public function getYaxis() {
        return $this->yaxis;
    }

    /**
     * @param int $yaxis
     */
    public function setYaxis($yaxis) {
        $this->yaxis = $yaxis;
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

    /**
     * @return array
     */
    public function getData() {
        return $this->data;
    }

    /**
     * @param array $data
     */
    public function setData($data) {
        $this->data = $data;
    }

    /**
     * @return array
     */
    public function getAdditionalData() {
        return $this->additionalData;
    }

    /**
     * @param array $additionalData
     */
    public function setAdditionalData($additionalData) {
        $this->additionalData = $additionalData;
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
