<?php
//In this tutorial we will look at how arrays work in php
//An array is basically a list of items.
//The list will start at a value of 0.
$array = array("Zero", "One", "Two", 3);

//In an array you can have more than one type of variable.  
//You can also map locations in the array.
$arrayMapped = array(0=>0, 1=>"Banana", "kite"=>"fly");

//You can transfer the data from one array to another by using the equals method.
$secondMappedArray = $arrayMapped;

//if you then try to map the second element which does not exist to something:
$secondMappedArray[2] = "two";
//the value of it will create the memory address and assign it.

$thirdMappedArray = $secondMappedArray;
//If you want to add something to the end of you array you can add it by calling:
array_push($thirdMappedArray, "End");
//You can add to the beginning by calling:
array_unshift($thirdMappedArray, "Front");

//You can count an array length by calling:
$count = count($thirdMappedArray);

//Look below to see how to print an array.
?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"

        "http://www.w3.org/TR/html4/loose.dtd">
<html lang="en">
	<head>
		<meta http-equiv="content-type" content="text/html; charset=utf-8">
		<title>Arrays</title>
	</head>
	<body>
		<table>
			<tr>
				<td>array: </td>
				<td>
					<?php
						//To print a full array you must call the print_r function
						echo print_r($array); 
					?>
				</td>
			</tr>
			<tr>
				<td>array[0]: </td>
				<td>
					<?php 
						//You can also call to print one part of the array by itself.
						echo $array[0]; 
					?>
				</td>
			</tr>
			<tr>
				<td>array[1]: </td><td><?php echo $array[1]; ?></td>
			</tr>			
			<tr>
				<td>array[2]: </td><td><?php echo $array[2]; ?></td>
			</tr>			
			<tr>
				<td>array[3]: </td><td><?php echo $array[3]; ?></td>
			</tr>
			<tr>
				<td>arrayMapped: </td><td><?php echo print_r($arrayMapped); ?></td>
			</tr>
			<tr>
				<td>arrayMapped[0]: </td><td><?php echo $arrayMapped[0]; ?></td>
			</tr>
			<tr>
				<td>arrayMapped[1]: </td><td><?php echo $arrayMapped[1]; ?></td>
			</tr>
			<tr>
				<td>arrayMapped["kite"]: </td><td><?php echo $arrayMapped["kite"]; ?></td>
			</tr>
			<tr>
				<td>secondMappedArray: </td><td><?php echo print_r($secondMappedArray); ?></td>
			</tr>
			<tr>
				<td>secondMappedArray[0]: </td><td><?php echo $secondMappedArray[0]; ?></td>
			</tr>
			<tr>
				<td>secondMappedArray[1]: </td><td><?php echo $secondMappedArray[1]; ?></td>
			</tr>
			<tr>
				<td>secondMappedArray["kite"]: </td><td><?php echo $secondMappedArray["kite"]; ?></td>
			</tr>
			<tr>
				<td>thirdMappedArray: </td><td><?php echo print_r($thirdMappedArray); ?></td>
			</tr>
			<tr>
				<td>thirdMappedArray[0]: </td><td><?php echo $thirdMappedArray[0]; ?></td>
			</tr>
			<tr>
				<td>thirdMappedArray[1]: </td><td><?php echo $thirdMappedArray[1]; ?></td>
			</tr>
			<tr>
				<td>thirdMappedArray[2]: </td><td><?php echo $thirdMappedArray[2]; ?></td>
			</tr>
			<tr>
				<td>thirdMappedArray[3]: </td><td><?php echo $thirdMappedArray[3]; ?></td>
			</tr>
			<tr>
				<td>thirdMappedArray["kite"]: </td><td><?php echo $thirdMappedArray["kite"]; ?></td>
			</tr>
			<tr>
				<td>thirdMappedArray[4]: </td><td><?php echo $thirdMappedArray[4]; ?></td>
			</tr>
		</table>
	</body>
</html>