<?php

namespace Xiris\Resizr;

use \Xiris\Resizr\Exception\Exception;

/**
 * Class Image
 * @package Xiris\Resizr
 */
class Image
{
    /**
     * @var \Xiris\Resizr\Config
     */
    protected $config;

    /**
     * @param array $config
     */
    public function __construct(array $config = [])
    {
        $this->setConfig($config);
    }

    /**
     * @param array $config
     * @return $this
     */
    public function setConfig(array $config = [])
    {
        $this->config = new Config($config);
        return $this;
    }

    /**
     * @return \Xiris\Resizr\Config
     * @throws  \Xiris\Resizr\Exception\Exception
     */
    public function getConfig()
    {
        if (!$this->config instanceof Config) {
            throw new Exception('The config class wasnt instantiated.');
        }

        return $this->config;
    }

    /**
     * @return string
     * @throws Exception
     */
    public function getDriver()
    {
        return $this->getConfig()->offsetGet('driver');
    }
}
