<?php

namespace DieKapitaene\FlotChartBundle\Charts\Components;

use DieKapitaene\FlotChartBundle\Charts\Components\Options\Legend;
use DieKapitaene\FlotChartBundle\Charts\Components\Options\Xaxis;
use DieKapitaene\FlotChartBundle\Charts\Components\Options\Yaxis;
use DieKapitaene\FlotChartBundle\Charts\Components\Options\Series;
use DieKapitaene\FlotChartBundle\Charts\Components\Options\Grid;

class Options {

    /**
     * @var array
     */
    protected $colors = array( "#edc240", "#afd8f8", "#cb4b4b", "#4da74d", "#9440ed" );

    /**
     * @var \DieKapitaene\FlotChartBundle\Charts\Components\Options\Legend
     */
    protected $legend;

    /**
     * @var \DieKapitaene\FlotChartBundle\Charts\Components\Options\Xaxis
     */
    protected $xaxis;

    /**
     * @var \DieKapitaene\FlotChartBundle\Charts\Components\Options\Yaxis
     */
    protected $yaxis;

    /**
     * @var \DieKapitaene\FlotChartBundle\Charts\Components\Options\Series
     */
    protected $series;

    /**
     * @var \DieKapitaene\FlotChartBundle\Charts\Components\Options\Grid
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
     * @return \DieKapitaene\FlotChartBundle\Charts\Components\Options\Legend
     */
    public function getLegend() {
        if( is_null($this->legend) ) {
            $this->legend = new Legend();
        }
        return $this->legend;
    }

    /**
     * @param \DieKapitaene\FlotChartBundle\Charts\Components\Options\Legend $legend
     */
    public function setLegend(Legend $legend) {
        $this->legend = $legend;
    }

    /**
     * @return \DieKapitaene\FlotChartBundle\Charts\Components\Options\Xaxis
     */
    public function getXaxis() {
        if( is_null($this->xaxis) ) {
            $this->xaxis = new Xaxis();
        }
        return $this->xaxis;
    }

    /**
     * @param \DieKapitaene\FlotChartBundle\Charts\Components\Options\Xaxis $xaxis
     */
    public function setXaxis(Xaxis $xaxis) {
        $this->xaxis = $xaxis;
    }

    /**
     * @return \DieKapitaene\FlotChartBundle\Charts\Components\Options\Yaxis
     */
    public function getYaxis() {
        if( is_null($this->yaxis) ) {
            $this->yaxis = new Yaxis();
        }
        return $this->yaxis;
    }

    /**
     * @param \DieKapitaene\FlotChartBundle\Charts\Components\Options\Yaxis $yaxis
     */
    public function setYaxis(Yaxis $yaxis) {
        $this->yaxis = $yaxis;
    }

    /**
     * @return \DieKapitaene\FlotChartBundle\Charts\Components\Options\Series
     */
    public function getSeries() {
        if( is_null($this->series) ) {
            $this->series = new Series();
        }
        return $this->series;
    }

    /**
     * @param \DieKapitaene\FlotChartBundle\Charts\Components\Options\Series $series
     */
    public function setSeries(Series $series) {
        $this->series = $series;
    }

    /**
     * @return \DieKapitaene\FlotChartBundle\Charts\Components\Options\Grid
     */
    public function getGrid() {
        if( is_null($this->grid) ) {
            $this->grid = new Grid();
        }
        return $this->grid;
    }

    /**
     * @param \DieKapitaene\FlotChartBundle\Charts\Components\Options\Grid $grid
     */
    public function setGrid(Grid $grid) {
        $this->grid = $grid;
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
