<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
    if(isset($_POST['submit'])){
        $email=$_POST['email'];
        $password=$_POST['password'];
        $admin='admin123@gmail.com';

        $email_search= "select * from users where email='$email'";
        $query= mysqli_query($con,$email_search);

        $email_count=mysqli_num_rows($query);
        if($email == $admin){

        
        if($email_count){
            $email_pass= mysqli_fetch_assoc($query);
            $db_pass = $email_pass['password'];

           
        
        if($password === $db_pass){
            ?>
        <script>
            alert("login successful" )
            location.replace("aloting.php");
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
        <h1 class="heading">ADMIN-LOGIN</h1><br>
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
               
            </form>

</div>
</body>
</html>