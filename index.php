<html>
<head>
<title>Calculator</title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<?php

if(! empty($_POST['1']) && ! empty($_POST['2'])) {
	$num1 = $_POST['1'];
    $num2 = $_POST['2'];
    if ($_POST['operator']=='add') {
		$ans = $num1 + $num2;
		
	}
	if ($_POST['operator']=='subtract') {
		$ans = $num1 - $num2;
		
	}
	if ($_POST['operator']=='multiply') {
		$ans = $num1 * $num2;
		
	}

	if ($_POST['operator']=='divide') {
		$ans = $num1 / $num2;
		
	}
}
?>


<form action="" method= "post" >
	<h1>Simple Calculator:</h1>
<h3>Enter a Number:</h3>
<input type="number" name="1" placeholder="Enter number "/></br>
<h3>Select your operation:</h3>
<select name="operator">
<option value="add"> Add (+) </option>
<option value="subtract"> Subtract (-) </option>
<option value="multiply"> Multiply (*) </option>
<option value="divide"> Divide (/) </option>
</select>
<h3>Enter another Number:</h3>
<input type="number" name="2" placeholder="Enter another number" /></br></br>
<input type="submit" id="subbut" value="Calculate" />
</form>
<h3> <?php if(! empty($ans)){echo 'Solution:'; echo $ans; } ?> </h3>
</body>
</html>