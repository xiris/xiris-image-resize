<?php

namespace Xiris\Resizr\Driver;

/**
 * Class Gd
 * @package Xiris\Resizr\Driver
 */
class Gd implements \Xiris\Resizr\InterfaceDriver
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