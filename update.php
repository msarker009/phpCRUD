<?php
include "Header.php";
?>
<div id="wrapper">
    <div id="main-content">
        <h2>Edit & Update Record</h2>
        <form action="<?php $_SERVER['PHP_SELF']; ?>" method="post" class="post-form">
            <div class="form-group">
                <label>Id</label>
                <input type="text" name="sid">
            </div>
            <input type="submit" class="submit" name="showbtn" value="Show">
        </form>
        <?php
            if (isset($_POST['showbtn'])){
                $conn=mysqli_connect('localhost:3308','root','','php_crud') or die('connection failed');
                $stu_id=$_POST['sid'];
                $sql="select * from student where sid={$stu_id}";
                $result=mysqli_query($conn,$sql) or die('Query Unsuccessful');
                if (mysqli_num_rows($result)>0){
                while ($row=mysqli_fetch_assoc($result)){
        ?>
        <form class="post-form" action="updatedata.php" method="post">
            <div class="form-group">
                <label for="">Name</label>
                <input type="hidden" name="sid"  value="<?php echo $row['sid'];?>" />
                <input type="text" name="sname" value="<?php echo $row['sname'];?>" />
            </div>
            <div class="form-group">
                <label>Address</label>
                <input type="text" name="saddress" value="<?php echo $row['saddress'];?>" />
            </div>
            <div class="form-group">
                <label>Class</label>
                <?php
                    $sql1="select * from studentclass";
                    $result1=mysqli_query($conn,$sql1) or die('Query Unsuccessful');
                    if (mysqli_num_rows($result1)>0){
                        echo '<select name="sclass">';
                        while ($row1=mysqli_fetch_assoc($result1)){
                            if($row['sclass']==$row1['cid']){
                                $select="selected";
                            }else{
                                $select="";
                            }
                            echo "<option {$select} value='{$row1['cid']}'>{$row1['cname']}</option>";
                        }
                        echo "</select>";
                    }
                ?>
            </div>
            <div class="form-group">
                <label>Phone</label>
                <input type="text" name="sphone" value="<?php echo $row['sphone'];?>" />
            </div>
            <input class="submit" type="submit" value="Update"  />
        </form>
        <?php
                }
                }
            }

        ?>
    </div>
</div>