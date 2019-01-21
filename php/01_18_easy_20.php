<?php
echo'
给定一个只包括 '('，')'，'{'，'}'，'['，']' 的字符串，判断字符串是否有效。

有效字符串需满足：

左括号必须用相同类型的右括号闭合。
左括号必须以正确的顺序闭合。
注意空字符串可被认为是有效字符串。

示例 1:

输入: "()"
输出: true
示例 2:

输入: "()[]{}"
输出: true
示例 3:

输入: "(]"
输出: false
示例 4:

输入: "([)]"
输出: false
示例 5:

输入: "{[]}"
输出: true
';
##########################################################

function isValid($s) {
    
    $arr = str_split($s);
    $len = count($arr);
    if($len == 0){
        return "false";
    }
    if(($len % 2) != 0){
        return "false";
    }
    $leftArray = array("(","[","{");
    $rightArray = array(")","]","}");
    $temp = array();
    for($i = 0 ; $i < $len ; $i++){
        if(in_array($arr[$i], $leftArray)){
            $temp[] = $arr[$i];
        }else{
            if(empty($temp)){
                return "false";
            }else{
                $leftOne = array_pop($temp);
                $k = array_search($leftOne, $leftArray);
                if($arr[$i] != $rightArray[$k]){
                    return "false";
                }
            }
        }
    }
    return empty($temp) ? "true" : "false";
}
$s = "()";
print_r(isValid($s));
echo "<hr>";
$s = "()[]{}";
print_r(isValid($s));
echo "<hr>";
$s = "(]";
print_r(isValid($s));
echo "<hr>";
$s = "([)]";
print_r(isValid($s));
echo "<hr>";
$s = "{[]}";
print_r(isValid($s));
echo "<hr>";
$s = "{[]}}";
print_r(isValid($s));
echo "<hr>";




?>
