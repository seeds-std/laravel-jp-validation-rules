<?php

namespace SeedsStd\JpValidationRules;

use Illuminate\Contracts\Validation\Rule;

class Postcode implements Rule
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
        $default_configs = [];

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
        return (bool)preg_match('/^\d{3}\-?\d{4}$/', $value);
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return __('validation.jp_postcode');
    }
}
