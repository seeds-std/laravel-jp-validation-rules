<?php

namespace SeedsStd\JpValidationRules;

use Illuminate\Contracts\Validation\Rule;

class PhoneNumber implements Rule
{
    /**
     * @var bool
     */
    protected $allow_country_code;

    /**
     * Create a new rule instance.
     *
     * @return void
     */
    public function __construct($allow_contry_code = false)
    {
        $this->allow_country_code = $allow_contry_code;
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
        if ($this->allow_country_code) {
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
        return ':attribute must be Japanese phone number format.';
    }
}
