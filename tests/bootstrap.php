<?php

require __DIR__.'/../vendor/autoload.php';

use \MZW\FilterSystem\FilterInput\ArrayFilterInput;
use \MZW\FilterSystem\FilterRepository;
use \MZW\FilterSystem\Filter\SimpleFilter;
use \MZW\FilterSystem\FilterOutput\JsonFilterOutput;

$seeds = [
  'FilterOutput' => new ArrayFilterInput(['test' => ['Black']]),

  'FilterRepository' => new FilterRepository([
      new SimpleFilter('test', ['Black', 'Red', 'Navy'])
  ]),

  'FilterManager' => new FilterRepository(
    new ArrayFilterInput(['test' => ['Black']]),
    new FilterRepository([
      new SimpleFilter('test', ['Black', 'Red', 'Navy'])
    ]),
    new JsonFilterOutput
  )
];
