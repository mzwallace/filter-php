# library

A shared PHP Library that contains our domain / business logic

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
          "url": "https://github.com/mzwallace/library"
      }
  ],
  "require": {
      "mzwallace/library": "*"
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

#!/usr/bin/env php
(in /Users/jgreen/Sites/mzwallace/mzwallace.com/library)
docs:build    Build the docs using Sami
docs:serve    Serve the documentation
test:all      Run all tests
```
