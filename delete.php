<?php
$stu_id=$_GET['id'];
$conn=mysqli_connect('localhost:3308','root','','php_crud') or die('connection failed');
$sql="DELETE from student where sid={$stu_id}";
$result=mysqli_query($conn,$sql) or die('Query Unsuccessful');
header('Location: http://localhost/phpCRUD/index.php');//redirect index.php
mysqli_close($conn);
