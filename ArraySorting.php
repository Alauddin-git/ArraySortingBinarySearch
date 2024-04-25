<?php

function searchInsert($nums, $target) {
    sort($nums); 
    $left = 0;
    $right = count($nums) - 1;

    while ($left <= $right) {
        $mid = intval(($left + $right) / 2);

        if ($nums[$mid] == $target) {
            return $mid;
        }

        if ($nums[$mid] < $target) {
            $left = $mid + 1;
        } else {
            $right = $mid - 1;
        }
    }

    return $left;
}

echo "Enter the array (comma-separated): ";
$input = trim(fgets(STDIN)); 
$nums = explode(',', $input);
$nums = array_map('intval', $nums); 

echo "Enter the target value: ";
$target = intval(trim(fgets(STDIN))); 

$result = searchInsert($nums, $target);
echo "Output: $result\n"; 
