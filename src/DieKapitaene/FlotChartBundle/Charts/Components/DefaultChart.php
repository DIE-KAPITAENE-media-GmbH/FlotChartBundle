<?php

namespace DieKapitaene\FlotChartBundle\Charts\Components;

use \DieKapitaene\FlotChartBundle\Charts\Components\Plugins\PluginExtends;

class DefaultChart implements DefaultChartInterface {
    /**
     * FlotDocu (http://flot.googlecode.com/svn/trunk/API.txt):
     * The placeholder is a jQuery object or DOM element or jQuery expression
     * that the plot will be put into.
     * @var string
     */
    protected $placeholder = "chartdiv";

    /**
     * @var array;
     */
    protected $dataRows;

    /**
     *
     * @var Options;
     */
    protected $options;

    /**
     * @var bool
     */
    protected $overview=false;

    /**
     * @var bool
     */
    protected $choiceLegend=false;

    /**
     * @var
     */
    protected $choiceLegendFormatter;

    /**
     * @var array
     */
    protected $plugins=array();

    /**
     * @var array
     */
    protected $dimensions=array();

    /**
     * @return string
     */
    public function getPlaceholder() {
        return $this->placeholder;
    }

    /**
     * @param string $placeholder
     */
    public function setPlaceholder($placeholder) {
        $this->placeholder = $placeholder;
    }

    /**
     * @return array
     */
    public function getDataRows() {
        return $this->dataRows;
    }

    /**
     * @param array $dataRows
     */
    public function setDataRows($dataRows) {
        $this->dataRows = $dataRows;
    }

    /**
     * @return \DieKapitaene\FlotChartBundle\Charts\Components\Options
     */
    public function getOptions() {
        return $this->options;
    }

    /**
     * @param \DieKapitaene\FlotChartBundle\Charts\Components\Options $options
     */
    public function setOptions(Options $options) {
        $this->options = $options;
    }

    /**
     * @param \DieKapitaene\FlotChartBundle\Charts\Components\Plugins\PluginInterface $plugin
     */
    public function addPlugin(PluginExtends $plugin) {
        if( !is_array($this->plugins) ) {
            $this->plugins = array( $plugin );
            return;
        }
        array_push($this->plugins, $plugin);
    }

    /**
     * @return array
     */
    public function getPlugins() {
        return $this->plugins;
    }

    /**
     * @param array $plugins
     */
    public function setPlugins($plugins) {
        $this->plugins = $plugins;
    }

    /**
     * @return array
     */
    public function getDimensions() {
        return $this->dimensions;
    }

    /**
     * @param array $dimensions
     */
    public function setDimensions($dimensions) {
        $this->dimensions = $dimensions;
    }

    /**
     * @return boolean
     */
    public function getChoiceLegend() {
        return $this->choiceLegend;
    }

    /**
     * @param boolean $choiceLegend
     */
    public function setChoiceLegend($choiceLegend) {
        $this->choiceLegend = $choiceLegend;
    }

    /**
     * @return
     */
    public function getChoiceLegendFormatter() {
        return $this->choiceLegendFormatter;
    }

    /**
     * @param  $choiceLegendFormatter
     */
    public function setChoiceLegendFormatter($choiceLegendFormatter) {
        $this->choiceLegendFormatter = $choiceLegendFormatter;
    }

    /**
     * @return boolean
     */
    public function getOverview() {
        return $this->overview;
    }

    /**
     * @param boolean $overview
     */
    public function setOverview($overview) {
        $this->overview = $overview;
    }
}
