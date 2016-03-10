<?php

namespace DesignPatterns\Structural\Decorator;

/**
 *  RenderInXml 类
 */
class RenderInXml extends Decorator
{
    /**
     *
     * 渲染XML数据
     *
     * @return mixed|string
     */
    public function renderData()
    {
        $output = $this->wrapped->renderData();

        //做一些转化从数组到XML
        $doc = new \DOMDocument();

        foreach ($output as $key => $val) {
            $doc->appendChild($doc->createElement($key, $val));
        }

        return $doc->saveXML();
    }
}
