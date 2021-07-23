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
 left:10px;
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
<label><center> UPDATED PATIENT DETAILS </center></label>
<?php
$con = mysqli_connect('localhost','root','','hos2');
$id = $_GET['id1'];
$room = $_GET['room1'];
$doctor =  $_GET['doctor1'];
$discharge = $_GET['discharge1'];


	$sql = "update patient set room=$room, discharge='$discharge',doctor='$doctor' where id =$id";
	
	$result = mysqli_query($con, $sql);
	$count=mysqli_affected_rows($con);
	
	

		if($count==1)
	{
		
	

?>





   <table style="font-family:fantasy;color:white;width:50%">
            <tr>
              
                <th>PATIENT ID</th>
                <th>PATIENT NAME</th>
                <th>DOB</th>
				<th>AGE</th>
                <th>SEX</th>
                <th>BLOOD GROUP</th>
                <th>ADDRESS</th>
				<th>CONTACT NO</th>
                <th>MAIL ID</th>
                <th>EMERGENCY CONTACT NO</th>
                <th>HISTORY OF ILLNESS </th>
                <th>ADMITTED DATE</th>
                <th>ADMITTED BY</th>
                <th>ROOM NO</th>
                <th>DIAGNOSED WITH</th>
                <th>TREATEMENT FROM DOCTOR</th>
                <th>DISCHARGE DATE</th>

                

            </tr>
			 <?php   
		
			

				$sql2="select*from patient;";
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
                <td><?php echo $rows['blood'];?></td>
                <td><?php echo $rows['address'];?></td>
                <td><?php echo $rows['contact'];?></td>
				<td><?php echo $rows['mail'];?></td>
                <td><?php echo $rows['emergency'];?></td>
                <td><?php echo $rows['history'];?></td>
                <td><?php echo $rows['admitdate'];?></td>
				<td><?php echo $rows['admitby'];?></td>
                <td><?php echo $rows['room'];?></td>
				<td><?php echo $rows['diagnosed'];?></td>
                <td><?php echo $rows['doctor'];?></td>
                <td><?php echo $rows['discharge'];?></td>
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