<?php

namespace Xiris\ResizrImage;

/**
 * Interface InterfaceDriver
 * @package Xiris\ResizrImage
 */
interface InterfaceDriver
{
    public function generateImage();
    public function getName();
}