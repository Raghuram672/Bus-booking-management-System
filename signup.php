<?php
    session_start();


?>       
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <title>Easybus</title>
        <link rel="stylesheet" href="login.css">
    </head>

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
    <body>



    <?php

         include 'connectsu.php';
        if(isset($_POST["submit"])){
            $name=$_POST['name'];
            $email=$_POST['email'];
            $phone=$_POST['idNumber'];
            $password=$_POST['password'];
            $cpassword=$_POST['cpassword'];


        
            $emailquery = "select * from users where email='$email'";
            $query = mysqli_query($con,$emailquery);

            $emailcount= mysqli_num_rows($query);

            if($emailcount>0){?>
            <script>
               alert( "Email already exists")
               </script>
               <?php }
            else{
                if($password === $cpassword){
                    
                    $insertquery="insert into users(name,email,phone,password,cpassword)values('$name','$email','$phone','$password','$cpassword')";
                       $iquery = mysqli_query($con,$insertquery);
                    if($con){
                        ?>
                        <script>
                            alert("Created Successfully")
                        </script>
                        <?php
                    }else {
                    
                    
                    ?>
                    <script>
                        alert("Cannot able to create")
                    </script><?php
                    }
                        
               
                }
            else{?>
                 <script>
                     alert("password is not matching")
                 </script>
             <?php   }
            }
        }     


 
    ?>
        <div class="loginform">
            <h1 class="heading">Sign up</h1><br>
             <form action="<?php echo htmlentities($_SERVER['PHP_SELF']);?>" method="POST">
                 <div class="input">
                 <input type="text" placeholder="Username" name="name" autocomplete="off" required>
                 <label for="">User-Name</label>
                </div>

                <div class="input">
                    <input type="email" placeholder="Email" name="email" autocomplete="off" required>
                    <label for="">Email-ID</label>
                   </div>

                   <div class="input"> 
                    <input type="tel" placeholder="Enter 10 digit number" name="idNumber" autocomplete="off" pattern="[0-9]{10}" required>
                    <label for="">phone number</label>
                   </div>
                <div class="input">
                    <input type="password" placeholder="password" name="password" autocomplete="off" required>
                    <label for="">New Password</label>
                   </div>

                   <div class="input">
                    <input type="password" placeholder="password" name="cpassword" autocomplete="off" required>
                    <label for="">Confirm Password</label>
                   </div>

                   <div class="button">
                    <button type="submit" name="submit" >Create</button>
                   </div>
                    

                </form>
    
    </div>
</body>
</html>