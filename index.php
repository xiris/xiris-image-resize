<?php
require_once 'vendor/autoload.php';

$config = ['driver' => 'gd'];

$image = new \Xiris\ResizrImage\Image();
$image->setImage('profile-photo.jpg');
$image->generateImageInfo();

$build = new \Xiris\ResizrImage\Build($config);
$build->setImage($image);
var_dump($build);
var_dump($build->getConfig());
var_dump($build->getImage());
var_dump($build->getDriver());
var_dump($build->getDriver()->getName());
