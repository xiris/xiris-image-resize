<?php

namespace Xiris\ResizrImage;

/**
 * Interface InterfaceImage
 * @package Xiris\ResizrImage
 */
interface InterfaceImage
{
    /**
     * @param $image
     * @return mixed
     */
    public function setImage($image);

    /**
     * @return mixed
     */
    public function getImage();
}