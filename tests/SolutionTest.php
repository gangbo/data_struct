<?php
/**
 * Created by daigangbo.
 * User: daigangbo <gangbo.dai@ifchange.com>
 * Date: 2019/12/30
 * Time: 21:24
 */

namespace Tests;


use App\Solution;
use PHPUnit\Framework\TestCase;

class SolutionTest extends TestCase
{
    public function testRemoveDuplicates()
    {

        $testCases = [
            [
                'nums' => [1, 1, 2],
                'expectNums' => [1, 2],
            ],
            [
                'nums' => [0, 0, 1, 1, 1, 2, 2, 3, 3, 4],
                'expectNums' => [0, 1, 2, 3, 4],
            ]

        ];

        foreach ($testCases as $testCase) {
            $nums = $testCase['nums'];
            $expectNums = implode(',', $testCase['expectNums']);
            $solution = new Solution();
            $solution->removeDuplicates($nums);
            $nums = implode(',', $nums);
            $this->assertEquals($nums, $expectNums);
        }


    }

    public function testMaxProfit()
    {
        $testCases = [
            [
                'original' => [7, 1, 5, 3, 6, 4],
                'expect' => 7,
            ],
            [
                'original' => [2, 1, 2, 0, 1],
                'expect' => 2,
            ],
            [
                'original' => [1, 2, 3, 4, 5],
                'expect' => 4,
            ],
        ];
        foreach ($testCases as $testCase) {
            $solution = new Solution();
            $this->assertEquals($solution->maxProfit($testCase['original']), $testCase['expect']);
        }
    }

    public function testRotate()
    {
        $testCases = [
            [
                'input' => [
                    'nums' => [1, 2, 3, 4, 5, 6, 7],
                    'k' => 3
                ],
                'expect' => [5, 6, 7, 1, 2, 3, 4],
            ],
            [
                'input' => [
                    'nums' => [1, 2, 3, 4, 5, 6, 7],
                    'k' => 1
                ],
                'expect' => [7, 1, 2, 3, 4, 5, 6],
            ]

        ];

        foreach ($testCases as $testCase) {
            $input = $testCase['input'];
            $nums = $input['nums'];
            $k = $input['k'];

            $expectNums = implode(',', $testCase['expect']);
            $solution = new Solution();
            $solution->rotate($nums, $k);
            $nums = implode(',', $nums);
            $this->assertEquals($nums, $expectNums);
        }

    }

    public function testContainsDuplicate()
    {
        $testCases = [
            [
                'input' => [],
                'expect' => false,
            ],
            [
                'input' => [0],
                'expect' => false,
            ],
            [
                'input' => [1],
                'expect' => false,
            ],
            [
                'input' => [0, 0],
                'expect' => true,
            ],
            [
                'input' => [0, 1],
                'expect' => false,
            ],
            [
                'input' => [1, 2, 3, 4, 5, 6, 7],
                'expect' => false,
            ],
            [
                'input' => [1, 2, 3, 1, 5, 6, 7],
                'expect' => true,
            ],
            [
                'input' => [1, 2, 0, 0],
                'expect' => true,
            ],

        ];

        $testCase[] = (function () {
            return [
                'input' => range(-24500, 300000),
                'expect' => false,

            ];
        })();

        foreach ($testCases as $testCase) {
            $nums = $testCase['input'];

            $solution = new Solution();
            $result = $solution->containsDuplicate($nums);
            $this->assertEquals($result, $testCase['expect']);
            $result = $solution->containsDuplicate2($nums);
            $this->assertEquals($result, $testCase['expect']);
        }

    }

    /**
     * @author daigangbo <gangbo.dai@ifchange.com>
     */
    public function testSingleNumber()
    {
        $testCases = [
            [
                'input' => [0],
                'expect' => 0,
            ],
            [
                'input' => [1],
                'expect' => 1,
            ],
            [
                'input' => [0, 1, 0],
                'expect' => 1,
            ],
            [
                'input' => [1, 2, 3, 1, 2],
                'expect' => 3,
            ],
            [
                'input' => [1, 2, 0, 0, 1],
                'expect' => 2,
            ],

        ];
        foreach ($testCases as $testCase) {
            $nums = $testCase['input'];

            $solution = new Solution();
            $result = $solution->singleNumber($nums);
            $this->assertEquals($result, $testCase['expect']);
        }
    }

    public function testIntersect()
    {
        $testCases = [
            [
                'input' => [
                    'num1' => [0, 1, 2, 0],
                    'num2' => [0],
                ],
                'expect' => [0],
            ],
            [
                'input' => [
                    'num1' => [1, 2, 2, 1],
                    'num2' => [2, 2],
                ],
                'expect' => [2, 2],
            ],
            [
                'input' => [
                    'num1' => [1, 2, 2, 1],
                    'num2' => [2],
                ],
                'expect' => [2],
            ],

        ];

        foreach ($testCases as $testCase) {
            $input = $testCase['input'];

            $solution = new Solution();
            $result = $solution->intersect($input['num1'], $input['num2']);
            $expect = implode(',', $testCase['expect']);
            $this->assertEquals(implode(',', $result), $expect);
        }

    }


}