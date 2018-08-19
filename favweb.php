<!DOCtype html>
<body bgcolor="pink">
<center>
<form method="post" action="">
<table border="1" bgcolor="#00CCFF">
<tr>
<td><input type="radio" name="weburl" value="www.google.com"/>www.google.com</td>
<tr>
<td><input type="text" placeholder="webtitle"name="webtitle"/></td>
</tr>
<tr><td><input type="submit" name="submit" value="Add to favorite"/></td></tr>
</table>
</form>
</center>

<?php
if(isset($_POST["submit"])){  
  
if(!empty($_POST['weburl']) && !empty($_POST['webtitle'])) {  
   @$weburl=$_POST['weburl'];
  @$webtitle=$_POST['webtitle'];
  
  

$con = mysqli_connect("localhost","root","","mywebmasterf");




mysqli_query($con,"INSERT INTO favweb(Weburl,Webtitle)
		        VALUES ('$weburl','$webtitle')");

if(mysqli_affected_rows($con) > 0){
	echo "<p>Your Website Added In Your Favourite Web Collection</p>";
	
} else {
	echo "weburl NOT Added<br />";
	echo mysqli_error ($con);
}
}
else{
	echo"All Fields Are Required";
}
}


?> 

</body>
</html>