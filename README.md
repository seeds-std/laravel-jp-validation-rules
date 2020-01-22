# Japanese validation rules for Laravel

[![Build Status](https://travis-ci.com/seeds-std/laravel-jp-validation-rules.svg?branch=master)](https://travis-ci.com/seeds-std/laravel-jp-validation-rules)
[![codecov](https://codecov.io/gh/seeds-std/laravel-jp-validation-rules/branch/master/graph/badge.svg)](https://codecov.io/gh/seeds-std/laravel-jp-validation-rules)
[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/seeds-std/laravel-jp-validation-rules/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/seeds-std/laravel-jp-validation-rules/?branch=master)

## Installation

```shell
composer require seeds-std/laravel-jp-validation-rules
```

## Usage

### Hiragana

```php
Validator::make(['name' => 'やまだたろう'], ['name' => new \SeedsStd\JpValidationRules\Hiragana()])
    ->passes(); // true
```

### ZenkakuKatakana

```php
Validator::make(['name' => 'ヤマダタロウ'], ['name' => new \SeedsStd\JpValidationRules\ZenkakuKatakana()])
    ->passes(); // true
```

### HankakuKatakana

```php
Validator::make(['name' => 'ﾔﾏﾀﾞﾀﾛｳ'], ['name' => new \SeedsStd\JpValidationRules\HankakuKatakana()])
    ->passes(); // true
```

### PhoneNumber

```php
Validator::make(['phone_number' => '0120123456'], ['phone_number' => new \SeedsStd\JpValidationRules\PhoneNumber()])
    ->passes(); // true
```

```php
Validator::make(['phone_number' => '+81120123456'], ['phone_number' => new \SeedsStd\JpValidationRules\PhoneNumber(['allow_country_code' => true])])
    ->passes(); // true
```

### Postcode

```php
Validator::make(['postcode' => '111-2222'], ['postcode' => new \SeedsStd\JpValidationRules\Postcode()])
    ->passes(); // true
```

## Translation

Translate validation messages with `resources/lang/ja/validation.php`

```php
<?php

return [
    'hiragana'             => ':attributeはひらがなを指定してください。',
    'zenkaku_katakana'     => ':attributeは全角カタカナを指定してください。',
    'hankaku_katakana'     => ':attributeは半角カタカナを指定してください。',
    'jp_postcode'          => ':attributeは正しい郵便番号の形式を指定してください。',
    'jp_phone_number'      => ':attributeは正しい電話番号の形式を指定してください。',
];
```
