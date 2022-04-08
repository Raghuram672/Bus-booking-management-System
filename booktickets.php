<!DOCTYPE html>
<html lang="en">
<head>
    <title>Easybus</title>
    <link rel="stylesheet" href="hire.css">
</head>
<body>


<?php

include 'connectsu.php';
if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $phone=$_POST['idNumber'];
    $num=$_POST['nooftickets'];

    $pick=$_POST['pick'];
    $dest=$_POST['dest'];
    $depart=$_POST['depart'];


    
    $emailquery = "select * from bus_list where pickup='$pick' and dest='$dest' and depart_date='$depart' ";
    $query = mysqli_query($con,$emailquery);
    
    $emailcount= mysqli_num_rows($query);

    if($emailcount>0){

   

    $sql=" insert into passenger(name,phone,tickets,pick,dest,depart) values('$name','$phone','$num','$pick','$dest','$depart')";
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
        alert("Cannot able to add")
    </script><?php
    }
    
    }
    else {
    
    
        ?>
        <script>
            alert("Bus is not available ")
        </script><?php
        }



}


?>
    
        <div class="loginform">
            <h1 class="heading">Booking</h1><br>
             <form action="" method="POST">
                
                <div class="input">
                    <input type="text" name="name" placeholder="Username" required>
                    <label for="">User-Name</label>
                   </div>


                   <div class="input"> 
                    <input type="tel" placeholder="Enter 10 digit number" name="idNumber" pattern="[0-9]{10}" required>
                    <label for="">phone number</label>
                   </div>

                  
                   <div class="input">
                    <input type="number" min="1" max="20" name="nooftickets" placeholder="Passengers" required>
                    <label for="">Number of Tickets</label>
                   </div>

                   
                   <div class="input">
                    <input type="text" placeholder="From" name="pick" required>
                    <label for="">Pick up</label>
                   </div>

                   <div class="input">
                    <input type="text" placeholder="Destination" name="dest" required>
                    <label for="">Destination</label>
                   </div>

                   <div class="input">
                    <input type="date" placeholder="Departure-Date" name="depart" required>
                    <label for="">Date of Departure</label>
                   </div>

                   <div class="button">
                    <button type="submit" name="submit">Check availability</button>
                   </div>
                    

                </form>
    
    </div>
</body>
</html>