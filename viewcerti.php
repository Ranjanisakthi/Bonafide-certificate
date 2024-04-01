<?php
 	include("dbconnect.php");
	extract($_POST);
	session_start();
	
	 $reg=$_SESSION['reg'];
	
	
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
  <div id="content">   <img src="images\church.jpg" width="100%" height="400">

  

<br>
<br>
<br>



	<font color="#4d004d"><h2 align="center">DOWNLOAD CERTIFICATE</h2></font>	<br>
	<br>


	<h3 align="center">VIEW APPLICATION DETAILS</h3>
	<table width="100%" align="center">
	<tr>
		<td colspan="10">&nbsp;</td>
	  </tr>	
		    <tr>
          <td >&nbsp;</td>
          <td ><div align="center" class="style6"><strong>Id</strong> </div></td>
		   <td ><div align="center" class="style6"><strong>Student Reg</strong> </div></td>
		    <td ><div align="center" class="style6"><strong>Student Name</strong> </div></td>
			
			 	 <td><div align="center" class="style6"><strong>Father Name</strong> </div></td>
				 	 	 <td><div align="center" class="style6"><strong>Department</strong> </div></td>
						 				 	 	 <td><div align="center" class="style6"><strong>Year</strong> </div></td>
				  <td><div align="center" class="style6"><strong>Download Certificate</strong> </div></td>
      </tr>
		<tr>
		<td colspan="10">&nbsp;</td>
		</tr>
		<?php
		$qry=mysqli_query($conn,"select * from application where status='completed' && regno='$reg'");
		$i=1;
		while($row=mysqli_fetch_array($qry))
		{
		?>
	
	      <tr>
		 <td width="1%">&nbsp;</td>
		    <td><div align="center"><?php echo $row['id'];?></div></td>
		   <td><div align="center"><?php echo $row['regno'];?></div></td>
			  <td><div align="center"><?php echo $row['name'];?></div></td>
		
			    <td><div align="center"><?php echo $row['fname'];?></div></td>
					
			    <td><div align="center"><?php echo $row['dep'];?></div></td>
					
			    <td><div align="center"><?php echo $row['year'];?></div></td>
				<td><div align="center"><a href="certi.php?id=<?php echo $row['id'];?>">Download certificate</a></div></td>
			  	 
        </tr>
		
		
		 <tr>
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
		<td height="38" colspan="10" align="center">&nbsp;</td>
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