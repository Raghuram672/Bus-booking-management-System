<?php

    session_start();
    session_destroy();
    header('location:login.php');
    ?>
    <script>
        alert("successfully logout")
    </script>
    
    <?php

?>