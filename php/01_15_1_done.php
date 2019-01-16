<?php
//给定一个整数数组 nums 和一个目标值 target，请你在该数组中找出和为目标值的那 两个 整数，并返回他们的数组下标。

//你可以假设每种输入只会对应一个答案。但是，你不能重复利用这个数组中同样的元素。

//示例:

//给定 nums = [2, 7, 11, 15], target = 9

//因为 nums[0] + nums[1] = 2 + 7 = 9
//所以返回 [0, 1]
/**
 res:Array ( [0] => 0 [1] => 1 [2] => 1 [3] => 0 ) 重复利用
$nums = [2,7,11,15];
$target = 9;
$arr = array();
foreach( $nums as $k => $val){
	$dif = $target - $val;
	if(in_array($dif,$nums)){
		//数组键值互换函数array_flip()
		$temp = array_flip($nums);
		$key = $temp[$dif];
		$arr[] = $k;
		$arr[] = $key;
	}
}
print_r($arr);

//Warning: in_array() expects at least 2 parameters, 1 given in /var/www/lamp/LeetCode/01_15_1.php on line 18
*/

//$nums = [2,7,11,15];
//$target = 9;
$nums = [3,2,4];
$target = 6;
$arr = array();
$temp = array_flip($nums);
foreach( $nums as $k => $val){
        $dif = $target - $val;
        if(in_array($dif,$nums)){
                //数组键值互换函数array_flip()
                $key = $temp[$dif];
		if($key > $k){
                	$arr[] = $k;
                	$arr[] = $key;
        	}
	}
}
print_r($arr);
?>

<script>
/**
 * @param {number[]} nums
 * @param {number} target
 * @return {number[]}
 */
var twoSum = function(nums, target) {
    var arr = [];
    for ( i = 0; i< nums.length ;i++){
        for( j = i ; j< nums.length;j++){
            var dif;
            dif = target - nums[i];
            if(nums[j] == dif){
		//往空数组中插入元素arr.push()
                arr.push(i);
                arr.push(j);
            }
        }
    }
    return arr;
};
</script>
