
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Easybus</title>
    <link rel="stylesheet" href="login.css">
    <style>
        body{
    
    background-image: url(./images/bus1.jpg); 
    background-size: cover;
    /* justify-content: center;
    align-items: center; */
    display: flex;
    justify-content: space-around;
        }

        .output{
    background-color:white;
    position: relative;
    /* width: 400px; */
    padding: 60px 35px;
    border-radius: 15px;
}
a{
    text-decoration: none;
    color:inherit;
}

    table{
      /* position:absolute ; */
      left: 50%;
      top: 50%;
      border-collapse: collapse;
      width: 1000px;
      /* height: 200px; */
      border: 1px solid black;
      box-shadow: 2px 2px 2px rgba(0, 0, 0, 0.3),-1px -1px 8px;
    }
    
    tr{
      cursor: pointer;
      transition: all.2s ease-in;
    }

    td,th{
      padding: 10px;
      border-bottom: 1px solid #ddd;
    }


    .tablehead{
      background-color: aqua;

    }
    
    
    tr:hover{
      background-color: f5f5f5;
      transform: scale(1.02);
      box-shadow: 2px 2px 10px rgba(0, 0, 0, 0.3),-1px -1px 8px rgba(0, 0, 0, 0.3),-1px -1px 8px;
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

<body>




        <div class="loginform">
            <h1 class="heading">Status</h1><br>
             <form action="" method="POST" >
               

                
   
                   <div class="input"> 
                    <input type="tel" placeholder="Enter 10 digit number" name="idNumber" autocomplete="off" pattern="[0-9]{10}" required>
                    <label for="">phone number</label>
                   </div>

                   
                   


                   <div class="button">
                    <button type="submit" name="submit" >Check status</button>
                   </div>
                    

                </form>
    
    </div>
</body>
</html>


<?php  

include 'connectsu.php';


if(isset($_POST['submit'])){

  $phone=$_POST['idNumber'];







$sql="select passenger.id, passenger.name,passenger.tickets,bus_list.bus_number,bus_list.Driver,bus_list.pickup,bus_list.dest,bus_list.price,bus_list.depart_date from passenger,bus_list where passenger.pick=bus_list.pickup and passenger.dest=bus_list.dest and bus_list.depart_date=passenger.depart and passenger.phone=$phone";
$result=mysqli_query($con,$sql);






?>

    <div class="output">
        <table >
      
        <tr class="tablehead">
          <th>ID</th>
          <th scope="col">Name</th>
          <th scope="col">Tickets</th>
          <th scope="col">Bus number</th>
          <th scope="col">Driver</th>
          <th scope="col">Pickup</th>
          <th scope="col">Destination</th>
          <th scope="col">Price</th>
          <th scope="col">Date</th>
          <th>Canceling</th>
         
         
        </tr>
  <?php
if($result){
  while($row =mysqli_fetch_assoc($result)){
    $id11=$row['id'];
    $id=$row['name'];
    $name=$row['tickets'];
    $email=$row['bus_number'];
    $phone=$row['Driver'];
    $typeofbus=$row['pickup'];
    $dest=$row['dest'];
    $days=$row['price'];
    $departure=$row['depart_date'];


    echo '<tr>
    <td>'.$id11.'</td>

    <th scope="row">'.$id.'</th>
    <td>'.$name.'</td>
    <td>'.$email.'</td>
    <td>'.$phone.'</td>
    <td>'.$typeofbus.'</td>
    <td>'.$dest.'</td>

    <td>'.$days.'</td>
    <td>'.$departure.'</td>
  <td><button ><a href="cancelticket.php?deleteid1='.$id11.'" >Cancel</a></button></td>

    
 


  </tr>';

  }
}
}

?>


    </table>
    </div>
