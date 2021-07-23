<html>
<head>
<title>UPDATED DETAILS </title>

</head>

 <style>
 table, th, td {
  border: 5px solid chartreuse;
  border-collapse: collapse;
  
  
}
table{
	position:absolute;
	top:150px;
	left:100px;
	
	
}

th, td {
  padding: 5px;
  text-align: left;
}
label{
  color: chartreuse;
  font-family:Tahoma, sans-serif;
  font-size:50px;
  padding: 8px;
    border: 3px;
position:relative;
  }
 body {
  position:absolute;
  background-repeat: no-repeat;
background-image: url('img/dp.jpg');
  margin:0px;
  padding:0px;
}

  .box{
 font-family:Stencil Std, fantasy;
  width: 50%;
  height:50%;
  border: 10px  solid white;
  position:relative;
 margin:0px;
  padding:0px;
 top:220px;
 left:390px;
    ;
   }

  .box input[type = "text"]{
  background-color: #ffe6cc;
  width: 90%;
  padding: 12px 20px;
   font-size:50px;
  margin: 8px 0;
font-family:Stencil Std, fantasy
  }

 .box input[type = "number"]
 {
 width: 90%;
  padding: 12px 20px;
  margin: 8px 0;
  background-color: #ffe6cc;
  font-size:50px;
  font-family:Stencil Std, fantasy

  }

  .box button{
  background-color: orange;
            border: none;
            text-decoration: none;

            padding: 20px 20px;
            margin: 20px 20px;
            cursor: pointer;
font-family:Stencil Std, fantasy

  }


  .box label{
  color: white;
  font-family:Stencil Std, fantasy;
  font-size:50px;
  padding: 8px;
    border: 3px;
  }

</style>
<body>
<label><center> UPDATED STAFF DETAILS </center></label>
<?php
$con = mysqli_connect('localhost','root','','hos2');
$id = $_GET['id1'];
$workhour = $_GET['workhour1'];
$salary =  $_GET['salary1'];
$contact = $_GET['contact1'];


	$sql = "update staff set workhour='$workhour', salary=$salary,contact='$contact' where id =$id";
	
	$result = mysqli_query($con, $sql);
	$count=mysqli_affected_rows($con);
	
	

		if($count==1)
	{
		
	

?>


   <table style="font-family:fantasy;color:white;width:50%">
            <tr>
              
                <th>STAFF ID</th>
                <th>STAFF NAME</th>
                <th>DOB</th>
		<th>AGE</th>
                <th>SEX</th>
                <th>DESIGNATION</th>
                <th>EXPERIENCE</th>
		<th>SPECIALIZATION</th>
                <th>WORKING HOURS</th>
                <th>SALARY</th>
                <th>ADDRESS</th>
                <th>MAIL ID</th>
                <th>CONTACT NO</th>
                <th>RATING/REVIEW</th>
                

            </tr>
			 <?php   
		
			

				$sql2="select*from staff;";
				$resul = mysqli_query($con, $sql2);
				 $row = mysqli_num_rows($resul);
				
               while($rows = mysqli_fetch_array($resul))
                {
					?>
				<tr>
				<td><?php echo $rows['id'];?></td>
                <td><?php echo $rows['name'];?></td>
                <td><?php echo $rows['date'];?></td>
                <td><?php echo $rows['age'];?></td>
		<td><?php echo $rows['sex'];?></td>
                <td><?php echo $rows['designation'];?></td>
                <td><?php echo $rows['experience'];?></td>
                <td><?php echo $rows['specialization'];?></td>
		<td><?php echo $rows['workhour'];?></td>
                <td><?php echo $rows['salary'];?></td>
                <td><?php echo $rows['address'];?></td>
                <td><?php echo $rows['mail'];?></td>
		<td><?php echo $rows['contact'];?></td>
                <td><?php echo $rows['review'];?></td>
				</tr>
           <?php     
				}
					 
}
else{
	echo "<p><center><font color=white> UPDATE FAILED </font></center></p>"; 
}

?>
			

       </table>
    
</body>
</html>