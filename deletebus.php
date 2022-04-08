<?php

include 'connectsu.php';
if(isset($_GET['deleteid'])){
    
$id=$_GET['deleteid'];

    $sql="delete from busrate where id=$id ";
    $result= mysqli_query($con,$sql);
    if($result){
        ?>
        <script>
            alert("Deleted successfully")
        location.replace("displayrate.php");

        </script>
        <?php
    }else {
    
    
    ?>
    <script>
        alert("Unabled to delete")
    </script><?php
    }
    




}




?>