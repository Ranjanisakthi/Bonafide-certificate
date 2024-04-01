<?php
 	include("dbconnect.php");
	extract($_POST);
	session_start();
$id=$_GET['id'];
$date=date('d-m-Y' ); 
  date_default_timezone_set("Asia/Calcutta");   //India time (GMT+5:30)
$qry=mysqli_query($conn,"select * from application where id=$id");
$row=mysqli_fetch_array($qry);
?>



<style>
.table{
 

height:500px;
width:950px;

position:relative;



}



</style>

<html>
<head>
  <title>Course Register</title>
  <meta name="description" content="website description" />
  <style type="text/css">
<!--
.style1 {color: #FF0000}

-->
#table{
  background-color:#e8f48c;
}
  </style>
</head>
<body id="body">
  <table width="100%" border="0">
    <tr>     <th height="73" bgcolor="#4d004d" scope="col" style="color:white"><h1> BONAFIED CERTIFICATE GENERATOR FOR SJC</h1>
      </th>
    </tr>
  </table>
  <table width="100%" border="0">
    <tr> <th scope="col"><a href="studhome.php">Application</a></th>
	  
	   <th scope="col"><a href="viewcerti.php">Download certificates</a></th>
       <th scope="col"><a href="index.php">LogOut</a></th>
     </tr>
  </table>
  

  
  
  <p>&nbsp;</p>
  <div id="content">   <img src="images\church.jpg" width="100%" height="400">

  
  <div id="table" class="table" style="border: 5px solid black;padding:20px;">
<div style="display:flex">
<img src="images/logo.jpg" width="200px;" height="200px;" />
<div style="text-align:center">
<h1>St. Joseph's College (AUTONOMOUS)</h1>
<h4>Establised in 1984, Special heritage Status awarded by UGC,Accredited at A<sup>++</sup> Grade (4th Ccyle) by NAAC</h4>
<h4>College with potential for excellence by UGC.DBT-STAR & DST-FIST sponsered college </h4>
<h3>Tiruchirappalli - 620 002, TamilNadu , India.</h3>
</div>
</div>
<div style="text-decoration:underline;text-align:center">
<h1 style="text-decoration:underline;">BONAFIDE CERTIFICATE</h1>
</div>
<center><h4><p style="font-size:17px; word-spacing: 10px;">This     is    to    certify that <?php echo $row['name'];?>(RegNo:<?php echo $row['regno'];?>)</h4></center>
 <center><h4>S/o|D/o <?php echo $row['fname'];?> ,who has signed her name below, is a bonafide student of </h4></center>
  <center><h4>this institution doing  <?php echo $row['dep'];?> programme during the academic </h4></center>
  <center><h4> year <?php echo $row['year'];?></h4></center> </p>


<br><br>
<img src="images/sign.png" style="height:100px;width:100px;margin-left:670px;margin-top:23px;">

<div style="display:flex;justify-content:space-around;">

<h4>DATE:<?php



 echo $date=date('Y-m-d' ); 
  date_default_timezone_set("Asia/Calcutta"); ; ?></h4>  <h2>Principal</h2></div>
   </div>
  
	    
 <button onClick="printme()" style="padding:10px 20px;margin-bottom:100px;">Print this page</button>
  
<script>
function printme(){
var body=document.getElementById('body').innerHTML;
var table=document.getElementById('table').innerHTML;
document.getElementById('body').innerHTML=table;
window.print();
window.location.href="viewcerti.php";
}

</script>

<table width="100%" border="0">
    <tr>
      <th height="73" bgcolor="#4d004d" scope="col" style="color:white"><p>copyrights@2023 Admin</p>
      </th>
    </tr>
</table>


</body>
</html>