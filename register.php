<?php
 	include("dbconnect.php");
	extract($_POST);
	session_start();
if(isset($_POST['btn']))
{

		$qry1=mysqli_query($conn,"select * from sregister where reg='$reg'");
$count=mysqli_num_rows($qry1);
if($count>0){                                                                                           
echo "<script>alert('Register number already in use')</script>";
}else{
$qry=mysqli_query($conn,"insert into sregister values('','$name','$gender','$dob','$email','$phone','$dept','$year','$reg')");
	if($qry)
	{
	
	echo "<script>alert('Registered sucessfully')</script>";
	
	}
	
	
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
    <tr>
      <th scope="col"><a href="index.php">Home</a></th>
      <th scope="col"><a href="admin.php">Admin Login</a></th>
      <th scope="col"><a href="stud.php">Student Login</a></th>
      <th scope="col"><a href="register.php">Student Register</a></th>
      </tr>
  </table>
  

  
  
  <p>&nbsp;</p>
  <div id="content">   <img src="images\church.jpg" width="100%" height="400"> <marquee scrollamount="10"><h1><font color="#4d004d">COLLEGE BONAFIDE CERTIFICATE</h1></marquee>
<form id="f1" name="f1" method="post" action="#" onSubmit="return vali()">
  <table width="36%" border="0" align="center">	
	
    <tr>
    
     <td colspan="2"  align="center" ><div class="style5"><font color="#4d004d"><h3>STUDENT REGISTRATION</h3></font></div></td>
      
    </tr>
	
    <tr>
    
      <td width="44%" height="52"><span class="style6">Student Name</span></td>
      <td width="56%"><label>
        <input name="name" type="text" id="name" required/>
      </label></td>
     
    </tr>
	
    <tr>
     
      <td height="51"><span class="style6">Gender</span></td>
      <td><input name="gender" type="radio" value="male" required/>
        Male
          <input name="gender" type="radio" value="female" /> 
          Female</td>
      
    </tr>
	
    <tr>
     
      <td height="52"><span class="style6">Date Of Birth</span></td>
      <td><label>
        <input name="dob" type="date" id="dob" required />
      </label></td>
     
    </tr>
	
    <tr>
      
      <td height="53">Email Id</td>
      <td><input name="email" type="text" id="email" required/></td>
     
    </tr>
	
	  <tr>
      
      <td height="54">Phone Number </td>
      <td><input name="phone" type="text" id="phone" required/></td>
     
    </tr>
	
	<tr>
     
      <td height="48">Department</td>
      <td><input type="text" name="dept" id="dept" required></td>
     
    </tr>
	  <tr>
    
      <td height="56">Year</td>
      <td><input type="text" name="year" id="year" required></td>
      
    </tr>
	
    <tr>
    
      <td height="64">Register Number</td>
      <td><input name="reg" type="text" id="reg" required></td>
     
    </tr>
	<tr>
     
      <td height="45">&nbsp;</td>
      <td><input name="btn" type="submit" id="btn" value="Submit" />
      <input type="reset" name="Submit2" value="Reset" /></td>
    </tr>
  </table>
</form>




<table width="100%" border="0">
    <tr>
      <th height="73" bgcolor="#4d004d" scope="col" style="color:white"><p>copyrights@2023 Admin</p>
      </th>
    </tr>
</table>


</body>
</html>
