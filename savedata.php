<?php
     $stu_name=$_POST['sname'];
     $stu_address=$_POST['saddress'];
     $stu_class=$_POST['class'];
     $stu_phone=$_POST['sphone'];

$conn=mysqli_connect('localhost:3308','root','','php_crud') or die('connection failed');
$sql="insert into student(sname,saddress,sclass,sphone) values('{$stu_name}','{$stu_address}','{$stu_class}','{$stu_phone}')";
$result=mysqli_query($conn,$sql) or die('Query Unsuccessful');
header("Location: http://localhost/phpCRUD/index.php");
mysqli_close($conn);