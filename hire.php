<!DOCTYPE html>
<html lang="en">
<head>
    <title>Easybus</title>
    <link rel="stylesheet" href="hire.css">
    <style>
        body{
    
    background-image: url(./images/bus1.jpg); 
    background-size: cover;
        }
    </style>
</head>
<body>

<?php
    include 'connectsu.php';
    if(isset($_POST['submit'])){
        $name=$_POST['name'];
        $email=$_POST['email'];
        $phone=$_POST['idNumber'];
        $type=$_POST['category'];
        $days=$_POST['days'];
        $date=$_POST['date'];

        $sql=" insert into hire(Name,email,phone,typeofbus,days,departure) values('$name','$email','$phone','$type','$days','$date')";
        $result= mysqli_query($con,$sql);
        if($result){
            ?>
            <script>
                alert("booked Successfully")
            location.replace("index.php");

            </script>
            <?php
        }else {
        
        
        ?>
        <script>
            alert("Cannot able to book")
        </script><?php
        }
        




    }



?>


    
    
        <div class="loginform">
            <h1 class="heading">Hire Bus</h1><br>
             <form action="" method="POST">
                 
             <div class="input">
                    <input type="text" placeholder="Name" name="name" autocomplete="off" required>
                    <label for="">Name</label>
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
                    <!-- <input type="text" placeholder="Type of bus" required> -->
                    
                    <select name="category" id="" required class="inputselect">
                        <option value="select">Type of bus</option>
                        <option value="Sleeper NON-AC">Sleeper NON-AC</option>
                        <option value="Sleeper AC">Sleeper AC </option>
                        <option value="Volvo">Volvo</option>
                        <option value="Mini Bus">Mini Bus</option>
                        <option value="Airavata">Airavata</option>
                        <option value="Rajahamsa">Rajahamsa</option>
                    </select>
                    <label for="category">Bus-Category</label>
                   </div>   
                
                   
                   <div class="input">
                    <input type="number" placeholder="Number of days" name="days" autocomplete="off" required>
                    <label for="">Number of days</label>
                   </div>

                   <div class="input">
                    <input type="date" placeholder="Departure-Date" name="date" autocomplete="off" required>
                    <label for="">Date of Departure</label>
                   </div>

                   <div class="button">
                    <button type="submit" name="submit" >Check availability</button>
                   </div>
                    

                </form>
    
    </div>
</body>
</html>