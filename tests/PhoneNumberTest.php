<?php

namespace SeedsStd\JpValidationRules\Tests;

use Illuminate\Support\Facades\Validator;
use Orchestra\Testbench\TestCase;
use SeedsStd\JpValidationRules\PhoneNumber;

class PhoneNumberTest extends TestCase
{
    /**
     * @param $phone_number
     * @param mixed ...$params
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator($phone_number, ...$params)
    {
        return Validator::make(['phone_number' => $phone_number], ['phone_number' => new PhoneNumber($params)]);
    }

    /**
     * @test
     */
    public function it_validates_jp_phone_number()
    {
        $this->assertTrue($this->validator('1111111111')->fails());

        $this->assertTrue($this->validator('0120123456')->passes());
        $this->assertTrue($this->validator('0901234567')->passes());
    }

    /**
     * @test
     */
    public function it_allows_spaces()
    {
        $this->assertTrue($this->validator('0120 123 456')->passes());
    }

    /**
     * @test
     */
    public function it_allows_hyphens()
    {
        $this->assertTrue($this->validator('0120-123-456')->passes());
    }

    /**
     * @test
     */
    public function it_allows_country_code()
    {
        $this->assertTrue($this->validator('+81120123456', ['allow_country_code' => true])->passes());
    }
}