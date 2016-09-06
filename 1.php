<html>
	<head>
	</head>
	<body>
<?php
	$a = 5;
	$b = "5";
//== menyamakan tanpa melihat variable
//=== melihat variable
	/*echo "$a == $b =" . var_dump($a == $b) . "<br>";
	echo "$a === $b =" . var_dump($a === $b) . "<br>";
*/
	echo "<p>pre & post increment</p>";
	$a = 5;
	$b = ++$a + 5;
	echo "<p>pre increment</p>";
	echo "a = $a<br>";
	echo "b = $b<br>";

	$a = 5;
	$b = ++$a + 5;
	echo "<p>post increment</p>";
	echo "a = $a<br>";
	echo "b = $b<br>";

	echo "<p>menampilkan literal $: \$a</p>";

	echo "<p> Operator Logical</p>";
	$a = true;
	$b = true;
	echo "$a xor $b =" . var_export($a xor $b, true) . "<br>";
	

	echo "$a == $b =" . var_export($a == $b, true) . "<br>";
	echo "$a === $b =" . var_export($a === $b, true) . "<br>";
	$a = 5;
	$b = $a++ + 5;
	echo "a = " . $a . "<br>"; //6
	echo "b = " . $b . "<br>"; //10 

?>

	</body>
	</html>