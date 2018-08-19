<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Myfavweb</title>

<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</head>

<body>

<div class="container">
 
<table class="table table-bordered">
 <thead>
 <tr>
 <th>ID</th>
 <th>Weburl</th>
 <th>Webtitle</th>
 <th>reg_date</th>
 </tr>
 </thead>
 <tbody>
 <tr>
 <?php
 include("DBConfig-favweb.php");
 
 $result = mysqli_query($conn,"SELECT * FROM favweb");
 
 while($test = mysqli_fetch_array($result))
 {
 $id = $test['id']; 
 echo"<td>".$test['id']."</td>";
 echo"<td>".$test['weburl']."</td>";
 echo"<td>".$test['webtitle']."</td>";
 echo"<td>".$test['reg_date']."</td>"; 
 echo "</tr>";
 }
 mysqli_close($conn);
 ?>
</table>

</div>
</body>
</html>