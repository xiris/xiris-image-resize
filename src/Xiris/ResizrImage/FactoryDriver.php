<?php

namespace Xiris\ResizrImage;

use Xiris\ResizrImage\Exception\Exception;

/**
 * Class FactoryDriver
 * @package Xiris\ResizrImage
 */
class FactoryDriver
{

    /**
     * @param $driver
     * @throws Exception
     */
    public static function build($driver)
    {
        $driver = ucfirst($driver);
        $class  = sprintf(__NAMESPACE__.'\\Driver\\%s', $driver);

        if (!class_exists($class)) {
            throw new Exception("Class for driver '{$driver}' could not be instantiated.");
        }

        return new $class;
    }
}