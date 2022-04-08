<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Easybus</title>

    <style>
        *{
    margin: 0px;
    padding: 0px;
}
a{
    text-decoration: none;
    color:inherit;
}

body{
    font-family: 'Segoe UI';
    background-image: url(./images/bus1.jpg); 
    background-size: cover;
    height:100vh;
    display: flex;
    align-items: center;
    justify-content: center;
   
    
    text-align: center;
}

.loginform{
    background-color:white;
    position: relative;
    width: 400px;
    padding: 60px 35px;
    border-radius: 15px;
}

.heading{
    font-size: 35px;
    margin-bottom: 50px;
}

.input{
    margin:20px 0px;
    position: relative;
    height: 60px;
    width: 100%;
}
.inputselect{
    /* margin:20px 0px; */
    position: relative;
    height: 27px;
    width: 100%;
    border: 1px solid silver;
    outline: none;
    font-size: 15px;
    /* margin-bottom: 20px; */

}
.input input{
    height: 40%;
    width: 100%;
    border: 1px solid silver;
    outline: none;
    font-size: 15px;
}

.input label{
    position:relative;
}
button{
    cursor: pointer;
    padding: 7px 40px;
    font-size: 13px;
    border-radius: 10px;
    text-align:center;
}

button:hover{
    background-color: aqua;
}


    </style>
</head>
<?php
  include 'connectsu.php';
  $id=$_GET['updateid'];
    if(isset($_POST['submit'])){
        $bus=$_POST['category'];
        $rate=$_POST['rate'];


        $emailquery = "select * from busrate where bus_type='$bus' ";
        $query = mysqli_query($con,$emailquery);
        

        $emailcount= mysqli_num_rows($query);

        if($emailcount>0){?>
        <script>
           alert( "Bus already exists")
           </script>
           <?php }
        else{

            
        $sql="update busrate set bus_type='$bus',rate='$rate' where id='$id'";
        $result=mysqli_query($con,$sql);
        if($result){
            ?>
            <script>
                alert("updated Successfully")
                location.replace("displayrate.php");

            </script>
            <?php
        }else {
        
        
        ?>
        <script>
            alert("Cannot able to update")
        </script><?php


    }
            
                    
           
            }
      ?>
<?php

    }
?>


<body>
            <div class=loginform>
            <h1 class="heading">Bus details</h1><br>
             <form action="" method="POST">
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
                    <input type="" placeholder="Rate per km" name="rate" autocomplete="off" required>
                    <label for="">Rate</label>
                   </div>

                   <div class="button">
                    <button type="submit" name="submit" >Add bus</button>
                   </div>
             </form>
                   </div>      
                 
</body>
</html>

