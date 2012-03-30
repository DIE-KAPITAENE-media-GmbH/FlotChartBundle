<?php

namespace RobQ\FlotChartBundle\Charts\Components;

use \RobQ\FlotChartBundle\Charts\Components\Plugins\PluginExtends;

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
     * @var array
     */
    protected $plugins=array();

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
     * @return \RobQ\FlotChartBundle\Charts\Components\Options
     */
    public function getOptions() {
        return $this->options;
    }

    /**
     * @param \RobQ\FlotChartBundle\Charts\Components\Options $options
     */
    public function setOptions(Options $options) {
        $this->options = $options;
    }

    /**
     * @param \RobQ\FlotChartBundle\Charts\Components\Plugins\PluginInterface $plugin
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
}
