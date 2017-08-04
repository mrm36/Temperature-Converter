#!/usr/bin/php

<?php
 echo exec('clear');
 $bool = true;
 while($bool == true) {
   echo "Welcome to the Temperature Converter\n";
   echo "Enter 1 for the F -> C\n";
   echo "Enter 2 for C -> F\n";
   echo "Enter 'exit' to quit\n";	
   $option = readline("Enter option: ");

	if($option=="1") {
		$degree = readline("Enter Temp: ");
		$celsius = ((($degree - 32) * 5)/9);
		echo "\n          " . $degree . "F is equivalent to " . round($celsius, 1) . "C\n\n";
	}
	else if($option=="2") {
		$degree = readline("Enter Temp: ");
                $fahren = ((($degree * 9)/5) + 32);
                echo "\n          " . $degree . "C is equivalent to " . round($fahren, 1) . "F\n\n";
	}
	else if($option=="exit") {
		echo exec('clear');
		$bool = false;
	}

	else {
	 	echo "\nUnsupported Message Type! Try Again.\n\n";
	}

 }

?>
