<?php
session_start();
require("../db.php");
$username = $_SESSION['username'];
$name = $_SESSION['name'];

if($username == null){
    header("Location:login");
}




?>

<!DOCTYPE html>
<html?>
    <head>
        <title>Projects</title>
        <meta charset="UTF-8">
           <!-- Bootstrap CSS -->
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
     <link
       href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
       rel="stylesheet"
       integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
       crossorigin="anonymous"
     />
     <link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.css">
     <link 
     rel="stylesheet"
     href="https://use.fontawesome.com/releases/v5.3.1/css/all.css"
     integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
     <link rel="icon" href="images/favicon.ico">

     <link href="login.css" rel="stylesheet">
</head>

<body>
      <p>
         The requested page was:
         <?php echo $_GET['name']; ?>
      </p>
   </body>

   </html>