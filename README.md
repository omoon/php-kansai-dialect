[![Build Status](https://travis-ci.org/omoon/php-kansai-dialect.svg?branch=master)](https://travis-ci.org/omoon/php-kansai-dialect)
[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/omoon/php-kansai-dialect/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/omoon/php-kansai-dialect/?branch=master)

[![Latest Stable Version](https://poser.pugx.org/omoon/php-kansai-dialect/v/stable.svg)](https://packagist.org/packages/omoon/php-kansai-dialect) [![Total Downloads](https://poser.pugx.org/omoon/php-kansai-dialect/downloads.svg)](https://packagist.org/packages/omoon/php-kansai-dialect) [![Latest Unstable Version](https://poser.pugx.org/omoon/php-kansai-dialect/v/unstable.svg)](https://packagist.org/packages/omoon/php-kansai-dialect) [![License](https://poser.pugx.org/omoon/php-kansai-dialect/license.svg)](https://packagist.org/packages/omoon/php-kansai-dialect)

# Kansai Dialect

Translate your Japanese into Kansai Dialect.

## Example

```php
KansaiDialect::translate('僕は男です。'); // 僕は男やねん。
KansaiDialect::translate('とても面白いですね。'); // めっちゃおもろいやん。
```

## Installation

Just create a composer.json file and run `$ php composer.phar install` to install it:

```
{
    "require": {
        "omoon/php-kansai-dialect": "*"
    }
}
```

## Tests

```
$ php composer.phar install
$ php vendor/bin/phpunit
```

## License

This is licensed under the MIT License, see [LICENSE](LICENSE).