# Japanese validation rules for Laravel

[![Build Status](https://travis-ci.com/seeds-std/laravel-jp-validation-rules.svg?branch=master)](https://travis-ci.com/seeds-std/laravel-jp-validation-rules)
[![codecov](https://codecov.io/gh/seeds-std/laravel-jp-validation-rules/branch/master/graph/badge.svg)](https://codecov.io/gh/seeds-std/laravel-jp-validation-rules)

## Installation

```shell
composer require seeds-std/laravel-jp-validation-rules
```

## Usage

### PhoneNumber

```php
Validator::make(['phone_number' => '0120123456'], ['phone_number' => new PhoneNumber()]);
```

```php
Validator::make(['phone_number' => '+81120123456'], ['phone_number' => new PhoneNumber(['allow_country_code' => true])]);
```

### Postcode

```php
Validator::make(['postcode' => '111-2222'], ['postcode' => new Postcode()]);
```

## Translation

Translate validation messages with `resources/lang/ja/validation.php`

```php
<?php

return [
    'jp_postcode'          => ':attributeは正しい郵便番号の形式を指定してください。',
    'jp_phone_number'      => ':attributeは正しい電話番号の形式を指定してください。',
];
```
