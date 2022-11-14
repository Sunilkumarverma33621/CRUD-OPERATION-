<?php 
	session_start();
	$db = mysqli_connect('localhost', 'root', '', 'php_crud');

	// initialize variables
	$name = "";
	$address = "";
	$id = 0;
	$update = false;

// Insert
	if (isset($_POST['save'])) 
	{
		$name = $_POST['name'];
		$address = $_POST['address'];

		mysqli_query($db, "INSERT INTO crud11 (name, address) VALUES ('$name', '$address')"); 
		$_SESSION['message'] = "Address saved"; 
		header('location: index11.php');
	}


	//Update
	if (isset($_POST['update'])) 
	{
	$id = $_POST['id'];
	$name = $_POST['name'];
	$address = $_POST['address'];

	mysqli_query($db, "UPDATE crud11 SET name='$name', address='$address' WHERE id='$id'");
	$_SESSION['message'] = "Address updated!"; 
	header('location: index11.php');
    }



// Delete
if (isset($_GET['del'])) 
{
	$id = $_GET['del'];
	mysqli_query($db, "DELETE FROM crud11 WHERE id=$id");
	$_SESSION['message'] = "Address deleted!"; 
	header('location: index11.php');
}

?>
