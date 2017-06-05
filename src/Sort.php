<?php
namespace src;


class Sort
{
    public static function foo()
    {
        return 5;
    }

    public static function quick($intArray = [])
    {
        if (count($intArray) < 2) {
            return $intArray;
        }
        $first = array_shift($intArray);
        $left = [];
        $right = [];
        foreach ($intArray as $v) {
            ($v < $first) ? $left[] = $v : $right[] = $v;
        }
        $left = static::quick($left);
        array_push($left, $first);
        $right = static::quick($right);
        return array_merge($left, $right);
    }
}
