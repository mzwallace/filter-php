# filter

To include this package via composer in other projects
add the following to the composer.json file:

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

### Usage
```
$ phake -T

docs:build    Build the docs using Sami
docs:serve    Serve the documentation
test:all      Run all tests
```
