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
     <link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.css">
     <link 
     rel="stylesheet"
     href="https://use.fontawesome.com/releases/v5.3.1/css/all.css"
     integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
     <link rel="icon" href="images/favicon.ico">

     <link href="login.css" rel="stylesheet">

     <script src="radiocheck.js"></script>
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
    <h2 class="h2 mb-3 font-weight-normal">Add New Project</h2>

    <p style="max-width: 50%;">Complete the form below to add a new project to the portforlio:</p>

<br>

<form method="POST" id="addprojectform" class="form-signin">
    

        <h4 class="h4 mb-3 font-weight-normal">Complete Form:</h4>  
        <label for="name"class="sr-only">Name:</label>
        <input type="text" name="name" id="name" placeholder="Name..."  class="form-control" required>
        <br>
        <label for="shortdesc"class="sr-only">Short Description:</label>
        <textarea name="shortdesc" id="shortdesc" placeholder="Short Desc..." rows="2"  class="form-control" required></textarea>  
        <br> 
        <label for="longdesc"class="sr-only">Long Description:</label>
        <textarea name="longdesc" id="shortdesc" placeholder="Long Desc..." rows="4"  class="form-control" required></textarea>   
        <br>
        <label for="formfile"class="sr-only">Image Upload:</label>
        <input class="form-control" type="file" id="formFile" placeholder="Image upload..." accept="image/*" required>
        <br>
        <label for="url"class="sr-only">Site URL:</label>
        <input type="url" name="url" id="url" placeholder="Project URL..." pattern="https://.*" size="30" required class="form-control">
        <br>
        <label for="giturl"class="sr-only">Git URL:</label>
        <input type="url" name="giturl" id="giturl" placeholder="Git Repository..." size="30" required class="form-control">
        <br>
        <label for="projectname"class="sr-only">Project Name:</label>
        <input type="text" name="projectname" id="projectname" placeholder="Project name..."  class="form-control" required>
        <br>
        <h6 class="h6 mb-3 font-weight-normal">Project Completed?</h6> 
            <div class="form-check">
        <input type="radio" class="form-check-input" id="yes" name="optradio" value="1" onchange="yesnoCheck(this)">Yes
        <label class="form-check-label" for="radio1"></label>
        </div>
        <div class="form-check">
        <input type="radio" class="form-check-input" id="no" name="optradio" value="0" onchange="yesnoCheck(this)">No
        <label class="form-check-label" for="radio2"></label>
        </div>

        <div id="ifYes" style="display: none;">
        <br>
        <label for="year"class="sr-only">Completion Year:</label> 
        <input type="text" id="year" name="year" placeholder="Completion year..."  class="form-control" required /><br />
        </div>

        <br>

        
        <input type="submit" value="Add Project" name="submit" class="btn btn-lg btn-primary btn-block">
        
        </form>
</main>

</body>
</html>