<?php
include("dbconnect.php");
session_start();
extract($_POST);


$id=$_GET['id'];



$qty=mysqli_query($conn,"update application set status='Completed' where id=$id");

if($qty){?>
		 <script> alert('uploaded successfully')
window.location.href=("viewc.php");</script>
<?php } ?>
