<?php

$strings = ["Hello", "World", "PHP", "Programming"];


function countVowels($str) {
    $vowels = ['a', 'e', 'i', 'o', 'u'];
    $count = 0;
    $str = strtolower($str);
    for ($i = 0; $i < strlen($str); $i++) {
        if (in_array($str[$i], $vowels)) {
            $count++;
        }
    }
    return $count;
}

function reverseString($str) {
    return strrev($str);
}


foreach ($strings as $string) {
    
    $vowelCount = countVowels($string);
    
    
    $reversedString = reverseString($string);
    
    echo "Original String: $string\n";
    echo "Vowel Count: $vowelCount\n";
    echo "Reversed String: $reversedString\n";
    echo "--------------------------\n";
}
?>
