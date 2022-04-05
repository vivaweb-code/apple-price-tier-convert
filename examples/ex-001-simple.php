<?php

include __DIR__ . '/../vendor/autoload.php';

use Vivaweb\AppleUtils\PriceTierConvert;

echo PriceTierConvert::lowerTierByPrice(11, 'BRL');
