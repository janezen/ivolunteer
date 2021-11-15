<?php

class VolunteerDTO{
   
    
}

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "volunteerinfo";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM volunteer";
$result = $conn->query($sql);

$arrayOfDTO = array();
if ($result->num_rows > 0) {
    $i = 0;
    // output data of each row
    while($row = $result->fetch_assoc()) {
      $myDTO = new VolunteerDTO();
      $myDTO->id = $row["v_id"]."";
      $myDTO->title = $row["title"]."";
      $myDTO->date = $row["date"]."";
      $myDTO->time = $row["time"]."";
      $myDTO->location = $row["location"]."";
      $myDTO->program = $row["program"]."";
      $myDTO->numVolunteers = $row["numVolunteers"]."";
      $myDTO->image = $row["image"]."";
      $i++;
      array_push($arrayOfDTO,$myDTO);
    }
  } else {
    echo "0 results";
  }
  $conn->close();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UFT-8">
    <title> iVolunteerph Admin </title>
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
    <link rel="stylesheet" href="admin_style.css">
</head>
<body>
    <input type="checkbox" id="nav-toggle">
    <div class="sidebar">
        <div class="sidebar-brand">
            <h2><span> iVolunteerph </span></h2>
        </div>

        <div class="sidebar-menu">
            <ul>
                <li>
                    <a href="admin_panel.php" ><span class="las la-igloo"></span>
                    <span>Dashboard</span></a>
                </li>
                <li>
                    <a href=""><span class="las la-users"></span>
                    <span>Volunteer</span></a>
                </li>
                <li>
                    <a class="active" href="admin_volunteer_program.php"><span class="las la-clipboard-list"></span>
                    <span>Volunteer Program</span></a>
                </li>
                <li>
                    <a href=""><span class="las la-users"></span>
                    <span>Donor</span></a>
                </li>
                <li>
                    <a href=""><span class="las la-clipboard-list"></span>
                    <span>Donor Program</span></a>
                </li>
                <li>
                    <a href=""><span class="las la-user-circle"></span>
                    <span>Account</span></a>
                </li>
            </ul>
        </div>
    </div>
    <div class="main-content">
        <!-- <header>
            <h1>
                <label for="nav-toggle">
                    <span class="las la-bars"></span>
                </label>
                Dashboard
            </h1>

            <div class="search-wrapper">
                <span class="las la-search"></span>
                <input type="search" placeholder="Search here "/>
            </div>

            <div class="user-wrapper">
                <img src="admin.jpg" width="40px" height="50px" alt="">
                <div>
                    <h4>Janezen Dagami</h4>
                    <small> Admin </small>
                </div>
            </div>
        </header> -->

        <main>
        <?php
             foreach($arrayOfDTO as $i){
                echo "<div class='box'>
                <img class='img-box' src= '{$i->image}.jpg'><br>
                        <p style='padding:10px; font-size:30px; '>{$i->title}<p>
                        <div style = 'text-align:left; padding-left:5px; padding-right:5px'>
                        Date: {$i->date}<br>
                        Time: {$i->time}<br>
                        Location: {$i->location}<br>
                        Program: {$i->program}<br>
                        Total Volunteers: {$i->numVolunteers}/50<br>
                        </div>
                        <div class='center'> <button class='btn'>VIEW DETAILS</button> </div>
                      </div>";
      
            }
        ?>
            
        </main>
    </div>
    </body>
</html>