<?php
$myname = "Brian";
$myage = 37;
echo "a: " . 73 . "<br>"; // Numeric literal
echo "b: " . "Hello" . "<br>"; // String literal
echo "c: " . FALSE . "<br>"; // Constant literal
echo "d: " . $myname . "<br>"; // String variable
echo "e: " . $myage . "<br>"; // Numeric variable

///next

$a = 1; $b = 0;
echo ($a AND $b) . "<br>";
echo ($a or $b) . "<br>";
echo ($a XOR $b) . "<br>";
echo !$a . "<br>";

echo "12 ki table"."<br>";
$count = 1;
while ($count <= 12)
{
echo "$count times 12 is " . $count * 12 . "<br>";
++$count;
}


$fp = fopen("text.txt", 'wb');
for ($j = 0 ; $j < 100 ; ++$j)
{
$written = fwrite($fp, "data");
if ($written == FALSE) break;
}
fclose($fp);
?>