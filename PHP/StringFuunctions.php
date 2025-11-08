<?php

// strlen(): Returns the length of a string.
$string = "Hello, World!";
echo "The length of the string is: " . strlen($string) . "\n";

// substr(): Returns a part of a string.
echo "Substring: " . substr($string, 7, 5) . "\n";

// substr_replace(): Replaces a part of a string with another string.
echo "String after replacement: " . substr_replace($string, "PHP", 7, 5) . "\n";

// trim(): Removes whitespace or specified characters from both ends of a string.
$input = "   Hello   ";
echo "String after trim: '" . trim($input) . "'\n";

// ltrim() and rtrim(): Remove whitespace or specified characters from the left or right of a string.
echo "Trim from the left: '" . ltrim($input) . "'\n";
echo "Trim from the right: '" . rtrim($input) . "'\n";

// stripslashes(): Removes backslashes from a string.
$escapedString = "This is a \"test\".";
echo "After stripslashes: " . stripslashes($escapedString) . "\n";

// str_pad(): Pads a string to a certain length with another string.
echo "String with padding: '" . str_pad($string, 20, "*") . "'\n";

// strpos(): Finds the position of the first occurrence of a substring.
echo "Position of 'World': " . strpos($string, "World") . "\n";

// strrpos(): Finds the position of the last occurrence of a substring.
$string2 = "Hello, World! World!";
echo "Last position of 'World': " . strrpos($string2, "World") . "\n";

// stripos(): Case-insensitive search for the position of a substring.
echo "Case-insensitive position of 'world': " . stripos($string, "world") . "\n";

// str_contains(): Checks if a string contains a given substring.
echo "Contains 'World': " . (str_contains($string, "World") ? "Yes" : "No") . "\n";

// str_starts_with(): Checks if a string starts with a given substring.
echo "Starts with 'Hello': " . (str_starts_with($string, "Hello") ? "Yes" : "No") . "\n";

// str_ends_with(): Checks if a string ends with a given substring.
echo "Ends with 'World!': " . (str_ends_with($string, "World!") ? "Yes" : "No") . "\n";

// strtoupper(): Converts a string to uppercase.
echo "Uppercase string: " . strtoupper($string) . "\n";

// strtolower(): Converts a string to lowercase.
echo "Lowercase string: " . strtolower($string) . "\n";

// ucfirst(): Capitalizes the first character of a string.
$lowercase = "hello world!";
echo "Ucfirst: " . ucfirst($lowercase) . "\n";

// ucwords(): Capitalizes the first character of each word in a string.
echo "Ucwords: " . ucwords($lowercase) . "\n";

// strrev(): Reverses a string.
echo "Reversed string: " . strrev($string) . "\n";

// str_shuffle(): Randomly shuffles the characters of a string.
echo "Shuffled string: " . str_shuffle($string) . "\n";

// str_repeat(): Repeats a string a specified number of times.
echo "Repeated string: " . str_repeat($string, 3) . "\n";

// str_replace(): Replaces all occurrences of a substring with another substring.
echo "String after replacement: " . str_replace("World", "PHP", $string) . "\n";

// strcmp(): Compares two strings (case-sensitive).
$string3 = "Hello";
echo "Result of strcmp: " . strcmp($string, $string3) . "\n";

// strcasecmp(): Compares two strings (case-insensitive).
echo "Result of strcasecmp: " . strcasecmp($string, $string3) . "\n";

// strnatcmp(): Compares two strings using the natural order algorithm.
$numString1 = "file2";
$numString2 = "file10";
echo "Result of strnatcmp: " . strnatcmp($numString1, $numString2) . "\n";

// explode(): Splits a string by a specified delimiter into an array.
$csv = "one,two,three,four";
$array = explode(",", $csv);
echo "Exploded array: ";
print_r($array);

// implode(): Joins array elements into a string with a specified delimiter.
echo "Imploded string: " . implode("-", $array) . "\n";

// chr() and ord(): Converts a character to its ASCII value and vice versa.
echo "Character for ASCII 65: " . chr(65) . "\n";
echo "ASCII value for 'A': " . ord('A') . "\n";
