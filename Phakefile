<?php

group('docs', function()
{
  desc('Build the docs using Sami');
  task('build', function()
  {
    writeln();
    writeln(purple('Building documentation.'));
    writeln();
    writeln(`php vendor/sami/sami/sami.php update docs/config.php`);
  });

  desc('Serve the documentation');
  task('serve', function ()
  {
    writeln();
    writeln(purple('Serving documentation at 0.0.0.0:8888.'));
    writeln(purple('Press ctrl-c to Exit.'));
    writeln();
    writeln(`php -S 0.0.0.0:8888 -t docs/ & open http://0.0.0.0:8888/master/index.html`);
  });
});

group('test', function()
{
  desc('Run all tests');
  task('all', function()
  {
    writeln();
    writeln(purple('Running all tests.'));
    writeln();
    writeln(`phpunit`);
  });
});

task('default', 'test:all');
