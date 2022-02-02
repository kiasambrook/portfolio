<?php
session_start();
require("../db.php");
$username = $_SESSION['username'];
$name = $_SESSION['name'];

if($username == null){
    header("Location:login");
}

$project_name = $_GET['name'];

//retreieve table row that matches username
$sql = "SELECT name, short_desc, long_desc, image_path,url,git_url, file_name, completion_year, completed FROM projects WHERE name = '".$project_name."';";
$stmt = $pdo->prepare($sql);
$stmt->execute();
$project = $stmt->fetch(PDO::FETCH_ASSOC);

?>

<!DOCTYPE html>
<html?>
    <head>
        <title><?php echo $project_name; ?></title>
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
        <ol class="breadcrumb mb-0 pb-0 ps-3 pt-2" style="  background-color: #f5f5f5;">
            <li class="breadcrumb-item"><a href="projects">Projects</a></li>
            <li class="breadcrumb-item active" aria-current="page"><?php echo $project_name; ?></li>
        </ol>


    <main>
    <h2 class="h2 mb-3 font-weight-normal mt-0 text-center">Edit Project</h2>
    <h3 class="h3 mb-3 mt-0 text-center"><?php echo $project_name; ?></h3>

    <p style="max-width: 50%;">Edit the project by using the form below: </p>

    <form method="POST" id="addprojectform" class="form-signin" enctype="multipart/form-data">

        <!-- project name -->
        <label for="name"class="sr-only">Name:</label>
        <input type="text" name="name" id="name" placeholder="Name..."  class="form-control" >
        <br>

        <!-- short desc -->
        <label for="shortdesc"class="sr-only">Short Description:</label>
        <textarea name="shortdesc" id="shortdesc" placeholder="Short Desc..." rows="2"  class="form-control" ></textarea>  
        <br> 

        <!-- long desc -->
        <label for="longdesc"class="sr-only">Long Description:</label>
        <textarea name="longdesc" id="shortdesc" placeholder="Long Desc..." rows="4"  class="form-control" ></textarea>   
        <br>

        <!-- file upload -->
        <label for="formfile"class="sr-only">Image Upload:</label>
        <input class="form-control" type="file" id="formFile" name="formFile" placeholder="Image upload..." accept="image/*" >
        <br>

        <!-- url -->
        <label for="url"class="sr-only">Site URL:</label>
        <input type="url" name="url" id="url" placeholder="Project URL..."  size="30"  class="form-control">
        <br>

        <!-- git url -->
        <label for="giturl"class="sr-only">Git URL:</label>
        <input type="url" name="giturl" id="giturl" placeholder="Git Repository..." size="30"  class="form-control">
        <br>

        <!-- project name -->
        <label for="projectname"class="sr-only">Project Name:</label>
        <input type="text" name="projectname" id="projectname" placeholder="Project name..."  class="form-control" >
        <br>

        <!-- completed -->
        <h6 class="h6 mb-3 font-weight-normal">Project Completed?</h6> 
        <!-- yes -->
        <div class="form-check">
            <input type="radio" class="form-check-input" id="yes" name="optradio" value="1" onchange="yesnoCheck(this)">Yes
            <label class="form-check-label" for="radio1"></label>
        </div>
        <!-- no -->
        <div class="form-check">
            <input type="radio" class="form-check-input" id="no" name="optradio" value="0" onchange="yesnoCheck(this)">No
            <label class="form-check-label" for="radio2"></label>
        </div>

        <!-- completion year -->
        <div id="ifYes" style="display: none;">
        <br>
        <label for="year"class="sr-only">Completion Year:</label> 
        <input type="number" min="1900" max="2099" step="1"  id="year" name="year" placeholder="Completion year..."  class="form-control"  /><br />
        </div>

        <br>

        
        <input type="submit" value="Add Project" name="submit" class="btn btn-lg btn-primary btn-block">
        
    </form>

</main>
   </body>

   </html>