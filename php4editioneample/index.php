<?php echo date("F j, Y"); 

echo '<br>';
$randomString = substr(md5(microtime()), 0, 5);

echo $randomString;
echo '<br>';
$randomString = substr(md5(microtime()), 0, 5);
echo $randomString;
echo '<br>';echo '<br>';


echo '<br>';
phpinfo();
?>
