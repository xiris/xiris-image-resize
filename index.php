<?php
require_once 'vendor/autoload.php';

$config = ['driver' => 'gd'];

$image = new \Xiris\ResizrImage\Image($config);

var_dump($image);
var_dump($image->getConfig());
var_dump($image->getDriver());
var_dump($image->getDriver()->getName());
