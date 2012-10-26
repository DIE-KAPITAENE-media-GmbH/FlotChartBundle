<?php

namespace DieKapitaene\FlotChartBundle\Charts\Components\Plugins\Selection;

use DieKapitaene\FlotChartBundle\Charts\Components\Plugins\PluginExtends;
use DieKapitaene\FlotChartBundle\Charts\Components\Plugins\PluginInterface;

class Selection extends PluginExtends implements PluginInterface {

    /**
     * @var null
     */
    private $mode = null;

    /**
     * @var string
     */
    private $color = "#e8cfac";

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

    public function getName() {
        return "selection";
    }

    public function getOptions() {
        $array = array();
        foreach( $this as $key => $value ) {
            if( !is_null($value) ) {
                $array[$key] = is_object($value) ? $value->toArray() : $value;
            }
        }
        return array( $this->getName()=> $array );
    }

    public function getEvents() {
        return array( "plot"             => array( "plotselected" => "self.plotselected" ),
                      "overview"         => array( "plotselected" => "self.plotselected_overview",
                                                   "dblclick"     => "self.plotselected_dblclick_overview" ) );
    }
}
