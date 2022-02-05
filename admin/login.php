<?php
require("../../db.php");
$output = "";

try{
  if(isset($_POST['submit'])){

    // get form values
    $username = $_POST['username'];
    $password = $_POST['password'];

    //retreieve table row that matches username
    $sql = "SELECT id, name, username, password FROM admins WHERE username = '".$username."'";
    $stmt = $pdo->prepare($sql);
    $stmt->execute();
    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    // check if user exists
    if($user !== false){

      // check if password is valid
      $validPassword = password_verify($password, $user['password']);
      if($validPassword){
        // pass user values to next page
        session_start();
        $_SESSION['name'] = $user['name'];
        $_SESSION['username'] = $user['username'];

        // check if user is verefied 
          // move to dashboard
        header("Location: admindashboard");
      }
      else{
        $output = "The entered password is incorrect, please try again.";
      }
    }
    else{
      $output = "This user does not exist, please try again.";
    }
}
    
  
}catch(PDOException $e){
  echo $e->getMessage();
}



?>

<!DOCTYPE html>
<html>
    <head>
        <title>Portfolio Admin Login</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

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
    <main class="text-center">
        <h2 class="h3 mb-3 font-weight-normal">Admin Login</h2>
        <p>To access the admin area of the site, please enter valid admin credentials:</p>

        <p id="formError" style="color: red;"><?php echo $output ?></p>

        <form method="POST" class="form-signin">
            <input type="text" id="username" name="username" required placeholder="Username..."  class="form-control"> <br>
            <input type="password" id="password" name="password" required  placeholder="Password..."  class="form-control" > <br>

            <input type="submit" value="login" name="submit" class="btn btn-lg btn-primary btn-block">

        </form>
</main>
    </body>


</html>