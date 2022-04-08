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
    $id=$_GET['updatebusid'];
    if(isset($_POST['submit'])){
        $busnumber=$_POST['busnumber'];
        $driver=$_POST['driver'];
        $pick=$_POST['pick'];
        $dest=$_POST['dest'];
        $depart=$_POST['depart'];
        $price=$_POST['price'];

        $sql=" UPDATE bus_list SET bus_number='$busnumber',Driver=' $driver',pickup=' $pick',dest=' $dest',price='$price',depart_date='$depart' WHERE id='$id'";
        $result= mysqli_query($con,$sql);
        if($result){
            ?>
            <script>
                alert("updated Successfully")
            location.replace("schedule.php");

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

<body>
            <div class=loginform>
            <h1 class="heading">Bus details</h1><br>
             <form action="" method="POST">
                   

             <div class="input">
                    <input type="text" placeholder="Bus number" name="busnumber" autocomplete="off" required>
                    <label for="">bus number</label>
                   </div>
                
                   <div class="input">
                    <input type="text" placeholder="Driver" name="driver" autocomplete="off" required>
                    <label for="">Driver</label>
                   </div>
                   <div class="input">
                    <input type="text" placeholder="From" name=pick required>
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
                   <div class="input">
                    <input type="text" placeholder="Price" name="price" autocomplete="off" required>
                    <label for="">Rate</label>
                   </div>
                   <div class="button">
                    <button type="submit" name="submit" >Add bus</button>
                   </div>
             </form>
                   </div>      
                 
</body>
</html>

