<?php
//In this tutorial I will be going over how to use an if statement in PHP

//If statements are useful when you have to do different things based on values.
//There is also something called a switch which acts like an if statement that will be in a later tutorial

//An if statement can work in a few ways.  The value inside the statement needs to evaluate to a boolean.
//PHP will accept null, false, or 0 as a "false" value, 
//it will accept any non 0 value, non null value, or true as a "true" value.

$true = true;
$false = false;
$zero = 0;
$one = 1;
$ten = 10;
$negTen = -10;
$null = null;  //null value says the variable does not have any value attached to it.
$message = "hello";
$message1 = "hello2";
$message2 = "hello2";


//A basic if statement has an if() and else statement.  If the first value equates to true, it will complete the task
//within the first {}, otherwise it will complete the task in the second {}
if($true){ 
	$if1 = true; //Since $true is set to true, it will complete this line. 
}else{
	$if1 = false; //This line will not be called.
}

//A more complex statement can have more than one if.  With these you use an else if
if($zero){ 
	$if2 = false; //Since $zero is set to 0, this line will not be called.
}else if($one){
	$if2 = true; //Since $one is set to 1, this line will be called
}else{
	$if2 = false; //This line will not be called.
}

//In the event that all cases are false, the else line will be called.
if($false){
	$if3 = false; //Since $false is set to false, this line will not be called.
}else if($null){
	$if3 = false; //Since $null is set to null, this line will not be called.
}else{
	$if3 = true; //Since none of the above if statements were true, this line will be called.
}

//You can call equals equations inside an if statement.
if($message == $message1){
	$if4  = false; // Since the value in message one and message1 are not the same, this line wont be called.
}else if($message1 == $message2){
	$if4 = true; // Since the value of $message1 and $message2 are the same, this line will be called.
}else{
	$if4 = false; // This line will not be called.
}

//You can also use and's in an if statement
if($ten && $negTen){
	$if5 = true; // Since $ten, and $negTen are set to non zero, non null values, this line will be called.
}else{
	$if5 = false; // This line wont be called.
}

if($ten && $zero){
	$if6 = false; //Since $zero is set to 0, this line will not be called.  $ten, and $zero must both equate to "true"
}else{
	$if6 = true; // This line will be called
}

//You can use a or in an if statement, it will act like an and, except only one value must be true.
if($message == $message1 || $message1 == $message2){
	$if7 = true; // Since message1, and $message2 have the same values, this line will be called
}else{
	$if7 = false; // This line will not be called.
}

//If you have a quick if statement, you can use a one line short code
$if8 = $one ? true : false;
// if true, the value will be set to the first, otherwise it will be set to the second.

?>


<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"

        "http://www.w3.org/TR/html4/loose.dtd">
<html lang="en">
	<head>
		<meta http-equiv="content-type" content="text/html; charset=utf-8">
		<title>If Statements</title>
	</head>
	<body>
		<table>
			<tr>
				<td>$if1: </td><td><?php echo $if1 ? 'true' : 'false'; ?></td>
			</tr>
			<tr>
				<td>$if2: </td><td><?php echo $if2 ? 'true' : 'false'; ?></td>
			</tr>
			<tr>
				<td>$if3: </td><td><?php echo $if3 ? 'true' : 'false'; ?></td>
			</tr>
			<tr>
				<td>$if4: </td><td><?php echo $if4 ? 'true' : 'false'; ?></td>
			</tr>
			<tr>
				<td>$if5: </td><td><?php echo $if5 ? 'true' : 'false'; ?></td>
			</tr>
			<tr>
				<td>$if6: </td><td><?php echo $if6 ? 'true' : 'false'; ?></td>
			</tr>
			<tr>
				<td>$if7: </td><td><?php echo $if7 ? 'true' : 'false'; ?></td>
			</tr>
			<tr>
				<td>$if8: </td><td><?php echo $if8 ? 'true' : 'false'; ?></td>
			</tr>
		</table>
	</body>
</html>