<?php
    require("../db.php");

    $project_name = $_GET['project'];

    $sql = "SELECT name, short_desc, long_desc, image_path,url,git_url, file_name, completion_year, completed FROM projects WHERE file_name = '".$project_name."';";
    $stmt = $pdo->prepare($sql);
    $stmt->execute();
    $project = $stmt->fetch(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html>

    <head>
        <title><?php echo $project['name'];?> </title>
    </head>

</html>