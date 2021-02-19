<style>
 body {
    background-color: #55555552;
 }
</style>


<?php

// Using for loop to generate 200 pins
    for ($i = 1; $i <= 200; $i++) { 

        //Set the pin variable to string for better concatenation
        $pin = ""; 

        // Using a for loop to generate a 16 digits number
        for($j = 0; $j < 16; $j++) { 

            //setting a ternary statement for the minimum number so that the pin won't start with 0
            $min = ($j == 0) ? 1 : 0; 

            // using mt_rand function to generate random number between 0 and 9, making it 16 digits and concatenating it to pin variable
            $pin .= mt_rand($min , 9); 
        }

        // Echoing the result of the pin variable with some text
        echo "<h3> Pin $i: $pin </h3><br>";
    }
?>