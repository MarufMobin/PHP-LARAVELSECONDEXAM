<?php
$strings = ["Hello", "World", "PHP", "Programming"];

foreach ($strings as $string) {
    $vowelCount = 0;
    $letters = str_split($string);

    foreach ($letters as $letter) {
        if ($letter == 'a' || $letter == 'e' || $letter == 'i' || $letter == 'o' || $letter == 'u') {
            $vowelCount++;
        }
    }
    echo "Original String: $string, Vowel Count: $vowelCount, Reversed String: " . strrev($string) . "\n";
}