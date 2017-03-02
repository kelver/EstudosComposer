<?php

/**
 * Created by PhpStorm.
 * User: kelver
 * Date: 02/03/17
 * Time: 01:15
 */
namespace Kelver\Curso;

class HelloPackageTest extends \PHPUnit_Framework_TestCase
{
    public function testGetHello()
    {
        $hello = new HelloPackage();
        $string = $hello->getHello();
        $this->assertNotNull($string);
        $this->assertInternalType("string", $string);
        $this->assertNotEquals(0, strlen($string));
    }
}