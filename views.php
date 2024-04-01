<?php
 	include("dbconnect.php");
	extract($_POST);
	session_start();
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
    <tr>     <th height="73" bgcolor="#4d004d" scope="col" style="color:white"><h1>BONAFIED CERTIFICATE GENERATOR FOR SJC</h1>
      </th>
    </tr>
  </table>
  <table width="100%" border="0">
    <tr>
      <th scope="col"><a href="adminhome.php">Admin Home</a></th>
      <th scope="col"><a href="views.php">View Students</a></th>
      <th scope="col"><a href="index.php">LogOut</a></th>
    </tr>
  </table>
  

  
  
  <p>&nbsp;</p>
  <div id="content">   <img src="images\church.jpg" width="100%" height="400">




  <font color="#4d004d">	<h3 align="center">STUDENT DETAILS</h3> </font>


		<table width="100%" align="center">
	<tr>
		<td colspan="10">&nbsp;</td>
		</tr>	
		    <tr>
          <td width="1%">&nbsp;</td>
          <td width="5%"><div align="center" class="style6"><strong>Id</strong> </div></td>
		   <td width="13%"><div align="center" class="style6"><strong>Student Reg</strong> </div></td>
		    <td width="11%"><div align="center" class="style6"><strong>Student Name</strong> </div></td>
			 <td width="9%"><div align="center" class="style6"><strong>Gender</strong> </div></td>
			  <td width="10%"><div align="center" class="style6"><strong>Dob</strong> </div></td>
			 <td width="12%"><div align="center" class="style6"><strong>Department</strong> </div></td>
	
		    <td width="14%"><div align="center" class="style6"><strong>Email</strong> </div></td>
			 <td width="16%"><div align="center" class="style6"><strong>Phone</strong> </div></td>
			
	        </tr>
		<tr>
		<td colspan="10">&nbsp;</td>
		</tr>
		<?php
		$qry=mysqli_query($conn,"select * from sregister");
		$i=1;
		while($row=mysqli_fetch_array($qry))
		{
		?>
	
	      <tr>
		 <td width="1%">&nbsp;</td>
		    <td><div align="center"><?php echo $row['id'];?></div></td>
		   <td><div align="center"><?php echo $row['reg'];?></div></td>
			  <td><div align="center"><?php echo $row['name'];?></div></td>
			   <td><div align="center"><?php echo $row['gender'];?></div></td>
			    <td><div align="center"><?php echo $row['dob'];?></div></td>
			 <td><div align="center"><?php echo $row['dept'];?></div></td>
			   
			    <td><div align="center"><?php echo $row['email'];?></div></td>
			  <td><div align="center"><?php echo $row['phone'];?></div></td>
			  
			  	 
        </tr>
		
		
		 <tr>
		  	 	<td>&nbsp;</td>
		   		<td>&nbsp;</td>
				<td>&nbsp;</td>
			 	<td>&nbsp;</td>
			 	<td>&nbsp;</td>
			 	<td>&nbsp;</td>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
			 	<td>&nbsp;</td>
				<td>&nbsp;</td>
		
		</tr>
		
        <?php
		$i++;
		}
		
		?>
				
				
				<tr>
		<td colspan="10" align="center">&nbsp;</td>
		</tr>
		
</table>


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
