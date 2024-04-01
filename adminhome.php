<?php
 	include("dbconnect.php");
	extract($_POST);
	session_start();
if(isset($_POST['btn']))
{

	
$qry=mysqli_query($conn,"insert into course values('','$name','$dept','$desc','')");
	if($qry)
	{
	
	echo "<script>alert('Registered sucessfully')</script>";
	
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
  

  
  <font color="#4d004d"><h3 align="center">VIEW APPLICATION DETAILS</h3></font>
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
						 <td><div align="center" class="style6"><strong>Reason</strong> </div></td>
						 				 	 	 <td><div align="center" class="style6"><strong>Year</strong> </div></td>
				  <td><div align="center" class="style6"><strong>Upload Certificate</strong> </div></td>
      </tr>
		<tr>
		<td colspan="10">&nbsp;</td>
		</tr>
		<?php
		$qry=mysqli_query($conn,"select * from application where status='' and pay='1'");
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
				 <td><div align="center"><?php echo $row['res'];?></div></td>
					
			    <td><div align="center"><?php echo $row['year'];?></div></td>
				<td><div align="center"><a href="pdf.php?id=<?php echo $row['id'];?>">upload certificate</a></div></td>
			  	 
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
