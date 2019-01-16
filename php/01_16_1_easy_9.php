<?php
echo '判断一个整数是否是回文数。回文数是指正序（从左向右）和倒序（从右向左）读都是一样的整数。

示例 1:

输入: 121
输出: true
示例 2:

输入: -121
输出: false
解释: 从左向右读, 为 -121 。 从右向左读, 为 121- 。因此它不是一个回文数。
示例 3:

输入: 10
输出: false
解释: 从右向左读, 为 01 。因此它不是一个回文数。
';

function isPalindrome($x){
	if($x < 0){
		return false;
	}
	$arr = str_split($x);
	$newarr = array_reverse($arr);
	if($arr == $newarr){
		return TRUE;
	}else{
		return FALSE;
	}
}
echo"<hr>";
echo isPalindrome(10);

//直接字符串翻转strrev()
class Solution {
    function isPalindrome($x) {
        if($x < 0){
                return false;
        }
        $a = strrev($x);
        if($a == $x){
                return TRUE;
        }else{
                return FALSE;
        }
    }
}



?>
