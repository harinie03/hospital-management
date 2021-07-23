
<html>
 <style>
  label2{
  color: white;
  font-family:Stencil Std, fantasy;
  font-size:50px;
  padding: 8px;
    border: 3px;
  }
 table, th, td {
  border: 5px solid chartreuse;
  border-collapse: collapse;
  
  
}
table{
	position:absolute;
	top:200px;
	left:340px;
	
	
}

th, td {
  padding: 5px;
  text-align: left;
}


  label1{
  color: white;
  font-family:Stencil Std, fantasy;
  font-size:50px;
  padding: 8px;
    border: 3px;
  }

label{
  color: chartreuse;
  font-family:Tahoma, sans-serif;
  font-size:50px;
  position:absolute;
  top:80px;
	left:450px;
  }


</style>

<label><center> STAFF ATTENDANCE </center></label>
<body background="img/dp.jpg">
<?php
$con = mysqli_connect('localhost','root','','hos2');

     $id = $_GET['id'];
 if(isset($_GET['id']))
    {
$sql = "select *from staffin where id = $id";
$result = mysqli_query($con, $sql);
$count = mysqli_num_rows($result);
$sql2="select staffin.id as id,staffin.time AS checkin,staffout.time AS checkout from staffin inner join staffout on staffin.id=staffout.id where staffin.id = $id;";
			$resul = mysqli_query($con, $sql2);
			$rows = mysqli_fetch_array($resul);
			
			?>
			
			
			        <table style="font-family:fantasy;color:white;width:50%">
            <tr>
                <th>ID</th>
                <th>CHECK-IN</th>
                <th>CHECK-OUT</th>
            </tr>
			
			 <tr>
                <td><?php echo $rows['id'];?></td>
                <td><?php echo $rows['checkin'];?></td>
                <td><?php echo $rows['checkout'];?></td>
            </tr>
<?php			

	}
	
?>




</body>
</html>