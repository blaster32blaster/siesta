<?php
/**
 * Created by PhpStorm.
 * User: oabroms
 * Date: 10/9/17
 * Time: 10:11 AM
 */

namespace Castlebranch\Siesta;


use PHPUnit_Framework_TestCase;
use Illuminate\Foundation\Http\FormRequest;
//use PHPUnit\Framework\TestCase;
///var/www/laravel/siesta/vendor/phpunit/phpunit/src/Framework/TestCase.php

class RequestTest extends PHPUnit_Framework_TestCase
{

    public function testRequestRules()
    {

        $request = new RequestInstance();
        $here = $request->rules();
//        $this->assertTrue()
    }
}
