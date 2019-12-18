<?php

namespace SeedsStd\JpValidationRules\Tests;

use Illuminate\Support\Facades\Validator;
use Orchestra\Testbench\TestCase;
use SeedsStd\JpValidationRules\Postcode;

class PostTest extends TestCase
{
    /**
     * @param $postcode
     * @param mixed ...$params
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator($postcode, ...$params)
    {
        return Validator::make(['postcode' => $postcode], ['postcode' => new Postcode()]);
    }

    /**
     * @return void
     */
    public function testPostcode()
    {
        $this->assertTrue($this->validator('111-22223')->fails());

        $this->assertTrue($this->validator('111-2222')->passes());
        $this->assertTrue($this->validator('1112222')->passes());
    }
}