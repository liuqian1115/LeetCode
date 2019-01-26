<?php
/**
给定一个仅包含大小写字母和空格 ' ' 的字符串，返回其最后一个单词的长度。

如果不存在最后一个单词，请返回 0 。

说明：一个单词是指由字母组成，但不包含任何空格的字符串。

示例:

输入: "Hello World"
输出: 5

*/
function lengthOfLastWord($s) {
    // rtrim 是去除一个字符串右部空格
        $s = rtrim($s);
        $arr = explode(" ", $s);
        if(count($arr) == 0){
            return 0;
        }
        $a = array_pop($arr);
        $len = strlen($a);
        return $len;
    }
$s = "a ";
print_r(lengthOfLastWord($s)) ;
