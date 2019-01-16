<?php
echo'给定一个字符串，请你找出其中不含有重复字符的 最长子串 的长度。

示例 1:

输入: "abcabcbb"
输出: 3 
解释: 因为无重复字符的最长子串是 "abc"，所以其长度为 3。
示例 2:

输入: "bbbbb"
输出: 1
解释: 因为无重复字符的最长子串是 "b"，所以其长度为 1。
示例 3:

输入: "pwwkew"
输出: 3
解释: 因为无重复字符的最长子串是 "wke"，所以其长度为 3。
     请注意，你的答案必须是 子串 的长度，"pwke" 是一个子序列，不是子串。
';

//$arr = explode('',$str); explode字符串转数组 分割参数不能为空
//$arr = str_split($str);

/**参考
function getMaxString($str){
    $hash = array();
    $prev = 0;//公共字符串的初始位置
    $max_len = 0;//最大值
    $strLength = strlen($str);//字符串长度
    for($i=0;$i<=$strLength;$i++){
        if(array_key_exists($str[$i],$hash)){//字符出现过
            if($hash[$str[$i]] >= $prev){
                $prev = $hash[$str[$i]] +1;
            }
            $hash[$str[$i]] = $i;//记录字符出现的位置
        }else{
            $hash[$str[$i]] = $i;
        }
        $max_len = max($max_len,$i-$prev+1);//计算最大值
    }
    return $max_len;
}
$res = getMaxString("abcabc");
echo $res;
*/
$str = "abcabcdbbc";
//echo $str[1]; ->b
//echo $str{0}; ->a




?>
