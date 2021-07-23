<html>
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
	
  }
  button:hover {
  background-color: #99004d;
}
a{

	background-color: white;
	text-decoration:none;
	font-family:Stencil Std, fantasy;
  font-size:50px;
	color:black;
	
	border-radius: 12px;
	width: 20%;
  height:4%;
   
position: absolute;
  left: 580px;
  top: 400px;
		


    font-size: 16px;
    margin: 5px;
 
    border: 5px;
} 
a:hover{
	background-color: black;
		color:white;
	
	
	}

body {
  background-image: url('img/dp.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: 100% 100%;
}

  </style>
<body>
<label><center>STAFF DETAILS</center></label>"

<?php
$con = mysqli_connect('localhost','root','','hos2');

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
					 
            
            ?>
            
       </table>
    

</body>
</html>