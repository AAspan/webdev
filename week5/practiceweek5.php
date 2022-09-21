<form method="post">
	  Car Make: <input type="text" name="carmake"><br>
		<input type="submit" value="Submit">
</form>


<?php
$type = $_POST['carmake'];
print("POST Method TYPE: $type");
?>