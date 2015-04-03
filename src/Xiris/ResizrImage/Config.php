<?php

namespace Xiris\ResizrImage;

use Xiris\ResizrImage\Exception\InvalidArgumentException;

/**
 * Class Image
 * @package Xiris\ResizrImage
 */
class Config implements \ArrayAccess
{
    /**
     * @var array
     * @access protected
     */
    protected $configs = [];

    /**
     * @param array $config
     */
    public function __construct(array $configs = array())
    {
        $this->configs = $configs;
    }

    /**
     * @param mixed $key
     * @return bool
     */
    public function offsetExists($key)
    {
        return isset($this->configs[$key]);
    }

    /**
     * @param mixed $key
     * @return string
     */
    public function offsetGet($key)
    {
        return ($this->offsetExists($key)) ? $this->configs[$key] : '';
    }

    /**
     * @param mixed $key
     * @return bool
     */
    public function offsetUnset($key)
    {
        unset($this->configs[$key]);
        return true;
    }

    /**
     * @param mixed $key
     * @param mixed $value
     * @return bool
     * @throws InvalidArgumentException
     */
    public function offsetSet($key, $value)
    {
        if (empty($key) || empty($value)) {
            throw new InvalidArgumentException('The params key and value could not be empty.');
        }

        $this->configs[$key] = $value;
        return true;
    }

    /**
     * @return array
     */
    public function getConfigs()
    {
        return $this->configs;
    }
}
