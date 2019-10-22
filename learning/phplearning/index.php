<?php 
//string function in php.The substr() function returns a part of a string.
echo substr("Hello world",6);
echo "\n";
echo substr("Hello world",6,4);
echo "\n";
echo substr("Hello world", -1);
echo "\n";
echo substr("Hello world", -3, -1);
//strlen() function Return the length of the string.
echo "\n";
echo strlen("Hello");
echo "\n";
//The trim() function removes the whitespaces from both start and the end of the string.
echo trim( "        Hello World    ");
//The ltrim() function removes the whitespaces from the left part of the string.
echo "\n";
echo ltrim( "        Hello World    ");
//The rtrim() function removes the whitespaces from the right part of the string.
echo "\n";
echo rtrim( "        Hello World    ");
//The strtolower() function converts the string to lower case.
echo "\n";
echo strtolower("HELLO WORLD");
//The strtoupper() function converts the string to upper case.
echo "\n";
echo strtoupper("hello world");
//The str_replace() function replaces some characters with some other characters in a string.
echo "\n";
echo str_replace("world","Peter","Hello world");
echo "\n";
$arr = array("blue","red","green","yellow");
print_r(str_replace("red","pink",$arr));
echo "\n";
$arry  = "You should eat fruits, vegetables, and fiber every day.";
$healthy = array("fruits", "vegetables", "fiber");
$yummy   = array("pizza", "beer", "ice cream");
$newarry = str_replace($healthy, $yummy, $arry);
echo $newarry;
//explode() function Break a string into an array.
echo "\n";
$str = "Hello world. It's a beautiful day.";
print_r (explode(" ",$str));
//str_word_count() function Count the number of words in a string.
echo "\n";
echo str_word_count("Hello world!");
//strpos() function Returns the position of the first occurrence of a string inside another string.
echo "\n";
echo strpos("I love php, I love php too!","php");
//addcslashes() function Returns a string with backslashes in front of the specified characters.
echo "\n";
$str = addcslashes("Hello World!","W");
echo($str);
//addslashes() function Returns a string with backslashes in front of predefined characters.
echo "\n";
$str1 = addslashes('What does "yolo" mean?');
echo($str1);
//print() function Outputs one or more strings.
echo "\n";
print ("Hello world!");
//parse_str() function 	Parses a query string into variables.
echo "\n";
parse_str("name=Peter&age=43");
echo $name."<br>";
echo $age;
//printf() function outputs a formatted string.
echo "\n";
$number = 9;
$str = "Beijing";
printf("There are %u million bicycles in %s.",$number,$str);
//str_repeat() function Repeats a string a specified number of times.
echo "\n";
echo str_repeat("World ",13);
//stripslashes() function Unquotes a string quoted with addslashes().
echo "\n";
echo stripslashes("Who\'s Peter Griffin?");
//strrev() function Reverses a string.
echo "\n";
echo strrev("Hello World!");
//str_split() function Splits a string into an array.
echo "\n";
print_r(str_split("Hello"));
//loop string 


?>