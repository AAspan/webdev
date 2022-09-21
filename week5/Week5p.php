<form method="post">
	firstName: <input type="text" name="firstname"><br>
	lastName:  <input type="text" name="lastname"><br>
	<input type="submit" value="Submit">
</form>


<?php
   $type=$_POST['firstname']";
	print("firstname: $type");
   $type=$_POST['lastname'];
	print("lastname: $type");
?>