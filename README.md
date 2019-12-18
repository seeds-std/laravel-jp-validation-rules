# Jp Validation Rules

### Installation

```shell
composer require seeds-std/laravel-jp-validation-rules
```

### Usage

### PhoneNumber

```php
Validator::make(['phone_number' => $phone_number], ['phone_number' => new PhoneNumber($params)]);
```

### Postcode

```php
Validator::make(['postcode' => $postcode], ['postcode' => new Postcode()]);
```
