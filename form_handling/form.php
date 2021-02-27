<?php 
extract($_POST); 

if(isset($submit))
{
    $result = "Your Result: <br><br> First Name: ". $first_name. "<br> Second Name: ". $second_name. "<br> Age: ". $age. "<br> Country: ". $country ;
}
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Side-Hustle - Form-handling</title>
		
        <style>
            input {
                outline: none;
                border: none;
                transition: all .2s;
            }
            input:focus {
                border-radius: 3px;
                border: 1px #555 solid;
            }
            body {
                text-align: center;
                background-color: #55555552;
            }
        </style>

	</head>

	<body>

        <h3>SIDE HUSTLE - FORM HANDLING</h3>

        <br><br>

		<form method="post">
		    
			<p>Enter your First Name: </p>
            <input type="text" name="first_name" value="<?php  echo @$first_name;?>"/> <br><br>
			
			<p>Enter your Second Name: </p>
            <input type="text" name="second_name" value="<?php  echo @$second_name;?>"/> <br><br>

			<p>Enter your Age: </p>
            <input type="number" name="age" value="<?php  echo @$age;?>"/> <br><br>

			<p>Enter your Country: </p>
            <input type="text" name="country" value="<?php  echo @$country;?>"/> <br><br>
			
			<input type="submit" name="submit"/>
		</form>

        <br><br>


        <h4><?php echo @$result;?></h4>
        
	</body>
</html>
