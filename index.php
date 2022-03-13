<?php
    include "Header.php";
?>
<div id="wrapper">
    <div id="main-content">
        <h2>All Records</h2>
        <?php
        $conn=mysqli_connect('localhost:3308','root','','php_crud') or die('connection failed');
        $sql="select * from student join studentclass on student.sclass=studentclass.cid";
        $result=mysqli_query($conn,$sql) or die('Query Unsuccessful');
        if (mysqli_num_rows($result)>0){

            ?>
            <table id ="std" cellpadding="7px">
                <thead>
                <th>Id</th>
                <th>Name</th>
                <th>Address</th>
                <th>Class</th>
                <th>Phone</th>
                <th>Action</th>
                </thead>
                <tbody>
                <?php
                while ($row=mysqli_fetch_assoc($result)){
                    ?>
                    <tr>
                        <td><?php echo $row['sid']; ?></td>
                        <td><?php echo $row['sname']; ?></td>
                        <td><?php echo $row['saddress']; ?></td>
                        <td><?php echo $row['cname']; ?></td>
                        <td><?php echo $row['sphone']; ?></td>
                        <td>
                            <a href="edit.php?id=<?php echo $row['sid'];?>">Edit</a>
                            <a href="delete.php?id=<?php echo $row['sid']?>">Delete</a>
                        </td>
                    </tr>
                    <?php
                }
                ?>
                </tbody>
            </table>
            <?php
        }else{
            echo "<h2>No Record found</h2>";
        }
        mysqli_close($conn);
        ?>
    </div>
</div>









