<?php

namespace SeedsStd\JpValidationRules\Tests;

use Illuminate\Support\Facades\Validator;
use Orchestra\Testbench\TestCase;
use SeedsStd\JpValidationRules\ZenkakuKatakana;

class ZenkakuKatakanaTest extends TestCase
{
    /**
     * @param $string
     * @param mixed $params
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator($string, $params = [])
    {
        return Validator::make(['name' => $string], ['name' => new ZenkakuKatakana($params)]);
    }

    /**
     * @test
     */
    public function it_validates_empty_string()
    {
        $this->assertTrue($this->validator('')->passes());
    }

    /**
     * @test
     */
    public function it_validates_kanji()
    {
        $this->assertTrue($this->validator('山田太郎')->fails());
    }

    /**
     * @test
     */
    public function it_validates_hiragana()
    {
        $this->assertTrue($this->validator('やまだたろう')->fails());
    }


    /**
     * @test
     */
    public function it_validates_zenkaku_katakana()
    {
        $this->assertTrue($this->validator('ヤマダタロウ')->passes());
    }

    /**
     * @test
     */
    public function it_validates_hankaku_katakana()
    {
        $this->assertTrue($this->validator('ﾔﾏﾀﾞﾀﾛｳ')->fails());
    }
}