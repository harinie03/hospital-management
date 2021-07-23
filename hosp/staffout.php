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
  color: white;
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
  background-image: url('img/s.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: 100% 100%;
}

  </style>
<body>


<?php
$con = mysqli_connect('localhost','root','','hos2');
$id=$_GET['id'];
    
 if(isset($_GET['id']))
    {
echo"<label><center>SUCCESSFULLY MARKED YOUR CHECK-OUT TIMINGS</center></label>";
$sql = "insert  into staffout (id,time) values($id,NOW())";
    $result = mysqli_query($con, $sql);
	$count=mysqli_affected_rows($con);
    }
?>
	
    

</body>
</html>

