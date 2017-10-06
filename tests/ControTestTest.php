<?php
/**
 * Created by PhpStorm.
 * User: oabroms
 * Date: 10/6/17
 * Time: 4:40 PM
 */

namespace Castlebranch\Siesta;


use PHPUnit_Framework_TestCase;
use PHPUnit\Framework\TestCase;


class ControTestTest extends PHPUnit_Framework_TestCase
{
    public function testGetStatusCode()
    {
        $thisone = new ControTest();
        $this->assertEquals(220, $thisone->getStatusCode());
    }

    public function testSetStatusCode()
    {
        $thisone = new ControTest();
        $thisone->setStatusCode(240);
        $this->assertEquals(240, $thisone->getStatusCode());
    }

    public function testRespondWithArray()
    {
        $data = ['foo', 'bar', 'baz'];
        $headers = ['foo', 'lin'];
        $thisone = new ControTest();
        $this->assertEquals([],$thisone->respondWithArray($data, $headers));
    }

    public function testRespondWithNoContent()
    {
        $thisone = new ControTest();
        $thisone->respondWithNoContent();
    }
    public function testRespondWithCreated()
    {
        $data = ['foo', 'bar', 'baz'];
        $thisone = new ControTest();
        $thisone->respondWithCreated($data);
    }
    public function testRespondWithAccepted()
    {
        $data = ['foo', 'bar', 'baz'];
        $thisone = new ControTest();
        $thisone->respondWithAccepted($data);
    }
}
