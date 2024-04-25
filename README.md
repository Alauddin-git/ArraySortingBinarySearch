Problem: given array sort and find a target number index as output or if the target number is not found then find out it's possible index position.

algorithm: binary search algorithm

step to solve the problem: (if the target number is remain in the array element)
 1. first i create  a  user built function 'seachInsert' which receive to arguments   array and the target number which index position in the array need to find out.
 2. in the function, use php inbuilt function 'sort()' , i sort the array in ascending order.
 3. 
 4. initialize two variable $left and $right.
     a. $left = 0; indicate that index position of the first position of the array which is zero
     b. $right = count($nums) - 1;
        -> if total element number of the array is 11 then count($nums) value is 11 from which after substract 1, we get 10 is array last number index position
     c. finally if we have 11 element array which first element index position is 0 and last element index position is 10
    
 4.inside while loop (while the initail element index position of the array is smaller or equal to the last element index position, loop repeat)  
      a. $mid = intval(($left + $right) / 2); $mid variable contain value of the middle position of the array and 'intval()' builtin function convert the decimal number into i         interger value.
      b. if ($nums[$mid] == $target) { return $mid;}  check array middle element is equal to target number, if true then return the index(not the number) 
      c. if ($nums[$mid] < $target) { $left = $mid + 1; }  check array middle element is smaller than target number then  $left = $mid + 1;  means that the array is split into         two part and the right part  is the new array.
      
      D. if ($nums[$mid] > $target)  or else { $right = $mid - 1; }  check array middle element is greater than target number then  $right = $mid - 1;   means that the array v 
        is split into  two part and the left   part  is the new array.
 = one of the iteration  if ($nums[$mid] == $target) { return $mid;} this condition true and return index.



    (if the target number is not remain in the array element)
    * once the left and right variable is equal
    * if ($nums[$mid] < $target) { $left = $mid + 1; } or else { $right = $mid - 1; } for one of the  condition become true then left value become greater than right , as a result exit the loop and $left is become the   target number index position.
