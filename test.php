<?php


$notsam = array("Rebecca", "Freya", "Jonny", "Tim", "Sam", "Ben", "Alice");

$trumpland = array("Jonny", "Alice", "Lizzie", "Dom", "Cem", "Sam", "Ryan", "Tim");



$notsamSort = sort($notsam);

$trumplandSort = sort($trumpland);

$diff = array_diff($trumpland, $notsam);

$diffReverse = array_diff($notsam, $trumpland);


foreach ($diffReverse as $key) {

	echo "<br>";
	echo "You need to kick ";
	
	echo $key;
	echo " from notsam";
}

echo "<br>";


foreach ($diff as $key) {

		echo "<br>";
	echo "You need to add ";
	
	echo $key;
	echo " from notsam";;
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>




<body>


<?php 






?>






</body>
</html>