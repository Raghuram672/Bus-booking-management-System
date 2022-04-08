<?php

include 'connectsu.php';
if(isset($_GET['deleteid1'])){
    
$id=$_GET['deleteid1'];

    $sql="delete from passenger where id=$id ";
    $result= mysqli_query($con,$sql);
    if($result){
        ?>
        <script>
            alert("cancelled successfully")
        location.replace("displaytickets.php");

        </script>
        <?php
    }else {
    
    
    ?>
    <script>
        alert("Unabled to cancel ")
    </script><?php
    }
    




}




?>