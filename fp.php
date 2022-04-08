<!DOCTYPE html>
<html lang="en">
<head>
    <title>Easybus</title>
    <link rel="stylesheet" href="login.css">
    <style>
        body{
    
    background-image: url(./images/bus1.jpg); 
    background-size: cover;
        }

        a{
    text-decoration: none;
    color:inherit;
}
    </style>
</head>
<?php
    include 'connectsu.php';
    if(isset($_POST['submit'])){
        $email=$_POST['email'];
        $np=$_POST['np'];
        $cp=$_POST['cp'];


        $emailquery = "select * from users where email='$email'";
        $query = mysqli_query($con,$emailquery);

        $emailcount= mysqli_num_rows($query);

        if($emailcount>0){
            if($np == $cp){
                
         $sql="update users set password='$np',cpassword='$np' where email='$email' ";
        $result= mysqli_query($con,$sql);
        if($result){
            ?>
            <script>
                alert("Password changed Successfully")
            location.replace("login.php");

            </script>
            <?php
        }else {
        
        
        ?>
        <script>
            alert("Unsucessful")
        </script><?php
        }
        
                    
         }
        else{
            ?>
            <script>
                alert("password is not matching")
            </script>
        <?php 
           
            }
        
        }
        else{?>
            <script>
                alert("Account doesn't exist!!!")
            </script>
        <?php   }
    }     



   




    
     ?>
<body>
    
        <div class="loginform">
            <h1 class="heading">Forgot Password</h1><br>
             <form action="" method="POST" >
                <!-- <div class="input"> 
                    <input type="tel" placeholder="Enter 10 digit number" autocomplete="off" name="idNumber" pattern="[0-9]{10}" required>
                    <label for="">phone number</label>
                   </div> -->

                <div class="input">
                    <input type="email" placeholder="Email" autocomplete="off" name="email" required>
                    <label for="">Email-ID</label>
                   </div>
   
                <div class="input">
                    <input type="password" placeholder="password" name="np" autocomplete="off" required>
                    <label for="">New Password</label>
                   </div>

                   <div class="input">
                    <input type="password" placeholder="password" name="cp" autocomplete="off" required>
                    <label for="">Confirm Password</label>
                   </div>

                   <div class="button">
                    <button type="submit" name="submit" >Reset</button>
                   </div>
                    

                </form>
    
    </div>
</body>
</html>