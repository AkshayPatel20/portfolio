<?php
include("db.php");

header('Access-Control-Allow-Origin: *');
if( isset($_POST['detail_name']) && isset($_POST['detail_email']) && isset($_POST['detail_number']) && isset($_POST['detail_website']) && isset($_POST['detail_desc'])){
	$detail_name = $_POST['detail_name']; // HINT: use preg_replace() to filter the data
	$detail_email = $_POST['detail_email'];
	$detail_number = $_POST['detail_number'];
	$detail_website = $_POST['detail_website'];
	$detail_desc = $_POST['detail_desc'];

	$insert_data = "insert into contact_data(contact_name,contact_email,contact_number,contact_website,contact_desc) values ('$detail_name','$detail_email','$detail_number','$detail_website','$detail_desc')";  //query for inserting data
	$run_data = mysqli_query($conn,$insert_data);   //run the above query

	  if ($run_data) {    //if above query is perfectly run then do this task
	    echo "success";
	  }


}
?>
