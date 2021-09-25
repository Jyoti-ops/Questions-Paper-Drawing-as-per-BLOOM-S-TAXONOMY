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

    <title>DISTRIBUTED_COMPUTING</title>
  </head>
  <body>
    
    <?php include 'partials/_nav.php'?>
    <?php include 'partials/_dbconnect.php' ?>
    <div class="container my-3">
   
    <form action="proces.php" method="GET">
    
    <table class="table caption-top">
    <h3 class="card-header text-center font-weight-bold text-uppercase py-4">
    DISCRIPTION
  </h3>
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">PO</th>
      <th scope="col">PROGRAMME OUTCOME </th>
      
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>PO1</td>
      <td> An ability to independently carry out research /investigation and development work to solve practical problems.</td>
      
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>PO2</td>
      <td> An ability to write and present a substantial technical report/document.
</td>
      
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>PO3</td>
      <td>Students should be able to demonstrate a degree of mastery over the area as per the specialization of the program. The mastery should be at a level higher than the requirements in the appropriate bachelor program.</td>
     
    </tr>
  </tbody>
</table>
<table class="table caption-top">
<h3 class="card-header text-center font-weight-bold text-uppercase py-4">
    CO-PO MAPPING
  </h3>
  <thead>
    <tr>
      <th scope="col">CO</th>
      <th scope="col">PO1</th>
      <th scope="col">PO2</th>
      <th scope="col">PO3</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      
      <td>CO1</td>
      <td>H</td>
      <td>M</td>
      <td>L</td>
    </tr>
    <tr>
    <td>CO2</td>
      <td>H</td>
      <td>M</td>
      <td>L</td>
    </tr>
    <tr>
    <td>CO3</td>
      <td>H</td>
      <td>M</td>
      <td>L</td>
    </tr>
    <tr>
    <td>CO4</td>
      <td>H</td>
      <td>M</td>
      <td>L</td>
    </tr>
    <tr>
    <td>CO5</td>
      <td>H</td>
      <td>M</td>
      <td>L</td>
    </tr>
  </tbody>
</table>
<table class="table caption-top">
    <h3 class="card-header text-center font-weight-bold text-uppercase py-4">
    DISCRIPTION
  </h3>
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">PO</th>
      <th scope="col">Programme Educational Objectives</th>
      
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>PEO1</td>
      <td>Graduates will have a strong foundation of core principles in Computer Science & Engineering necessary to formulate, solve and analyze engineering problems and set them up for research and development, industry, academia and higher learning.

</td>
      
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>PEO2</td>
      <td> Graduates will have theoretical background along with technical skills to work professionally in the area of Computer Hardware & Software design and implementation, Embedded Systems, Information Security, Wireless Networks, Multimedia processing, System Analysis, Data Science and Artificial Intelligence.
</td>
      
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>PEO3</td>
      <td>Graduates will have a successful career and work with values and social concern bridging the digital divide and meeting the requirements of society and industries.
</td>
     
    </tr>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>PEO4</td>
      <td> Graduates will have an exposure to emerging cutting edge technologies, adequate training and opportunities to work on research problems with effective skills.

</td>
     
    </tr>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>PEO5</td>
      <td>Graduates will have an attitude for lifelong learning and a strong inclination for research and development by pursuing higher studies in the field of engineering or science or business.
</td>
     
    </tr>
   
  </tbody>
</table>
<table class="table caption-top">
<h3 class="card-header text-center font-weight-bold text-uppercase py-4">
    PO-PEO MAPPING
  </h3>
  <thead>
    <tr>
      <th scope="col">PO</th>
      <th scope="col">PEO1</th>
      <th scope="col">PEO2</th>
      <th scope="col">PEO3</th>
      <th scope="col">PEO4</th>
      <th scope="col">PEO5</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      
      <td>PO1</td>
      <td>H</td>
      <td>M</td>
      <td>L</td>
      <td>M</td>
      <td>L</td>
    </tr>
    <tr>
    <td>PO2</td>
      <td>H</td>
      <td>M</td>
      <td>L</td>
      <td>M</td>
      <td>L</td>
    </tr>
    <tr>
    <td>PO3</td>
      <td>H</td>
      <td>M</td>
      <td>L</td>
      <td>M</td>
      <td>L</td>
    </tr>
    
  </tbody>
</table>
    </form>
   
</div>
    
    
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>