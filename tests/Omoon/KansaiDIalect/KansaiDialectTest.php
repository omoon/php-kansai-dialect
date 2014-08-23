<?php
namespace Omoon\KansaiDialect\Tests;

use Omoon\KansaiDialect\KansaiDialect;

/**
 * Class KansaiDialectTest
 * @package Omoon\KansaiDialect\Tests
 */
class KansaiDialectTest extends \PHPUnit_Framework_TestCase
{

    public function testわては男やねん()
    {
        $this->assertEquals('わては男やねん', KansaiDialect::translate('僕は男です'));
    }

    public function testとてもおもしろいですね()
    {
        $this->assertEquals('めっちゃおもろいやん', KansaiDialect::translate('とてもおもしろいですね'));
    }
}