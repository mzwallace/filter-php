<?php

use \Mzwallace\Filter\Manager as FilterManager;

use \Mzwallace\Filter\Input\ArrayInput;
use \Mzwallace\Filter\Repository as FilterRepository;
use \Mzwallace\Filter\Output\JsonOutput;

use \Mzwallace\Filter\Filter\SimpleFilter;
use \Mzwallace\Filter\Filter\EloquentFilter;

$fixtures = [
  'FilterOutput' => new ArrayInput([4 => ['Black']]),

  'FilterRepository' => new FilterRepository([
      new SimpleFilter(4, 'attribute', 'test', ['Black', 'Red', 'Navy'])
  ]),

  'FilterManager' => new FilterManager(
    new ArrayInput([
      1 => ['Black', 'Yellow'],
      2 => ['Pink', 'Magenta'],
      3 => [
        [
          'id' => 1,
          'shape' => 'Jane'
        ],
        [
          'id' => 2,
          'shape' => 'Baby Jane'
        ]
      ]
    ]),

    new FilterRepository([
      new SimpleFilter(1, 'attribute', 'Johnny', ['Black', 'Green', 'Blue']),
      new SimpleFilter(2, 'attribute', 'David', ['Pink', 'Purple', 'Red']),
      new EloquentFilter(3, 'attribute', 'Shape', [
        'model'     => 'Product',
        'attribute' => 'shape',
        'ignore'    => ['Baby Jane']
        //'only'    => ['Baby Jane']
      ])
    ]),

    new JsonOutput
  )
];
