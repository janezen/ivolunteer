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
<html>
    <head>
        <style>
            .body{
                margin: center;
            }
            .box{
                display:inline-block;
                overflow: auto;
                border: solid 1px;
                margin:5px;
                width: 300px;
                height: 600px;
                text-align: center;
                position: relative;
            }
            img{
                width: 200px;
                height: 200px;
            }
            .btn{
                width: 100px;
                height: 50px;
                background-color: blueviolet;
            }
            .center{
                align-items: center;
                position: absolute;
                bottom: 0;
                width:100%;
                padding-bottom: 5px;
            }
        </style>
    </head>
    <body>

    
        <?php
             foreach($arrayOfDTO as $i){
                echo "<div class='box'>
                <img src= '{$i->image}.jpg'><br>
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
                // echo $i->id;
                // echo $i->title;
                // echo $i->date;
                // echo $i->time;
                // echo $i->location;
                // echo $i->program;
                // echo $i->numVolunteers."<br>";
      
            }
        ?>
        
    </body>
</html>