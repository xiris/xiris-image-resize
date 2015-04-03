<?php
require_once 'vendor/autoload.php';

$config = ['driver' => 'gd'];

$image = new Xiris\Resizr\Image($config);

var_dump($image);
var_dump($image->getConfig());
var_dump($image->getDriver());

var_dump($image->setConfig(['driver' => 'imagick']));
var_dump($image);
