<?php

use Sami\Sami;
use Sami\Version\GitVersionCollection;
use Symfony\Component\Finder\Finder;

$iterator = Finder::create()
            ->files()
            ->name('*.php')
            ->in($dir = __DIR__.'../src');

// generate documentation for all v1.0.* tags, the 1.0 branch, and the master one
$versions = GitVersionCollection::create($dir)
            ->addFromTags('v1.0.*')
            ->add('master', 'master branch');

return new Sami($iterator, array(
  'versions'  => $versions,
  'title'     => 'MZ Wallace, Inc. API',
  'build_dir' => __DIR__.'/%version%',
  'cache_dir' => __DIR__.'/cache/%version%',
));
