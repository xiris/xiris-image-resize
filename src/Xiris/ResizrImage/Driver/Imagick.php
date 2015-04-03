<?php

namespace Xiris\ResizrImage\Driver;

/**
 * Class Imagick
 * @package Xiris\ResizrImage\Driver
 */
class Imagick implements \Xiris\ResizrImage\InterfaceDriver
{
    const EXTENSION_NAME = 'imagick';

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

    public function getName()
    {

    }
}