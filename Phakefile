<?php

group(cyan('docs'), function()
{
  desc('Build the docs using Sami');
  task(red('build'), function()
  {
    writeln(purple('Phake:').' Building documentation.');
    writeln(`php vendor/sami/sami/sami.php update docs/config.php`);
  });

  desc('Serve the documentation');
  task(red('serve'), function ()
  {
    writeln(purple('Phake:').' Serving documentation at 0.0.0.0:8888.');
    writeln(purple('Phake:').' Press ctrl-c to Exit.');
    writeln(`php -S 0.0.0.0:8888 -t docs/ & open http://0.0.0.0:8888/master/index.html`);
  });
});

group(cyan('test'), function()
{
  desc('Run all tests');
  task(red('all'), function()
  {
    writeln(purple('Phake:').' Running all tests.');
    writeln(`phpunit tests/`);
  });
});

task('default', 'test:all');
