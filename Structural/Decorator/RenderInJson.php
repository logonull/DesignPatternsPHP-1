<?php

namespace DesignPatterns\Structural\Decorator;

/**
 *  RenderInJson类
 */
class RenderInJson extends Decorator
{
    /**
     * 返回 JSON.
     *
     * @return mixed|string
     */
    public function renderData()
    {
        $output = $this->wrapped->renderData();

        return json_encode($output);
    }
}
