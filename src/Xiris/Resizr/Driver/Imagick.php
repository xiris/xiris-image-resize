<?php

namespace Xiris\Resizr\Driver;

/**
 * Class Imagick
 * @package Xiris\Resizr\Driver
 */
class Imagick implements \Xiris\Resizr\InterfaceDriver
{

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
    public function getDriver()
    {
        return __CLASS__;
    }
}