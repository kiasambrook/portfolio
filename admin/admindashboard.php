<?php
session_start();
require("../../db.php");
$username = $_SESSION['username'];
$name = $_SESSION['name'];

if($username == null){
    header("Location:login");
}
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Admin Dashboard</title>
        <meta charset="UTF-8">
           <!-- Bootstrap CSS -->
     <!-- Bootstrap CSS -->
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
      integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh"
      crossorigin="anonymous"
    />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
      crossorigin="anonymous"
    />
    <link
      href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css"
      rel="stylesheet"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.css"
    />
    <link
      rel="stylesheet"
      href="https://use.fontawesome.com/releases/v5.3.1/css/all.css"
      integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU"
      crossorigin="anonymous"
    />
    <link rel="icon" href="images/favicon.ico" />
    <link
      rel="canonical"
      href="https://getbootstrap.com/docs/5.0/examples/cover/"
    />

    <link href="https://languages.abranhe.com/logos.css" rel="stylesheet" />
     <link href="login.css" rel="stylesheet">
     
</head>

<body>
<!-- Main Nav bar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <!-- Cutting Fresh Title -->
    <a class="navbar-brand" href="admindashboard">
      Kia Sambrook Dashboard
    </a>

    <!-- Hamburger bars -->
    <button
      class="navbar-toggler"
      type="button"
      data-mdb-toggle="collapse"
      data-mdb-target="#navbarText"
      aria-controls="navbarText"
      aria-expanded="false"
      aria-label="Toggle navigation"
    >
      <i class="fas fa-bars"></i>
    </button>

    <!-- nav bar content -->
    <div class="collapse navbar-collapse" id="navbarText">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="admindashboard"
            >Home</a
          >
        </li>
        <li class="nav-item">
          <a class="nav-link" href="projects">Projects</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="education">Education</a>
        </li>
        <a class="nav-link" aria-current="page" href="experience"
            >Experience</a
          >
      </ul>

      <!-- Text on right side of nav bar -->
      <span class="navbar-text">
        <a href="logout">Logout</a> 
      </span>
    </div>
  </div>
</nav>
<main>
    <h1 class="h1 mb-3 font-weight-normal">Welcome back, <?php echo $name; ?>!</h1>

    <h3 class="h3 mb-3 font-weight-normal">Admin Dashboard</h3>
    <p style="max-width: 50%;">Welcome to Kia Sambrook's Admin Dashboard, this site can be used to control the data that will be displayed on the portfolio website.
        To add or view data, click the navigation menu along the top.</p>

        <br>
        <h4 class="h4 mb-3 font-weight-normal">List of admins:</h4>  
        <?php
            echo "<table class=\"table table-striped \" style=\"width:50%;\"\>
            <tr class=\"thead-light\">
            <th scope=\"col\">name</th>
            <th scope=\"col\">username</th>
            </tr>
            ";
            $admins = $pdo->query('SELECT * FROM admins')->fetchAll();
            foreach($admins as $admin){
                echo "<tr> <td>".$admin['name']."</td>";
                echo "<td>".$admin['username']."</td>";
            }

        ?>
</main>

 <!-- Bootstrap Javascript tag -->
 <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
      crossorigin="anonymous"
    ></script>
</body>
</html>