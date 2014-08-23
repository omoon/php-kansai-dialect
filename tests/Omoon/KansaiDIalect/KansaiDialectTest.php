<?php
namespace Omoon\KansaiDialect\Tests;

use Omoon\KansaiDialect\KansaiDialect;

/**
 * Class KansaiDialectTest
 * @package Omoon\KansaiDialect\Tests
 */
class KansaiDialectTest extends \PHPUnit_Framework_TestCase
{

    public function testAA()
    {
        $original = 'だけど僕、出来たて法隆寺見ないで行きます。';
        $expected = 'せやけど僕、出来たて法隆寺見んと行きます。';
        $this->assertEquals($expected, KansaiDialect::translate($original));
    }



    public function testTranslate()
    {
        $fh = fopen(__DIR__ . '/phrases.csv', 'r');
        while (list($original, $expected) = fgetcsv($fh)) {
            $this->assertEquals($expected, KansaiDialect::translate($original));
        }
        fclose($fh);
    }
}
