<?php
session_start();

if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true){
    header("location: login.php");
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

    <title>Distributed System</title>
  </head>
  <body>
    <?php require 'partials/_nav.php' ?>
    <?php require 'partials/_dbconnect.php' ?>
    <?php
    if($_SERVER["REQUEST_METHOD"] == "POST"){
      include 'partials/_dbconnect.php';
      $Question = $_POST["Question"];
      $Marks = $_POST["Marks"];
    if($Marks<=30){
    $sql = "INSERT INTO `ds1` ( `Question`, `Marks`) VALUES ( '$Question', '$Marks' )";
    $result = mysqli_query($conn, $sql);
    }
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
     <h8>TOTAL MARKS : 30 </h8>
    
     <form action="/svnit/DS1.php" method="post">
     
     <div class="form-group">
            <label for="Question">Question</label>
            <input type="int" maxlength="11" class="form-control" id="Question" name="Question" >
            
        </div>
        <div class="form-group">
            <label for="Marks">Marks</label>
            <input type="int" maxlength="23" class="form-control" id="Marks" name="Marks">
        </div>
        
         
        <button type="submit" class="btn btn-primary">Add</button>
     </form>

     

    </div>
    <div class="container my-3">
    
    <table class="table" >
    <thread>
      <tr>
      <th scope="col">#</th>
        <th scope="col">Question</th>
        <th scope="col">Marks</th>
    <?php 

    $res = "SELECT * FROM `ds1` ";
    $result1 = mysqli_query($conn, $res);
    
    
   
    while($row = mysqli_fetch_array($result1)){
        $s_id= $row['id'];
        $Question = $row['Question'];
        $Marks = $row['Marks'];
        
        echo'
        <tbody>
          <tr>
            <th scope="row">'.$s_id.'</th>
            <td>'.$Question.'</td>
            <td>'.$Marks.'</td>
      
          </tr>
    
        </tbody>';
        
        
    }
    ?>
    </div>
    <div class="container my-3">
    
    <table class="table" >
    <thread>
      <tr>
      <th scope="col">Total Marks</th>
        
    <?php 

    $res1 = "SELECT sum(Marks) as Total FROM `ds1` ";
    $result2 = mysqli_query($conn, $res1);
    
    
   
    while($row = mysqli_fetch_array($result2)){
        $Total= $row['Total'];
        
        if($Total<=30)
        {
        echo'
        <tbody>
          <tr>
            <th scope="row">'.$Total.'</th>
            
      
          </tr>
    
        </tbody>';
        }
        else{
          $res2 = " TRUNCATE TABLE ds1 ";
          $result3 = mysqli_query($conn, $res2);
          if ($result3){
            echo 'Enter the marks again';
        }
        }
        
    }
    
    ?>
      <?php 
    
    
    echo '<div class="card text-end">
    
                <div class="card body">
                    <div class="card-body">
                        <h5 class="card-title"><a href = "QuestoCOmap.php">Go to QUEStoCO Mapping</a></h5>
                        
                       
                    </div>
                </div>
           </div>'; 
           ?>   
   
</div>
    

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>