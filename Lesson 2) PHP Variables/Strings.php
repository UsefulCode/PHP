<?php
//In this tutorial you will learn how strings work in PHP.

//Lets start with a string "Hello World"
$greeting = "Hello World!";

//To add onto this string we need to concatenate another string onto it. 
//Lets make another string to add to it.
$secondPart = "How are you?";

//To put these strings together you use the . in between them.
$fullString = $greeting." ".$secondPart;
//Notice the " " between the two variables?  This is to add a space between them, otherwise 
//there would be no space between the ! from $greeting and the H from $secondPart

//You can concatenate any type of variable to a string.
$many = 5;
$message = "I have ".$many." apples."
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"

        "http://www.w3.org/TR/html4/loose.dtd">
<html lang="en">
	<head>
		<meta http-equiv="content-type" content="text/html; charset=utf-8">
		<title>Strings</title>
	</head>
	<body>
		<table>
			<tr>
				<td>fullString: </td><td><?php echo $fullString; ?></td>
			</tr>
			<tr>
				<td>greeting: </td><td><?php echo $greeting; ?></td>
			</tr>
			<tr>
				<td>secondPart: </td><td><?php echo $secondPart; ?></td>
			</tr>			
			<tr>
				<td>many: </td><td><?php echo $many; ?></td>
			</tr>	
			<tr>
				<td>message: </td><td><?php echo $message; ?></td>
			</tr>	
			</table>
	</body>
</html>