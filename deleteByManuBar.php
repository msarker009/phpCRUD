<?php
include "Header.php";
if (isset($_POST['deleteBtn'])){
    $conn=mysqli_connect('localhost:3308','root','','php_crud') or die('connection failed');
    $stu_id=$_POST['sid'];
    $sql="DELETE from student where sid={$stu_id}";
    $result=mysqli_query($conn,$sql) or die('Query Unsuccessful');
    header('Location: http://localhost/phpCRUD/index.php');//redirect index.php
    mysqli_close($conn);
}

?>
<div id="wrapper">
    <div id="main-content">
        <h2>Delete Record</h2>
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" class="post-form" method="post">
            <div class="form-group">
                <label>Id</label>
                <input type="text" name="sid">
            </div>
            <input type="submit" class="submit" name="deleteBtn" value="Delete">
        </form>
    </div>
</div>
