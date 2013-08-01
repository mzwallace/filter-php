# filter

## Usage
```
$filters = new MZW\Filter\Manager(
  new \MZW\Filter\Input\ArrayInput([
    'Johnny' => ['Black', 'Yellow'],
    'David' => ['Pink', 'Magenta'],
    'Shape' => ['Jane', 'Baby Jane']
  ]),

  new \MZW\Filter\Repository([
    new \MZW\Filter\Filter\SimpleFilter('Johnny', ['Black', 'Green', 'Blue']),
    new \MZW\Filter\Filter\SimpleFilter('David', ['Pink', 'Purple', 'Red']),
    new \MZW\Filter\Filter\EloquentFilter('Shape', [
      'model'     => 'Product',
      'attribute' => 'shape',
      'ignore'    => ['Baby Jane']
    ])
  ]),

  new \MZW\Filter\Output\JsonOutput
);

$filters->getOutput();
=> [{"name":"Johnny","options":["Black"]},{"name":"David","options":["Pink"]},{"name":"Shape","options":["Jane"]}]
```

## Install via composer
```
$ touch composer.json
$ more composer.json
{
  "repositories": [
      {
          "type": "vcs",
          "url": "https://github.com/mzwallace/filter-php"
      }
  ],
  "require": {
      "mzwallace/filter-php": "*"
  }
}

$ composer install
```

## Development

### Install phake globally
```
$ cd vendor/jaz303/phake
$ ./build.php
$ cp phake /usr/local/bin/
```

### Tasks
```
$ phake -T

docs:build    Build the docs using Sami
docs:serve    Serve the documentation
test:all      Run all tests
```
