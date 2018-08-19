<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Show MySQL DB Data</title>

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
 <th>red_date</th>
 </tr>
 </thead>
 <tbody>
 <tr>
 <?php
 include("DBConfig-addweb.php");
 
 $result = mysqli_query($conn,"SELECT * FROM addweb");
 
 while($test = mysqli_fetch_array($result))
 {
 $id = $test['id']; 
 echo"<td>".$test['id']."</td>";
 echo"<td>".$test['Weburl']."</td>";
 echo"<td>".$test['Webtitle']."</td>";
 echo"<td>".$test['reg_date']."</td>"; 
 echo "</tr>";
 }
 mysqli_close($conn);
 ?>
</table>

</div>
</body>
</html>