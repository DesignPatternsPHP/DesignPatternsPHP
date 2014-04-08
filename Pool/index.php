<?php

use DesignPatterns\Pool\Pool;
use DesignPatterns\Pool\Processor;

$pool = new Pool('DesignPatterns\Pool\Worker');
$processor = new Processor($pool);

$processor->process('image1.jpg');
$processor->process('image2.jpg');
$processor->process('image3.jpg');
$processor->process('image4.jpg');
$processor->process('image5.jpg');
$processor->process('image6.jpg');
$processor->process('image7.jpg');
$processor->process('image8.jpg');
