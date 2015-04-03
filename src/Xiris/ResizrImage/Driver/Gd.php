<?php

namespace Xiris\ResizrImage\Driver;

use ReflectionClass;
use Xiris\ResizrImage\Exception\Exception;

/**
 * Class Gd
 * @package Xiris\ResizrImage\Driver
 */
class Gd implements \Xiris\ResizrImage\InterfaceDriver
{
    const EXTENSION_NAME = 'gd';

    /**
     * @throws Exception
     */
    public function __construct()
    {
        if (!extension_loaded(self::EXTENSION_NAME)) {
            throw new Exception(sprintf('The library "%s" need to be enabled on PHP.', self::EXTENSION_NAME));
        }
    }

    /**
     * @return string
     */
    public function generateImage()
    {
        return 'imagename';
    }

    /**
     * @return string
     */
    public function getName()
    {
        return (new ReflectionClass($this))->getShortName();
    }
}