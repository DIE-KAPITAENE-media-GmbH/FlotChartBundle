<?php

namespace RobQ\FlotChartBundle\Charts\Components;

interface DefaultChartInterface
{
    public function getPlaceholder();

    public function setPlaceholder($placeholder);

    public function getDataRows();

    public function setDataRows($dataRows);

    public function getOptions();

    public function setOptions(Options $options);
}
