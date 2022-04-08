<?php
    include 'connectsu.php';
    if(isset($_GET['updateid'])){
        
    $id=$_GET['updateid'];
       $up='Cancelled';

        $sql="update hire set Approved_status='$up', user_status='$up' where id=$id ";
        $result= mysqli_query($con,$sql);
        if($result){
            ?>
            <script>
                alert  ("Cancelled Successfully")
                location.replace("status.php");
            

            </script>
            <?php
        }else {
        
        
        ?>
        <script>
            alert("Unabled to Cancel")
        </script><?php
        }
        




    }



?>
