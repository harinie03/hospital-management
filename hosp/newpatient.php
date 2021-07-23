<html>
<style>
 table, th, td {
  border: 5px solid chartreuse;
  border-collapse: collapse;
  
  
}
table{
	position:absolute;
	top:900px;
	left:270px;
	
	
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
  background-image: url('image/drew-beamer-Lhgt4JjW-hs-unsplash.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: 100% 100%;
}

  </style>
<body>


<?php
$con = mysqli_connect('localhost','root','','hos2');
$id = $_GET['id'];
$name=$_GET['name'];
$date = $_GET['date'];
$age = $_GET['age'];
$sex = $_GET['sex'];
$blood = $_GET['blood'];
$address = $_GET['address'];
$contact = $_GET['contact'];
$mail = $_GET['mail'];
$emergency = $_GET['emergency'];
$history = $_GET['history'];
$admitdate = $_GET['admitdate'];
$admitby = $_GET['admitby']; 
$room = $_GET['room'];
$diagnosed = $_GET['diagnosed'];
$doctor =  $_GET['doctor'];
$discharge = $_GET['discharge'];
if(isset($_GET['name']))
{
$sql = "insert into patient values($id, '$name', '$date', $age,'$sex','$blood','$address','$contact','$mail','$emergency','$history','$admitdate','$admitby',$room,'$diagnosed','$doctor','$discharge')";
    $result = mysqli_query($con, $sql);
}
	

else{
         echo "<h1><center> something went wrong </center></h1>";
         }
 ?>

      
        <table style="font-family:fantasy;color:yellow;width:50%">
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
					 
            
            ?>
            
       </table>
    

</body>
</html>