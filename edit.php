<?php
include "php_code.php";
	if (isset($_GET['edit'])) {
		$id = $_GET['edit'];
		$update = true;
		$record = mysqli_query($db, "SELECT * FROM crud11 WHERE id='$id' ");



	}
?>
 		
?
<!DOCTYPE html>
<html>
<head>
	<title>Edit page</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<form method="post" action="php_code.php" >
		
		<input type="hidden" name="id" value="<?php echo $id; ?>">
		<div class="input-group">
			<label>Name</label>
			<input type="text" name="name" value="<?php echo $name; ?>">
		</div>
		<div class="input-group">
			<label>Address</label>
			<input type="text" name="address" value="<?php echo $address; ?>">
		</div>
		<div class="input-group">
			 <?php if ($update == true): ?>
	         <button class="btn" type="submit" name="update" style="background: #556B2F;" >update</button>
        <?php else: ?>
	     <button class="btn" type="submit" name="save" >Save</button>
        <?php endif ?>

		</div>
	</form>

</body>
</html>