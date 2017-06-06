<?php

namespace src;


class Sort
{

    /**
     * 快速排序
     * @param array $intArray
     * @return array
     */
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

    /**
     * 冒泡排序
     * @param array $intArr
     * @return array
     */
    public static function bubble($intArr = [])
    {
        $arrSize = count($intArr);
        for ($i = 0; $i < $arrSize - 1; $i++) {
            for ($j = 0; $j < $arrSize - 1 - $i; $j++) {
                if ($intArr[$j] > $intArr[$j + 1]) {
                    self::swap($intArr[$j], $intArr[$j + 1]);
                }
            }

        }
        return $intArr;
    }

    /**
     * 交换两个数值
     * @param $a
     * @param $b
     */
    public static function swap(&$a, &$b)
    {
        $temp = $b;
        $b = $a;
        $a = $temp;
    }

    /**
     * 字条串旋转, 如把abcdef前面两个字符ab移到字符串末尾
     * @param array $array
     * @param int $pos
     * @return array
     */
    public static function reverseArr($array = [], $pos)
    {
        $reversedArr = [];
        $leftArr = [];
        foreach ($array as $k => $v) {
            if ($k <= $pos) {
                array_push($leftArr, $v);
            } else {
                array_push($reversedArr, $v);
            }
        }

        return array_merge($reversedArr, $leftArr);
    }
}
