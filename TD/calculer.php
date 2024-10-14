<html>
<body>
<?php 

$ope = $_POST["ope"];

if (is_numeric($_POST["n1"]) && is_numeric($_POST["n2"])) {
	$n1 = $_POST["n1"];
	$n2 = $_POST["n2"];
} else {
	echo '<h1 style="color:red">Remi arrete de hacker<h1>';
	exit;
}


if ($ope=="+") {
	$res = $n1 + $n2; 
} else if ($ope=="-") {
	$res = $n1 - $n2; 
} else if ($ope=="*") {
	$res = $n1 * $n2; 
} else if ($ope=="/" && $n2!=0 ) {
	$res = $n1 / $n2;
} else {
	echo '<h1 style="color:red">Remi tu forces<h1>';
	exit;
}


?><br>


<?php echo "<h1>$res</h1>"; ?><br>

</body>
</html>
