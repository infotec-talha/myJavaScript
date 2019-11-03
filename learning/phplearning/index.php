
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
echo "\n";
$str2="talha";
for($i=0;$i < strlen($str2);$i++)
{
echo $str2[$i];
echo "\n";
}
//second version of loop string
$name=str_split($str2);
foreach($name as $a)
{
echo $a;
echo "\n";
}
//while loop
echo "----while----";
echo "\n";
$i = 0;
while($i < strlen($str2))
{
    echo $str2[$i];
    $i++;
    echo "\n";
}
//array creating in php
echo "\n";
$cars=array("Toyota","Honda","Suzuki");
echo "I like " . $cars[0] . ", " . $cars[1] . " and " . $cars[2] . ".";
echo "\n";
$arrlength=count($cars);
for($x = 0;$x < $arrlength;$x++){
   echo $cars[$x];
    echo "\n";
}
//array types in php.
//indexed array example in line 111.
//Associative array.
echo "\n";
$age=array("Talha" => "36","Hafeez" => "38","Adnan" => "34");
echo "Adnan is " . $age["Adnan"] . " years old.";
//PHP - Multidimensional Arrays.A multidimensional array is an array containing one or more arrays.
echo "\n";
$cars = array
  (
  array("Volvo",22,18),
  array("BMW",15,13),
  array("Saab",5,2),
  array("Land Rover",17,15)
  );
echo $cars[0][0].": In stock: ".$cars[0][1].", sold: ".$cars[0][2].".\n";
echo $cars[1][0].": In stock: ".$cars[1][1].", sold: ".$cars[1][2].".\n";
echo $cars[2][0].": In stock: ".$cars[2][1].", sold: ".$cars[2][2].".\n";
echo $cars[3][0].": In stock: ".$cars[3][1].", sold: ".$cars[3][2].".\n";
//We can also put a for loop inside another for loop to get the elements of the $cars array.
for ($row = 0; $row < 4; $row++) {
    echo "Row number $row";
    echo "\n";
    for ($col = 0; $col < 3; $col++) {
      echo $cars[$row][$col]."\n";
    }
    
  }
  echo "\n";
echo "----array builtin functions start from here----";
echo "\n";
//array_pop() function Deletes the last element of an array return the last value of an array.
$c=array("red","green","blue");
echo array_pop($c);
echo "\n";
print_r($c);
echo "\n";
//array_product() function multiply the product of the values in an array.
$d=array(5,10,6,2);
echo(array_product($d));
echo "\n";
//array_push() function insert one or more elements to the end of an array.
array_push($c,"black","yellow");
print_r($c);
echo "\n";
//array_rand() Returns one or more random keys from an array.
$a=array("red","green","blue","yellow","brown");
$random_keys=array_rand($a,3);
echo $a[$random_keys[0]]."\n";
echo $a[$random_keys[1]]."\n";
echo $a[$random_keys[2]]."\n";
//Replaces the values of the first array with the values from following arrays
$a1=array("red","green");
$a2=array("blue","yellow");
print_r(array_replace($a1,$a2));
echo "\n";
//Returns an array in the reverse order
$a3=array("a"=>"Volvo","b"=>"BMW","c"=>"Toyota");
print_r(array_reverse($a3));
echo "\n";
//Searches an array for a given value and returns the key
$a4=array("a"=>"red","b"=>"green","c"=>"blue");
echo array_search("red",$a4);
echo "\n";
//Returns selected parts of an array
$a5=array("red","green","blue","yellow","brown");
print_r(array_slice($a5,2));
echo "\n";
print_r(array_slice($a5,2,1));
echo "\n";
print_r(array_slice($a5,-2,1));
//Removes the first element from an array, and returns the value of the removed element
echo "\n";
$a6=array("a"=>"red","b"=>"green","c"=>"blue");
echo array_shift($a6)."\n";
print_r ($a6);
//Removes and replaces specified elements of an array
echo "\n";
$a7=array("a"=>"red","b"=>"green","c"=>"blue","d"=>"yellow");
$a8=array("a"=>"purple","b"=>"orange");
array_splice($a7,0,2,$a8);
print_r($a7);
//Returns the sum of the values in an array
echo "\n";
$a9=array(5,15,25);
echo array_sum($a9);
//Adds one or more elements to the beginning of an array
echo "\n";
$s1=array("a"=>"red","b"=>"green");
array_unshift($s1,"blue");
print_r($s1);
//asort() Sort an array and maintain index association
echo "\n";
$age=array("Peter"=>"35","Ben"=>"37","Joe"=>"43");
asort($age);
foreach($age as $x=>$x_value)
   {
   echo "Key=" . $x . ", Value=" . $x_value;
   echo "\n";
   }
 //arsort() Sort an array in reverse order and maintain index association.
 echo "\n";
 arsort($age);
 foreach($age as $x=>$x_value)
    {
    echo "Key=" . $x . ", Value=" . $x_value;
    echo "\n";
    }
// count() Count all elements in an array, or something in an object.
echo "\n";
$cars=array("Volvo","BMW","Toyota");
echo count($cars);
echo "\n";
$cars=array
  (
  "Volvo"=>array
  (
  "XC60",
  "XC90"
  ),
  "BMW"=>array
  (
  "X3",
  "X5"
  ),
  "Toyota"=>array
  (
  "Highlander"
  )
  );

echo "Normal count: " . count($cars)."\n";
echo "Recursive count: " . count($cars,1);
//ksort() Sort an array by key.
echo "\n";
ksort($age);
foreach($age as $x=>$x_value)
   {
   echo "Key=" . $x . ", Value=" . $x_value;
   echo "\n";
   }
//krsort() Sort an array by key in reverse order.
echo "\n";
krsort($age);
foreach($age as $x=>$x_value)
   {
   echo "Key=" . $x . ", Value=" . $x_value;
   echo "\n";
   }
//list()  Assign variables as if they were an array.
echo "\n";
$my_array = array("Dog","Cat","Horse");
list($d, $e, $f) = $my_array;
echo "I have several animals, a $d, a $e and a $f.";
//compact()  Create array containing variables and their values
echo "\n";
$firstname = "Peter";
$lastname = "Griffin";
$age = "41";
$result = compact("firstname", "lastname", "age");
print_r($result);
echo "\n";
echo "---superglobals---";
echo "\n";
function test() {
  $foo = "local variable";

  echo '$foo in global scope: ' . $GLOBALS["foo"] . "\n";
  echo '$foo in current scope: ' . $foo . "\n";
}

$foo = "Example content";
test();
?>