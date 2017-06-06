<?php
/**
 * Created by daigangbo.
 * User: daigangbo daigangbo@gmail.com
 * Date: 2017/6/5
 * Time: 13:28
 */
use PHPUnit\Framework\TestCase;
use src\Sort;

class SortTest extends TestCase
{
    public function testQuickSort()
    {

        //case 1
        $unSortedData = [3, 2, 1, 5];
        $expectedData = [1, 2, 3, 5];
        $sortedData = Sort::quick($unSortedData);
        $this->assertTrue($expectedData === $sortedData);
        //case 2
        $unSortedData = [10, 5, 18, 21, 9, 102, 59, 81, 100, 0, 31];
        $expectedData = [0, 5, 9, 10, 18, 21, 31, 59, 81, 100, 102];
        $sortedData = Sort::quick($unSortedData);
        $this->assertTrue($expectedData === $sortedData);
        //case 1
        $unSortedData = [2, 1];
        $expectedData = [1, 2];
        $sortedData = Sort::quick($unSortedData);
        $this->assertTrue($expectedData === $sortedData);
    }

    public function testReverseArr()
    {
        $originalArr = ['a', 'b', 'c', 'd', 'e', 'f'];
        $expectedArr = ['c', 'd', 'e', 'f', 'a', 'b'];
        $reversedArr = Sort::reverseArr($originalArr, 1);
        $this->assertTrue($reversedArr === $expectedArr, '旋转数组失败');
    }

    public function testSwap()
    {
        $a = 5;
        $b = 8;
        Sort::swap($a, $b);
        $this->assertEquals(8, $a, 'swap,交换失败 1');
        $this->assertEquals(5, $b, 'swap,交换失败 2');

    }

    public function testBubble()
    {
        //case 1
        $unSortedData = [3, 2, 1, 5];
        $expectedData = [1, 2, 3, 5];
        $sortedData = Sort::bubble($unSortedData);
        $this->assertTrue($expectedData === $sortedData);
        //case 2
        $unSortedData = [10, 5, 18, 21, 9, 102, 59, 81, 100, 0, 31];
        $expectedData = [0, 5, 9, 10, 18, 21, 31, 59, 81, 100, 102];
        $sortedData = Sort::bubble($unSortedData);
        $this->assertTrue($expectedData === $sortedData);
        //case 1
        $unSortedData = [2, 1];
        $expectedData = [1, 2];
        $sortedData = Sort::bubble($unSortedData);
        $this->assertTrue($expectedData === $sortedData);

    }

}
