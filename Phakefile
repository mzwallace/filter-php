<?php

group('docs', function()
{
  desc('Build the docs using Sami');
  task('build', function()
  {
    echo "Phake: Building documentation.\n";
    echo `php vendor/sami/sami/sami.php update docs/config.php`;
  });

  desc('Serve the documentation');
  task('serve', function ()
  {
    echo "Phake: Serving documentation at 0.0.0.0:8888.\n";
    echo "Phake: Press ctrl-c to Exit.\n";
    echo `php -S 0.0.0.0:8888 -t docs/ & open http://0.0.0.0:8888/master/index.html`;
  });
});

group('test', function()
{
  desc('Run all tests');
  task('all', function()
  {
    echo "Phake: Running all tests.\n";
    echo `phpunit tests/`;
  });
});

task('default', 'test:all');
