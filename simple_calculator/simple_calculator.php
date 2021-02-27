<?php 
extract($_POST); 
if(isset($operator))
{
	switch($operator)
	{
		case 'Add':
		$result = $first_number + $second_number;
		break;
		
		case 'Subtract':
		$result = $first_number - $second_number;
		break;
		
		case 'Multiply':
		$result = $first_number * $second_number;
		break;

		case 'Divide':
		$result = $first_number / $second_number;
		break;
		
	}
}
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Side-Hustle - Calculator</title>
		
	</head>
	<body>

        <h3>SIDE HUSTLE - SIMPLE CALCULATOR</h3>

		<form method="post">
		    
			<p>Enter your First Number</p>
            <input type="number" name="first_number" value="<?php  echo @$first_number;?>"/> <br>
			
			<p>Enter your Second Number</p>
            <input type="number" name="second_number" value="<?php  echo @$second_number;?>"/> <br><br>
			
			<input type="submit" name="operator" value="Add" />
            <input type="submit" name="operator" value="Subtract" />
            <input type="submit" name="operator" value="Multiply" />
            <input type="submit" name="operator" value="Divide" />
            <br><br>

            <p>Your result</p>
            <input type="number" disabled="disabled" value="<?php  echo @$result;?>"/>

		</form>
	</body>
</html>
