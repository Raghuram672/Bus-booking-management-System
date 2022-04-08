<?php

session_start();
?>



<!DOCTYPE html>
<html lang="en">
<head>
   
    <title>Easybus</title>
    <link rel="stylesheet" href="index.css">

    <style>
        a{
    text-decoration: none;
    color:inherit;
}

.banner{
    background-image: url(./images/large.jpg);
    background-size: cover;
    background-position: center;
    overflow: hidden;
}
.rules{
    text-align: start;
    background-color: rgb(27, 27, 27);
   color: white;
   display: flex;
    justify-content: space-evenly;
    padding: 25px;
}
.nav{
    width: 65%;
}
.navigate{
    background-color:rgb(27, 27, 27);
}
.matches-detail{
    height: 120px;
}
.card1{
    background-image: url(./images/bangalore1.jpg);
    background-size: cover;
    background-position: center;
}
.card2{

background-image: url(./images/mysore-palace.jpg);
background-position: center;
}

.card3{ background-image: url(./images/E4nfCNYVIAcY8WE.jpg);

}
.card4{
    background-image: url(./images/1c29ffa03b76686cf8d3048489615f9d.jpg);
}

.card5{
    background-image: url(./images/jog.jpg);
}

.card6{
    background-image: url(./images/COORG.jpg);
}
.card7{
    background-image: url(./images/Hampi1.jpg);
}
.card8{
    background-image: url(./images/hassan.jpg);
}
.title{
    font-size: 40px;
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    font-weight: bold;
}
    </style>
</head>
<body>

    <div class="navigate">
        <div class="container">
<div class="logo">
    <p>
        EASYBUS
    </p>

        </div>
        <nav class="nav">
            <ul type="none" class="nav-links" >
                <li class="nav-link"><a href="adminpage.php">Admin</a></li>
                <li class="nav-link"><a href="hire.php">Hire Bus</a></li>
                <li class="nav-link"><a href="tickets.php">Tickets</a></li>

                <li class="nav-link"><a href="Status.php">Status</a></li>
                <li class="nav-link"><a href="cost.php">Bus Charges</a></li>
                <li class="nav-link"><a href="contactus.html">Contact us</a></li>

                <li class="nav-link"><a href="logout.php">Logout</a></li>


                
            </ul>
        </nav>
        </div>
        
    </div>
    
<div class="banner">
    <div class="banner-section">

      <p> EASYBUS</p>
        <!-- <button class="bt">
            click to veiw places

        </button> -->
        <!-- <p>Welcome  </p> -->
    </div>
    
</div>


<section class="matches">
    <h1 class="title">Trending places</h1>
<div class="matches-container">
    <div class="matches-card card1">
        <div class="matches-detail">
            <div class="padd">
                <h1 class="matches-title">Bangalore</h1>
                <button class="bt"><a href="hire.php">Book now</a>
</button>
            </div>
        </div>

    </div>

    <div class="matches-card card2">
        <div class="matches-detail">
            <div class="padd">
                <h1 class="matches-title">Mysore</h1>
                <button class="bt"><a href="hire.php">Book now</a>
</button>
            </div>
        </div>

    </div>

    <div class="matches-card card3">
        <div class="matches-detail">
            <div class="padd">
                <h1 class="matches-title">Mangalore<h1>
                <button class="bt"><a href="hire.php">Book now</a>
</button>
            </div>
        </div>

    </div>

    <div class="matches-card card4">
        <div class="matches-detail">
            <div class="padd">
                <h1 class="matches-title">Udupi</h1>
                <button class="bt"><a href="hire.php">Book now</a>
</button>
            </div>
        </div>
        </div>

        <div class="matches-card card5">
            <div class="matches-detail">
                <div class="padd">
                    <h1 class="matches-title">Shivamogga</h1>
                    <button class="bt"><a href="hire.php">Book now</a>
</button>
                </div>
            </div>

    </div>

    <div class="matches-card card6">
            <div class="matches-detail">
                <div class="padd">
                    <h1 class="matches-title">Coorg</h1>
                    <button class="bt"><a href="hire.php">Book now</a>
</button>
                </div>
            </div>

    </div>


    <div class="matches-card card7">
            <div class="matches-detail">
                <div class="padd">
                    <h1 class="matches-title">Hampi</h1>
                    <button class="bt"><a href="hire.php">Book now</a>
</button>
                </div>
            </div>

    </div>

    <div class="matches-card card8">
            <div class="matches-detail">
                <div class="padd">
                    <h1 class="matches-title">Hassan</h1>
                    <button class="bt"><a href="hire.php">Book now</a>
</button>
                </div>
            </div>

    </div>
</div>
</div>


</section>

<div class=rules>
    <div>
<h1>Causual contract</h1>
    <p>Buses are given on hire to the public for purpose such as sightseeing tours, marriages, school / college study tours / excursions etc.</p>
        <p> on the basis of rate per km. This type of operations is also called Casual contract services.</p>
<h2>Important terms and conditions</h2>
<p>
    <ol>
        <li>The kilometers will be calculated from the operating Depot and return to the same Depot.</li>
        <li>Rs.2/- concession is allowed for students of recognized schools and recognized colleges in the State of Karnataka</li>
        <li>GST - Not applicable for non-AC services and 5% for AC services.</li>
         <li>Toll fee, entry fee and any other fee to be paid by party.</li>
        <li>In case of Inter-state contract, Permit Charges and Entry Tax shall be extra.</li>
   
        <li>For late arrivals, extra amount will be charged.</li>

        </div>


    </ol>
</p>


<div>
<h2>Cancellation Rules</h2>

<ol>
 <li>Cancelled up to 24 hours before the departure time 10% of day 1 charges+ interstate permit fee
 </li>
<li>Cancelled up to one hour before the departure time 25% of day 1 charges+interstate permit fee</li>
<li>Cancelled after the departure 50% of day 1 charges + interstate permit fee</li>
</ol>
</div>
</div>

</body>
</html>