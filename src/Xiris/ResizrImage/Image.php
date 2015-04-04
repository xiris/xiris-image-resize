<?php

namespace Xiris\ResizrImage;

use \Xiris\ResizrImage\Exception\ImageException;

/**
 * Class Image
 * @package Xiris\ResizrImage
 */
class Image implements InterfaceImage
{
    protected $height;
    protected $width;
    protected $path;
    protected $extension;
    protected $image;

    /**
     * @var array
     */
    protected $allowedExtensions = ['jpg', 'png', 'gif'];

    /**
     * @param string $path
     */
    public function __construct($image = '')
    {
        if (!empty($image)) {
            $this->$image = $image;
            $this->generateImageInfo();
        }
    }

    /**
     * @param $filename
     * @return $this
     */
    public function setImage($image)
    {
        $this->image = $image;
        return $this;
    }

    /**
     * @return string
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * @return $this
     */
    protected function setExtension($extension)
    {
        $extension = strtolower(trim($extension));

        if (!in_array($extension, $this->allowedExtensions)) {
            throw new ImageException("Type {$extension} not supported.");
        }

        $this->extension = $extension;
        return $this;
    }

    /**
     * @return mixed
     */
    protected function getExtension()
    {
        return $this->extension;
    }

    public function generateImageInfo()
    {
        $extension = substr($this->image, -3);
        $this->setExtension($extension);

        //header("Content-Type: image/{$this->extension}");

        list($this->width, $this->height) = getimagesize($this->image);

    }
}
