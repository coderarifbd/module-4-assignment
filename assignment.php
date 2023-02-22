<?php
//sort an array of strings by their length, in ascending order
function sortStringsByLength(array $strings): array {
    usort($strings, function($a, $b) {
        return strlen($a) - strlen($b);
    });
    return $strings;
}

$strings = array("apple", "banana", "cherry", "date");
$sortedStrings = sortStringsByLength($strings);
print_r($sortedStrings);
//output
/*[0] => date
[1] => apple
[2] => banana
[3] => cherry
*/





//Write a PHP function to concatenate two strings, but with the second string starting from the end of the first string.
function concat_reverse($str1, $str2) {
	$len1 = strlen($str1);
	$len2 = strlen($str2);
	$newstr = '';
	for ($i = $len1 - 1; $i >= 0; $i--) {
	  $newstr .= $str1[$i];
	}
	for ($i = $len2 - 1; $i >= 0; $i--) {
	  $newstr .= $str2[$i];
	}
	return $newstr;
  }
  $str1 = "hello";
$str2 = "world";
$result = concat_reverse($str1, $str2);
echo $result.PHP_EOL; 
// outputs "ollehdlrow"




//Write a PHP function to remove the first and last element from an array and return the remaining elements as a new array.
function removeFirstAndLast($arr) {
	array_shift($arr);
	array_pop($arr);
	return $arr;
  }
  $myArray = array(1, 2, 3, 4, 5);
  $newArray = removeFirstAndLast($myArray);
  print_r($newArray);
/*
[0] => 2
    [1] => 3
    [2] => 4
*/






  
//Write a PHP function to check if a string contains only letters and whitespace.
  function containsOnlyLettersAndWhitespace($str) {
	return preg_match('/^[a-zA-Z\s]+$/', $str) === 1;
  }
  echo containsOnlyLettersAndWhitespace("hello").PHP_EOL;
  //output 1 means true;






//Write a PHP function to find the second largest number in an array of numbers.

  function findSecondLargest($arr) {
    $largest = null;
    $secondLargest = null;

    foreach ($arr as $num) {
        if ($largest === null || $num > $largest) {
            $secondLargest = $largest;
            $largest = $num;
        } else if ($num !== $largest && ($secondLargest === null || $num > $secondLargest)) {
            $secondLargest = $num;
        }
    }

    return $secondLargest;
}
$numbers = array(3,5,6,7,8,99,32);
$secondLargest = findSecondLargest($numbers);
echo "The second largest number is: ".$secondLargest;
//output 32
