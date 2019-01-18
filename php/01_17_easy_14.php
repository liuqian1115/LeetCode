<?php
echo '
编写一个函数来查找字符串数组中的最长公共前缀。

如果不存在公共前缀，返回空字符串 ""。

示例 1:

输入: ["flower","flow","flight"]
输出: "fl"
示例 2:

输入: ["dog","racecar","car"]
输出: ""
解释: 输入不存在公共前缀。
说明:

所有输入只包含小写字母 a-z 。';
echo"<hr>";
function longestCommonPrefix($strs){
        $str = $strs[0];
        $len = strlen($str);
        if(count($strs) == 1){
                return $strs[0];
        }
        for($i=0; $i<$len; $i++){
                for($j=1; $j< count($strs); $j++){
                    if(isset($strs[$j][$i])){
                        if($str[$i] == $strs[$j][$i]){
                                $arr[$i][$str[$i]][] = 1;
                        }else{
                            break 2;
                        }
                    }else{
                        break 2;
                    }
                }
         }
        $str = "";
        if(isset($arr)){
            foreach ($arr as $key => $value) {
                foreach($value as $k => $val){
                    if(count($val) == (count($strs) - 1)){
                        $str .= $k;
                    }
                }

            }
        }
    return $str;
}

$strs = ["flower","flow","flight"];
print_r(longestCommonPrefix($strs)) ;
echo"<hr>";
$strs = ["aa"];
echo longestCommonPrefix($strs);
echo"<hr>";
$strs = ["aa","a","aaa"];
echo longestCommonPrefix($strs);
echo"<hr>";
$strs = ["aaa","aaaaa","aaa"];
print_r(longestCommonPrefix($strs)) ;
echo"<hr>";
$strs = ["abab","aba",""];
print_r(longestCommonPrefix($strs)) ;
echo"<hr>";






?>
