<?php
//In this tutorial we will look at how booleans work in php
//A Boolean holds a single value that is ether true, or false

//You can set booleans to be true or false by typing the words, true or false.
$trueBool = true;
$falseBool = false;

//You can also set them from an equation
$unknownBool = (1 == 2);
$unknownBoolTwo = (1 < 2);

//When compareing booleans, you can compare them to the text true, and false, or 1 and 0
// 1 == true, 0 == false

//If you just print out a boolean, it will print 0 or 1.
//The if statements in the table below will print out true, or false.
//We will talk about if statemetns later on.  You do not need to know them yet.
?>


<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"

        "http://www.w3.org/TR/html4/loose.dtd">
<html lang="en">
	<head>
		<meta http-equiv="content-type" content="text/html; charset=utf-8">
		<title>Booleans</title>
	</head>
	<body>
		<table>
			<tr>
				<td>trueBool: </td><td><?php echo $trueBool ? 'true' : 'false'; ?></td>
			</tr>
			<tr>
				<td>falseBool: </td><td><?php echo $falseBool ? 'true' : 'false'; ?></td>
			</tr>
			<tr>
				<td>unknownBool: </td><td><?php echo $unknownBool ? 'true' : 'false'; ?></td>
			</tr>
			<tr>
				<td>unknownBoolTwo: </td><td><?php echo $unknownBoolTwo ? 'true' : 'false'; ?></td>
			</tr>
		</table>
	</body>
</html>