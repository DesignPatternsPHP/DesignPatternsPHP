<?php

require '../../vendor/autoload.php';

use DesignPatterns\More\EAV\Attribute;
use DesignPatterns\More\EAV\Entity;
use DesignPatterns\More\EAV\Value;

// Create color attribute
$color = (new Attribute())->setName('Color');
// Create color values
$colorSilver = (new Value($color))->setName('Silver');
$colorGold = (new Value($color))->setName('Gold');
$colorSpaceGrey = (new Value($color))->setName('Space Grey');

// Create memory attribute
$memory = (new Attribute())->setName('Memory');
// Create memory values
$memory4Gb = (new Value($memory))->setName('4GB');
$memory8Gb = (new Value($memory))->setName('8GB');
$memory16Gb = (new Value($memory))->setName('16GB');

// Create storage attribute
$storage = (new Attribute())->setName('Storage');
// Create storage values
$storage128Gb = (new Value($storage))->setName('128GB');
$storage256Gb = (new Value($storage))->setName('256GB');
$storage512Gb = (new Value($storage))->setName('512GB');
$storage1Tb = (new Value($storage))->setName('1TB');

// Create entities with specific values
$mac = (new Entity())
    ->setName('MacBook')
    // colors
    ->addValue($colorSilver)
    ->addValue($colorGold)
    ->addValue($colorSpaceGrey)
    // memories
    ->addValue($memory8Gb)
    // storages
    ->addValue($storage256Gb)
    ->addValue($storage512Gb);

$macAir = (new Entity())
    ->setName('MacBook Air')
    // colors
    ->addValue($colorSilver)
    // memories
    ->addValue($memory4Gb)
    ->addValue($memory8Gb)
    // storages
    ->addValue($storage128Gb)
    ->addValue($storage256Gb)
    ->addValue($storage512Gb);

$macPro = (new Entity())
    ->setName('MacBook Pro')
    // colors
    ->addValue($colorSilver)
    // memories
    ->addValue($memory8Gb)
    ->addValue($memory16Gb)
    // storages
    ->addValue($storage128Gb)
    ->addValue($storage256Gb)
    ->addValue($storage512Gb)
    ->addValue($storage1Tb);
