<?php
echo '给定一个由整数组成的非空数组所表示的非负整数，在该数的基础上加一。

最高位数字存放在数组的首位， 数组中每个元素只存储一个数字。

你可以假设除了整数 0 之外，这个整数不会以零开头。

示例 1:

输入: [1,2,3]
输出: [1,2,4]
解释: 输入数组表示数字 123。
示例 2:

输入: [4,3,2,1]
输出: [4,3,2,2]
解释: 输入数组表示数字 4321。';

function plusOne($digits) {
        $len = count($digits);

        $arr = array();
        for($i = 0; $i < $len ;$i++){
            $a = array_pop($digits);
            array_unshift($arr,$a);


            if($a != 9){
                $num = implode("",$arr);
                $num += 1;
                $str = implode("",$digits);
                $plusOne = $str.$num;
                $plusOne = str_split($plusOne);
                return $plusOne;
            }
            if(count($digits) == 0){
                $plusOne[0] = 1;
                for($j = 1;$j <= count($arr);$j++){
                    $plusOne[$j] = 0;
                }
                return $plusOne;
            }
        }

    }

$digits = [9,9,9,9,9];
print_r(plusOne($digits));

