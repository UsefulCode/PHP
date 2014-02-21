<?php
//In this tutorial we will be going over how use numbers in PHP for calculations.  
//The HTML document below will print out all the variables we use along with their variable name.

//PHP will auto define intOne and intTwo as integers.
$intOne = 1;
$intTwo = 2;

//When two integers are added or subtracted, their type will stay the same. 
$IntOnePlusTwo = $intOne + $intTwo;
$IntOneMinusTwo = $intOne - $intTwo;

//When 1 is divided by 2, the answer is 0.5  the variable type will auto change to a double
$IntOneDevidTwo = $intOne/$intTwo;

//Two integers multiplied together will create another integer.
$intOneMultiplyTwo = $intOne*$intTwo;

//Integers can hold negative numbers.
$negative = -10;

//The abs function will take the absolute value of the number passed in.
$absNegative = abs($negative);

//The remainder can be calculated by using the % symbol.
$remainderOneDevideTwo = $intOne%$intTwo;
?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"

        "http://www.w3.org/TR/html4/loose.dtd">
<html lang="en">
	<head>
		<meta http-equiv="content-type" content="text/html; charset=utf-8">
		<title>Numbers</title>
	</head>
	<body>
		<table>
			<tr>
				<td>intOne: </td><td><?php echo $intOne; ?></td>
			</tr>
			<tr>
				<td>intTwo: </td><td><?php echo $intTwo; ?></td>
			</tr>
			<tr>
				<td>IntOnePlusTwo: </td><td><?php echo $IntOnePlusTwo; ?></td>
			</tr>
			<tr>
				<td>IntOneMinusTwo: </td><td><?php echo $IntOneMinusTwo; ?></td>
			</tr>
			<tr>
				<td>IntOneDevidTwo: </td><td><?php echo $IntOneDevidTwo; ?></td>
			</tr>
			<tr>
				<td>intOneMultiplyTwo: </td><td><?php echo $intOneMultiplyTwo; ?></td>
			</tr>
			<tr>
				<td>negative: </td><td><?php echo $negative; ?></td>
			</tr>
			<tr>
				<td>absNegative: </td><td><?php echo $absNegative; ?></td>
			</tr>
			<tr>
				<td>remainderOneDevideTwo: </td><td><?php echo $remainderOneDevideTwo; ?></td>
			</tr>
		</table>
	</body>
</html>