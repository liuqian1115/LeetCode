<?php
echo '给出一个 32 位的有符号整数，你需要将这个整数中每位上的数字进行反转。

示例 1:

输入: 123
输出: 321
 示例 2:

输入: -123
输出: -321
示例 3:

输入: 120
输出: 21
注意:

假设我们的环境只能存储得下 32 位的有符号整数，则其数值范围为 [−231,  231 − 1]。请根据这个假设，如果反转后整数溢出那么就返回 0。
';
function reverse($x){
	if($x < 0) {
		//截取符号
		$mark = substr($x,0,1);
		$num = substr($x,1);
		$arr = str_split($num);
		$arr = array_reverse($arr);
		$newNum = implode('',$arr);
		$x = $mark.$newNum;
	}else{
		$arr = str_split($x);
		$arr = array_reverse($arr);
		$x = implode('',$arr);
	}
	$x = (int)$x;
	if($x < 2147483647 and $x>-2147483647 ){
		return $x;
	}else{
		return 0;
	}
}
echo reverse(1534236469);
echo "<hr>";
var_dump(is_int(21417483647));
?>
