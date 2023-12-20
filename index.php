<?php

echo "PHP BASICS <br>";

$string = "Hello world";
$num = 10;
$bool = true;

echo  "String: " . $string;
echo "<br>";
echo "Number: " . $num;
echo "<br>";
echo "Boolean: " . $bool;
echo "<br>";
if ($num > 10) {
    echo "Number is greater than 10";
} else if ($num < 10) {
    echo "Number is less than 10";
} else {
    echo "Number is equal to 10";
}
echo "<br>";
echo "<br>";
echo "FOR LOOP";
echo "<br>";
for ($i = 1; $i <= 5; $i++) {
    echo $i;
    echo "<br>";
}
echo "<br>";
echo "WHILE LOOP";
echo "<br>";

$i = 5;
while ($i > 0) {
    echo $i;
    echo "<br>";
    $i--;
}

// Indexed Array
$index_array = array(1, 2, 3, 4, 5);
// Associative Array
$associative_array = array("CSS" => "Bootstrap", "JS" => "React", "PHP" => "Laravel");
echo "<br>";
echo "INDEX ARRAY: ";
echo "<br>";
print_r($index_array);

echo "<br>";
echo "ASSOCIATIVE ARRAY: ";
echo "<br>";
print_r($associative_array);

echo "<br>";
echo "<br>";
echo "PHP FUNCTIONS";
echo "<br>";
function sum($a, $b)
{
    return "sum of a and b: " . $a + $b;
}
echo sum(35, 66);
echo "<br>";
echo "<br>";
echo "FUNCTION CALL";
echo "<br>";

echo sum(100, 243);
