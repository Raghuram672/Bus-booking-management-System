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
                    <input type="email" placeholder="Email" autocomplete="off" name="email" required>
                    <label for="">Email-ID</label>
                   </div>
   
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
        $mail=$_POST['email'];
        $num=$_POST['idNumber'];

        $sql="select * from hire where email='$mail' and phone='$num'";
        $result=mysqli_query($con,$sql);  
    
?>
    <div class="output">
        <table >
      
        <tr class="tablehead">
          <th scope="col">Id-Number</th>
          <th scope="col">Name</th>
      
          <th scope="col">Mobile</th>
          <th scope="col">Type of bus</th>
          <th scope="col">Days</th>
          <th scope="col">Departure</th>
          <th scope="col">Approval status</th>
         
          <th>User-Status</th>
          <th>Operation</th>
        </tr>
  <?php
   $emailcount= mysqli_num_rows($result);

   if($emailcount>0){
if($result){
  while($row =mysqli_fetch_assoc($result)){
    $id=$row['id'];
    $name=$row['Name'];
  
    $phone=$row['phone'];
    $typeofbus=$row['typeofbus'];
    $days=$row['days'];
    $departure=$row['departure'];
    $as=$row['Approved_status'];
    $us=$row['user_status'];

    echo '<tr>
    <th scope="row">'.$id.'</th>
    <td>'.$name.'</td>

    <td>'.$phone.'</td>
    <td>'.$typeofbus.'</td>
    <td>'.$days.'</td>
    <td>'.$departure.'</td>
    <td>'.$as.'</td>

    <td>'.$us.'</td>
  <td><button ><a href="cancel.php?updateid='.$id.'" >Cancel</a></button></td>


  </tr>';

  }
}
   }
else{
     
    ?>
    <script>
        alert("Invalid Booking ID")
    </script><?php
}
    }
?> </table>
</div>
