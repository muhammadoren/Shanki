<?php
require_once '../session_manager.php';

if (isset($_POST['inputPassword'])){
    $password = $_POST['inputPassword'];
    
    $login_status = login($password);
    //echo $login_status;
    if($login_status == true){
        header('Location: index.php');
    }
    else{
      echo "Invalid Access Key";
    }
} else 
    logout();

?>

<!DOCTYPE html>
<html>
  <head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
       <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css">
  <link rel="stylesheet"  href="https://fonts.googleapis.com/css?family=Montserrat&display=swap">

<title>
 PANEL | PHISHING
</title>
<style>
body{
  background-color:#0D0D0D;
 
  color:green;
  font-family:"Montserrat", Sans-Serif;
  align-items: center;
  font-size:12px;
}
  .form-control{
    width:90%;
    background-color: transparent ;
    border:1px solid lime;
    color:lime;
    
  }

  .btn{
    background-color: lime;
    color:red;
    border:0px solid white;
    width:90%;
    margin-top:12px;
    border:1px solid lime;
    
    
  }

  p{
    margin-top:12px;
  }
</style>
  </head>
  <body>
    
    <form action="login.php" method="POST" autocomplete="off">
      <center>
      <img src="https://i.ibb.co/rdshyKV/20240102-184732.png" width="180px" height="180px" style="margin-top:10px;" onclick="announcement()"><span style="color:lime;">&nbsp;V.1.0<br><br></span>
      <h1 style="font-size:24px; color:lime; text-shadow:3px lime;">GEO PHISHING PANEL</h1>

      
      <br>
      
      <div class="" style="border:2px solid lime; width:300px; height:135px; border-radius: 9px; box-shadow: 0px 1px 20px rgba(0, 255, 0, 0.03), 0px 5px 82px rgba(0, 255, 0, 0.06), 0px 12px 184px rgba(0, 255, 0, 0.10), 0px 20px 328px rgba(0, 255, 0, 0.13), 0px 32px 512px rgba(0, 255, 0, 0.16); ; background-color:#1D1D1D;">
        
    
    
  
       <input type="password" placeholder="Key Access" name="inputPassword"  style="background-color:black; border:2px solid lime; width:250px; margin-top:10px;  color:lime;border-radius:9px;" class="form-control" >
   
   
   


<br>


   
    <input type="submit" style="border-radius:8px; border:2px solid lime; width:250px; color:lime; background-color:transparent;" class="btn btn-success" name="submit" value="ENTER" onclick="submit()">
    <br><br>
<br>
<br>
    </div>
    </form>
<br>
<span style="color:red;">

</span>
  <!---  <div class="g-recaptcha" data-sitekey="6Ldbdg0TAAAAAI7KAf72Q6uagbWzWecTeBWmrCpJ" ></div>-->
<br><br><br>

    </center>
 

        


  </body>
  
  
  
</html>