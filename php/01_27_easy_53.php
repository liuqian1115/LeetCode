<?php
/**
给定一个整数数组 nums ，找到一个具有最大和的连续子数组（子数组最少包含一个元素），返回其最大和。

示例:

输入: [-2,1,-3,4,-1,2,1,-5,4],
输出: 6
解释: 连续子数组 [4,-1,2,1] 的和最大，为 6。
进阶:

如果你已经实现复杂度为 O(n) 的解法，尝试使用更为精妙的分治法求解。

*/
//如果相邻两个元素如果一正一负，且和大于0，那么如果局部区间有最大和且与这两个数相邻，那么这两个元素应该被包括进去
function maxSubArray($nums) {
        if(count($nums) == 1){
            return $nums[0];
        }
        $max = 0;
        $array = [];
        for($i = 0 ;$i < count($nums) ;$i++ ){
            if($max > 0){
                $max += $nums[$i];
            }else{
                $max = $nums[$i];
            }
            $arr[] = $max;
        }
        $res = max($arr);
        return $res;
    }
$nums = [-2,1,-3,4,-1,2,1,-5,4];
echo maxSubArray($nums);
