<?php
    include 'connectsu.php';
    if(isset($_GET['updateid'])){
        
    $id=$_GET['updateid'];
       $up='Approved';

        $sql="update hire set Approved_status='$up' where id=$id ";
        $result= mysqli_query($con,$sql);
        if($result){
            ?>
            <script>
                alert("Approved Successfully")
            location.replace("approve.php");

            </script>
            <?php
        }else {
        
        
        ?>
        <script>
            alert("Unabled to approve")
        </script><?php
        }
        




    }



?>
