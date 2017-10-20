<?php
 
	if(isset($_GET['day']) && isset($_GET['date']) && isset($_GET['year']))
	{
		echo "values entered";
		$day=$_GET['day'];
	}
	if(!empty($day))
		echo 'it is' .$day. '';
	
?>

<form action="first.php" method="GET">
	Day:<br><input type="text" name="day"><br>
	Date:<br><input type="text" name="date"><br>
	Year:<br><input type="text" name="year"><br>
	<input type="submit" value="submit">
</form>
