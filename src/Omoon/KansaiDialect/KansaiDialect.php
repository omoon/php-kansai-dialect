<?php
namespace Omoon\KansaiDialect;

/**
 * Class KansaiDialect
 * @package Omoon\KansaiDialect
 */
class KansaiDialect
{

    public static function translate($input)
    {
        $input = preg_replace('/僕/', 'わて', $input);
        $input = preg_replace('/ですね/', 'やん', $input);
        $input = preg_replace('/です/', 'やねん', $input);
        $input = preg_replace('/とても/', 'めっちゃ', $input);
        $input = preg_replace('/おもしろい/', 'おもろい', $input);
        return $input;
    }
}