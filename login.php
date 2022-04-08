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
<body>
    <?php
    include 'connectsu.php';
    if(isset($_POST['submit'])){
        $email=$_POST['email'];
        $password=$_POST['password'];

        $email_search= "select * from users where email='$email' ";
        $query= mysqli_query($con,$email_search);

        $email_count=mysqli_num_rows($query);

        if($email_count){
            $email_pass= mysqli_fetch_assoc($query);
            $db_pass = $email_pass['password'];

            $_SESSION['name'] = $email_pass['name'];
            // $pass_decode = password_verify($password , $db_pass);
        
        if($password === $db_pass){
            ?>
        <script>
            alert("login successful" )
            location.replace("index.php");
        </script>
      <?php
      }else{
        ?>
        <script>
            alert("Password Incorrect" )
        </script>
      <?php
      }
    }
      else{
        ?>
        <script>
            alert("Invalid account" )
        </script>
      <?php
      }

    }
    ?>
    
        <div class="loginform">
            <h1 class="heading">LOGIN</h1><br>
             <form action="" method="POST">
                 <div class="input">
                 <input type="email" placeholder="User-email" name="email" autocomplete="off" required>
                 <label for="">Email-ID</label>
                </div>

                <div class="input">
                    <input type="password" placeholder="password" name="password" autocomplete="off" required>
                    <label for="">Password</label>
                   </div>

                   <div class="button">
                    <button type="submit" name="submit" >Login</button>
                   </div>
                    <div>
                        Forgot password?
                        <a href="http://localhost:84/Easybus/fp.php">Reset</a>
                    </div>
                    <div>
                        create a new account?
                        <a href="http://localhost:84/Easybus/signup.php">sign up</a>
                    </div>

                </form>
    
    </div>
</body>
</html>