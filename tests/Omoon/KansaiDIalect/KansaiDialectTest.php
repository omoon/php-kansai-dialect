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

    public function testものもらい()
    {
        $this->assertEquals('めばちこ', KansaiDialect::translate('ものもらい'));
    }

    public function testちがいます()
    {
        $this->assertEquals('ちゃいます', KansaiDialect::translate('ちがいます'));
    }

    public function testしらないよ()
    {
        $this->assertEquals('しらんがな', KansaiDialect::translate('しらないよ'));
    }

    public function test夏だからバーベキューするんだ()
    {
        $this->assertEquals('夏やからバーベキューすんねん', KansaiDialect::translate('夏だからバーベキューするんだ'));
    }
}