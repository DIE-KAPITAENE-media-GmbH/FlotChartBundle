<?php

namespace RobQ\FlotChartBundle\Charts\Components;

class DefaultChart implements DefaultChartInterface
{
    /**
     * FlotDocu (http://flot.googlecode.com/svn/trunk/API.txt):
     * The placeholder is a jQuery object or DOM element or jQuery expression
     * that the plot will be put into.
     * @var string
     */
    protected $placeholder="chartdiv";


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
     * @return string
     */
    public function getPlaceholder()
    {
        return $this->placeholder;
    }

    /**
     * @param string $placeholder
     */
    public function setPlaceholder($placeholder)
    {
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
    public function getOptions()
    {
        return $this->options;
    }

    /**
     * @param \RobQ\FlotChartBundle\Charts\Components\Options $options
     */
    public function setOptions(Options $options)
    {
        $this->options = $options;
    }
}
