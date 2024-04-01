<?php
 	include("dbconnect.php");
	extract($_POST);
	session_start();
	
	 $reg=$_SESSION['reg'];
	if(isset($_POST['btn']))
{


$selectQuery = "SELECT MAX(id) AS max_id FROM application";
    
    // Execute the select query
    $result2 = mysqli_query($conn, $selectQuery);

    // Fetch the result
    $row = mysqli_fetch_assoc($result2);

    // Get the max ID
    $id = $row['max_id']+1;



	
$qry=mysqli_query($conn,"insert into application (regno, name, fname, year, dep,status, res,pay) values('$reg','$name','$fname','$year','$dep','','$res','')");
	if($qry)
	{
	
	echo "<script>alert('Registered sucessfully')</script>";
header("location:payment.php?id=$id");
	}
	else
	{
	
	
		echo "failed";
	
}

}
	
	?>
<html>
<head>
  <title>Course Register</title>
  <meta name="description" content="website description" />
  <style type="text/css">
<!--
.style1 {color: #FF0000}
-->
  </style>
</head>
<body>
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
  <div id="content">   <img src="images\church.jpg" width="100%" height="400"> <marquee scrollamount="10"><h1><font color="#4d004d">COLLEGE BONAFIDE CERTIFICATE</h1></marquee>
<br>
<br>
<br>



	  
 
<form id="f1" name="f1" method="post" action="#" onSubmit="return vali()">
  <table width="36%" border="0" align="center">	
	
    <tr>
    
     <td colspan="2"  align="center" ><div class="style5"><font color="#4d004d"><h3>BONAFIED APPLICATION</h3></font></div></td>
      
    </tr>
	
    <tr>
    
      <td width="44%" height="52"><span class="style6">Name</span></td>
      <td width="56%"><label>
        <input name="name" type="text" id="name" required/>
      </label></td>
     
    </tr>
	
 
	
    <tr>
     
      <td height="52"><span class="style6">Father's Name</span></td>
      <td><label>
        <input name="fname" type="text" id="fname" required />
      </label></td>
     
    </tr>
	
	
	
		
    <tr>
     
      <td height="52"><span class="style6">Year</span></td>
      <td><label>
        <input name="year" type="text"  required />
      </label></td>
     
    </tr>
	
	<tr>
     
      <td height="52"><span class="style6">Department</span></td>
      <td><label>
        <input name="dep" type="text"  required />
      </label></td>
     
    </tr>
	
	<tr>
     
      <td height="52"><span class="style6">Reason For Apply</span></td>
      <td><label>
        <input name="res" type="text"  required />
      </label></td>
     
    </tr>
  
	 
	
	<tr>
     
      <td height="45">&nbsp;</td>
      <td><input name="btn" type="submit" id="btn" value="Submit" />
      <input type="reset" name="Submit2" value="Reset" /></td>
    </tr>
  </table>
</form>

<br>
<br>
<br>
<table width="100%" border="0">
    <tr>
      <th height="73" bgcolor="#4d004d" scope="col" style="color:white"><p>copyrights@2023 Admin</p>
      </th>
    </tr>
</table>


</body>
</html>
