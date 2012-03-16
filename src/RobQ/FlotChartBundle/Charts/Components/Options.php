<?php

namespace RobQ\FlotChartBundle\Charts\Components;

use RobQ\FlotChartBundle\Charts\Components\Options\Legend;
use RobQ\FlotChartBundle\Charts\Components\Options\Xaxis;
use RobQ\FlotChartBundle\Charts\Components\Options\Yaxis;
use RobQ\FlotChartBundle\Charts\Components\Options\Series;
use RobQ\FlotChartBundle\Charts\Components\Options\Grid;

class Options {

    /**
     * @var array
     */
    protected $colors = array( "#edc240", "#afd8f8", "#cb4b4b", "#4da74d", "#9440ed" );

    /**
     * @var \RobQ\FlotChartBundle\Charts\Components\Options\Legend
     */
    protected $legend;

    /**
     * @var \RobQ\FlotChartBundle\Charts\Components\Options\Xaxis
     */
    protected $xaxis;

    /**
     * @var \RobQ\FlotChartBundle\Charts\Components\Options\Yaxis
     */
    protected $yaxis;

    /**
     * @var \RobQ\FlotChartBundle\Charts\Components\Options\Series
     */
    protected $series;

    /**
     * @var \RobQ\FlotChartBundle\Charts\Components\Options\Grid
     */
    protected $grid;

    /**
     * @var mixed
     */
    protected $hooks;

    /**
     * @return array
     */
    public function getColors() {
        return $this->colors;
    }

    /**
     * @param array $colors
     */
    public function setColors($colors) {
        $this->colors = $colors;
    }

    /**
     * @return \RobQ\FlotChartBundle\Charts\Components\Options\Legend
     */
    public function getLegend() {
        return $this->legend;
    }

    /**
     * @param \RobQ\FlotChartBundle\Charts\Components\Options\Legend $legend
     */
    public function setLegend(Legend $legend) {
        $this->legend = $legend;
    }

    /**
     * @return \RobQ\FlotChartBundle\Charts\Components\Options\Xaxis
     */
    public function getXaxis() {
        return $this->xaxis;
    }

    /**
     * @param \RobQ\FlotChartBundle\Charts\Components\Options\Xaxis $xaxis
     */
    public function setXaxis(Xaxis $xaxis) {
        $this->xaxis = $xaxis;
    }

    /**
     * @return \RobQ\FlotChartBundle\Charts\Components\Options\Yaxis
     */
    public function getYaxis() {
        return $this->yaxis;
    }

    /**
     * @param \RobQ\FlotChartBundle\Charts\Components\Options\Yaxis $yaxis
     */
    public function setYaxis(Yaxis $yaxis) {
        $this->yaxis = $yaxis;
    }

    /**
     * @return \RobQ\FlotChartBundle\Charts\Components\Options\Series
     */
    public function getSeries() {
        return $this->series;
    }

    /**
     * @param \RobQ\FlotChartBundle\Charts\Components\Options\Series $series
     */
    public function setSeries(Series $series) {
        $this->series = $series;
    }

    /**
     * @return \RobQ\FlotChartBundle\Charts\Components\Options\Grid
     */
    public function getGrid() {
        return $this->grid;
    }

    /**
     * @param \RobQ\FlotChartBundle\Charts\Components\Options\Grid $grid
     */
    public function setGrid(Grid $grid) {
        $this->grid = $grid;
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
