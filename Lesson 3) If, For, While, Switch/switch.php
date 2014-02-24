<?php
//In this tutorial we will look at how a switch works.

$var = 3;

//A switch acts like an if statement, but works by passing in one value, and completing a tack based on the value.

//in this switch we will change the string based on the value of $var.
//Try changing the value of $var above to see how it works.
switch($var){
	case 0:
        $str = '$var = 0';
    case 1:
        $str = '$var = 1';
    case 2:
        $str = '$var = 2';
    default:
        $str = '$var is not 0, 1, or 2';
		break;
}
//The value of $var is 3 right now, so the default will be set.
//If you set $var to 0, 1, or 2, the respected line will be called.
?>


<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"

        "http://www.w3.org/TR/html4/loose.dtd">
<html lang="en">
	<head>
		<meta http-equiv="content-type" content="text/html; charset=utf-8">
		<title>Switches</title>
	</head>
	<body>
		<table>
			<tr>
				<td>var: </td><td><?php echo $var; ?></td>
			</tr>
			<tr>
				<td>str: </td><td><?php echo $str; ?></td>
			</tr>
		</table>
	</body>
</html>