<?php
declare(strict_types = 1);
/**
 *
 * https://leetcode-cn.com/explore/interview/card/top-interview-questions-easy/1/array/21/
 * Created by daigangbo.
 * User: daigangbo <gangbo.dai@ifchange.com>
 * Date: 2019/12/30
 * Time: 21:22
 */

namespace App;


class Solution
{


    /**
     * array_unique
     * @param Integer[] $nums
     * @return Integer
     */
    public function removeDuplicates(&$nums)
    {
        $head = [];
        foreach ($nums as $num) {
            $end = end($head);
            if ($end === $num) {
                continue;
            }
            $head[] = $num;
        }
        $nums = $head;
    }

    /**
     * @param Integer[] $prices
     * @return Integer
     */
    public function maxProfit(array $prices)
    {
        $cost = 0;
        $head = [];
        foreach ($prices as $price) {
            $end = end($head);
            if ($end === false) {
                $head[] = $price;
                continue;
            }
            if ($end < $price) {
                $cost += $price - $end;
            }
            $head[] = $price;
        }
        return $cost;
    }

    /**
     * 给定一个数组，将数组中的元素向右移动 k 个位置，其中 k 是非负数。
     * @param Integer[] $nums
     * @param Integer $k
     * @return NULL
     */
    public function rotate(&$nums, $k)
    {
        $k = $k % count($nums);
        while ($k--) {
            $end = array_pop($nums);
            array_unshift($nums, $end);
        }
    }

    /**
     * 给定一个整数数组，判断是否存在重复元素
     * @param Integer[] $nums
     * @return bool
     */
    public function containsDuplicate(array $nums) : bool
    {

        while (!is_null($i = array_shift($nums))) {
            if (in_array($i, $nums)) {
                return true;
            }
        }
        return false;
    }

    /**
     * 给定一个整数数组，判断是否存在重复元素
     * 使用php系统函数
     * @param Integer[] $nums
     * @return bool
     */
    public function containsDuplicate2(array $nums) : bool
    {

        return count($nums) > count(array_unique($nums)) ? true : false;
    }

    /**
     * 给定一个非空整数数组，除了某个元素只出现一次以外，其余每个元素均出现两次。找出那个只出现了一次的元素。
     * 直接使用系统函数
     * @param Integer[] $nums
     * @return Integer
     */
    function singleNumber($nums)
    {
        $result = null;
        foreach ($nums as $num) {
            if (is_null($result)) {
                $result = $num;
                continue;
            }
            $result ^= $num;
        }

        return $result;
    }


    /**
     * 计算两个数组的交集
     * @param array $nums1
     * @param array $nums2
     * @return array
     */
    function intersect(array $nums1, array $nums2) {
        if (count($nums1) > count($nums2)) {
            $tmp = $nums1;
            $nums1 = $nums2;
            $nums2 = $tmp;
        }
        $result = [];
        foreach ($nums1 as $num1) {
            $k = array_search($num1, $nums2);
            if (false === $k) {
                continue;
            }
            $result[] = $nums2[$k];
            unset($nums2[$k]);
        }
        return $result;
    }
}