<?php

namespace Xiris\ResizrImage;

use \Xiris\ResizrImage\Exception\Exception;
use \Xiris\ResizrImage\Exception\InvalidArgumentException;

/**
 * Class Build
 * @package Xiris\ResizrImage
 */
class Build
{
    /**
     * @var \Xiris\ResizrImage\Config
     */
    protected $config;

    /**
     * @var \Xiris\ResizrImage\InterfaceDriver
     */
    protected $driver;

    protected $image;

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
     * @return \Xiris\ResizrImage\Config
     * @throws  \Xiris\ResizrImage\Exception\Exception
     */
    public function getConfig()
    {
        if (!$this->config instanceof Config) {
            throw new Exception('The config class wasnt instantiated.');
        }

        return $this->config;
    }

    /**
     * @param InterfaceImage $image
     * @return $this
     */
    public function setImage(InterfaceImage $image)
    {
        $this->image = $image;
        return $this;
    }

    /**
     * @return Image
     * @throws Exception
     */
    public function getImage()
    {
        if (!$this->image instanceof Image) {
            throw new Exception('The image class wasnt instantiated.');
        }

        return $this->image;
    }

    /**
     * @return \Xiris\ResizrImage\InterfaceDriver
     * @throws Exception
     */
    public function getDriver()
    {
        if (empty($this->getConfig()->offsetExists('driver'))) {
            throw new InvalidArgumentException('The key "driver" dont exist in config');
        }

        $driver = ucfirst($this->getConfig()->offsetGet('driver'));
        $class  = sprintf('Xiris\\ResizrImage\\Driver\\%s', $driver);

        if (!class_exists($class)) {
            throw new Exception("Class for driver '{$driver}' could not be instantiated.");
        }

        return $this->driver = new $class;
    }
}
