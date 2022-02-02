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
<html>
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
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.0/font/bootstrap-icons.css">
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
          <a class="nav-link" aria-current="page" href="admindashboard"
            >Home</a
          >
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="projects">Projects</a>
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
    <h2 class="h2 mb-3 font-weight-normal">Project View</h2>

    <p style="max-width: 50%;">Below is a list of the projects that you have completed, click the button to 
add a new project.</p>

<br>
    <a href="projectadd"><button id="add" name="add" class="btn btn-primary shadow-sm rounded btn-lg px-4 me-sm-3">Add project</button></a>
        <br>
        <br>
        <h4 class="h4 mb-3 font-weight-normal">List of projects:</h4>  
        <?php   
            echo "<table class=\" table table-striped table-responsive mx-auto w-auto   \" style=\"width:100%; font-size:100%;  margin: auto;\"\>
            <tr class=\"thead-light\">
            <th scope=\"col\">Project Name</th>
            <th scope=\"col\">URL</th>
            <th scope=\"col\">Git URL</th>
            <th scope=\"col\">Completed?</th>
            <th scope=\"col\">Edit</th>
            <th scope=\"col\">Delete</th>
            </tr>
            ";
        
            // for each project echo into a new table row
            $projects = $pdo->query('SELECT * FROM projects')->fetchAll();
            foreach($projects as $project){
                echo "<tr>";
                echo "<td>".$project['name']."</td>";

                // if no URL is provided, display warning message
                if($project['url'] === null){
                    echo "<td>No URL provided</td>";
                }else{
                    echo "<td> <a target=\"_blank\" href=\"".$project['url']."\">Site Link</a></td>";
                }

                // if no URL is provided, display warning message
                if($project['git_url'] === null){
                    echo "<td>No URL provided</td>";
                }else{
                echo "<td> <a target=\"_blank\" href=\"".$project['git_url']."\">Github Link</a></td>";
                }

                // check if project is completed and display different messages
                if($project['completed'] == 1){
                    echo "<td>Completed</td>";
                }
                else{
                    echo "<td>Incomplete</td>";
                }

                echo "<td class=\"text-center\"> <a href=\"project?name=".$project['name']."\"><i class=\"bi bi-pencil-square\" style=\"font-size: 1rem;\"></i></a></td>";
                echo "<td class=\"text-center\"><button type=button style=\"border: 0px; background-color:transparent; \" data-bs-toggle=\"modal\" data-bs-target=\"#modalForm\" ><i class=\"bi bi-x\" style=\"font-size: 1rem; color: red;\"></i></button></td>";
                echo "</tr>";


            }

            echo "</table>";
        ?>
</main>

</body>
</html>