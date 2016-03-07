<?php

namespace DesignPatterns\Structural\DependencyInjection;


/**
 * connect 类
 */
class Connection
{
    /**
     * @var Configuration
     */
    protected $configuration;

    /**
     * @var connected host
     */
    protected $host;

    /**
     * @param Parameters $config
     */

    public function __construct(Parameters $config)
    {
        $this->configuration=$config;
    }

    /**
     * 使用注入配置连接
     */
    public function connect()
    {
        $host = $this->configuration->get('host');
        //连接到主机,权限认证.

        //如果已经连接了
        $this->host = $host;
    }


    /**
     * 获取当前已经连接的主机
     *
     * @return string
     */
    public function getHost()
    {
        return $this->host;
    }
}