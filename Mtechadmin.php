<?php
session_start();

if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true){
    header("location: loginadmin.php");
    exit;
}

?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>MTECH</title>
  </head>
  <body>
    <?php require 'partials/_navadmin.php' ?>
    <?php require 'partials/_dbconnect.php' ?>
    <div class="container my-3">
    <h2>MTECH CURRICULAM- </h2>
    <div class="row">
    <?php 
    $sql = "SELECT * FROM `MSem`"; 
    $result = mysqli_query($conn, $sql);
    while($row = mysqli_fetch_assoc($result)){
        //echo $row['Sno.'];
        $sem = $row['Sem'];
        $id = $row['Sno.'];
    echo ' <div class="col-sm-6 my-2">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title"><a href = "Subjects.php?semid='.$id.'">'.$sem.'</a></h5>
                        <p class="card-text">Click on the link to get the list of the subjects in this semester.</p>
                        <a href="Subjects.php?semid='.$id.'" class="btn btn-primary">Subjects</a>
                    </div>
                </div>
           </div>'; 

    }
    ?>
   <?php
    if($_SERVER["REQUEST_METHOD"] == "POST"){
      include 'partials/_dbconnect.php';
      $Sub_code = $_POST["Sub_code"];
      $Name = $_POST["Name"];
      $Subjects_id = $_POST["Subjects_id"];
   
    $sql = "INSERT INTO `msem1` ( `Sub_code`, `Name`,`Subjects_id`) VALUES ( '$Sub_code', '$Name','$Subjects_id' )";
    $result = mysqli_query($conn, $sql);
    
    if ($result){
        echo 'Success';
        
    }
    else
    {
      echo 'fail';
    }
    }
    
    ?>

    <div class="container my-4">
     <h1 class="text-center">Distributed System</h1>
     <form action="/svnit/Mtechadmin.php" method="post">
     
     <div class="form-group">
            <label for="Sub_code">Sub_code</label>
            <input type="text" maxlength="11" class="form-control" id="Sub_code" name="Sub_code" >
            
        </div>
        <div class="form-group">
            <label for="Name">Name</label>
            <input type="text" maxlength="23" class="form-control" id="Name" name="Name">
        </div>
        <div class="form-group">
            <label for="Subjects_id">Subjects_id</label>
            <input type="int" maxlength="23" class="form-control" id="Subjects_id" name="Subjects_id">
        </div>
        
         
        <button type="submit" class="btn btn-primary">Add</button>
     </form>

</div>
    
    
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>