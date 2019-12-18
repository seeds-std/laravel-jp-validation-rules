<?php

namespace SeedsStd\JpValidationRules;

use Illuminate\Contracts\Validation\Rule;

class PhoneNumber implements Rule
{
    /**
     * @var array
     */
    protected $configs;

    /**
     * Create a new rule instance.
     *
     * @param array $configs
     * @return void
     */
    public function __construct(array $configs = [])
    {
        $default_configs = [
            'allow_country_code' => false,
        ];

        $this->configs = array_merge($default_configs, $configs);
    }

    /**
     * Determine if the validation rule passes.
     *
     * @param  string $attribute
     * @param  mixed $value
     * @return bool
     */
    public function passes($attribute, $value)
    {
        if ($this->configs['allow_country_code']) {
            return (bool)preg_match('/^\+?81\d{1,4}[-\s]?\d{1,4}[-\s]?\d{1,4}$/', $value);
        }

        return (bool)preg_match('/^0\d{1,4}[-\s]?\d{1,4}[-\s]?\d{1,4}$/', $value);
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return __('validation.jp_phone_number');
    }
}
