<?php
// PHP String Functions - Esempi Completi con <br>

// strlen()
echo strlen("Hello") . "<br>"; // 5

// strrev()
echo strrev("Hello") . "<br>"; // "olleH"

// strtolower()
echo strtolower("HELLO") . "<br>"; // "hello"

// strtoupper()
echo strtoupper("hello") . "<br>"; // "HELLO"

// ucfirst()
echo ucfirst("hello world") . "<br>"; // "Hello world"

// ucwords()
echo ucwords("hello world") . "<br>"; // "Hello World"

// trim()
echo trim("  hello  ") . "<br>"; // "hello"

// ltrim()
echo ltrim("  hello") . "<br>"; // "hello"

// rtrim()
echo rtrim("hello  ") . "<br>"; // "hello"

// explode()
print_r(explode(",", "a,b,c"));
echo "<br>";

// implode()
echo implode("-", ["a","b","c"]) . "<br>"; // "a-b-c"

// str_replace()
echo str_replace("world", "PHP", "Hello world") . "<br>"; // "Hello PHP"

// substr()
echo substr("Hello", 1, 3) . "<br>"; // "ell"

// strpos()
echo strpos("Hello world", "o") . "<br>"; // 4

// strrpos()
echo strrpos("Hello world", "o") . "<br>"; // 7

// strstr()
echo strstr("Hello world", "world") . "<br>"; // "world"

// stristr()
echo stristr("Hello world", "WORLD") . "<br>"; // "world"

// sprintf()
$formatted = sprintf("My age is %d", 25);
echo $formatted . "<br>"; // "My age is 25"

// printf()
printf("Price: %.2f<br>", 9.5); // outputs: "Price: 9.50"

// number_format()
echo number_format(12345.678, 2) . "<br>"; // "12,345.68"

// addslashes()
echo addslashes("O'Reilly") . "<br>"; // "O\'Reilly"

// stripslashes()
echo stripslashes("O\'Reilly") . "<br>"; // "O'Reilly"

?>
