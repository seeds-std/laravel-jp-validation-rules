# Jp Validation Rules

[![Build Status](https://travis-ci.com/seeds-std/laravel-jp-validation-rules.svg?branch=master)](https://travis-ci.com/seeds-std/laravel-jp-validation-rules)
[![codecov](https://codecov.io/gh/seeds-std/laravel-jp-validation-rules/branch/master/graph/badge.svg)](https://codecov.io/gh/seeds-std/laravel-jp-validation-rules)

## Installation

```shell
composer require seeds-std/laravel-jp-validation-rules
```

## Usage

### PhoneNumber

```php
Validator::make(['phone_number' => $phone_number], ['phone_number' => new PhoneNumber($params)]);
```

### Postcode

```php
Validator::make(['postcode' => $postcode], ['postcode' => new Postcode()]);
```
