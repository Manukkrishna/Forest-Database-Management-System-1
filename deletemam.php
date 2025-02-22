
<!doctype html>
<html lang="en">
  <head>
  <link rel="stylesheet" href="table.css">
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="/forest">iSecure</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="/forest/firstp.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="displaymam.php">Table</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="insertmam.php">Insert</a>
      </li>
     
       
      
    </form>
  </div>
</nav> 
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Data deletion</title>
  </head>
  <body>

  
  <form action="deletemam.php" method="post">
  <input type="text" name="name">
  <input type="submit" class="btn btn-primary" value="Delete" href="displaymam.php">
</form>
            
        </div>
     </form>
    </div>

    </body>
</html>

<?php
$server = "localhost";
$username = "root";
$password = "";
$database = "forest";

if (isset($_POST["name"])) {
    $name = $_POST["name"];
  
    $conn = mysqli_connect("$server", "$username", "$password", "$database");
  
    $sql = "DELETE FROM mammal WHERE name = '$name'";
  
    if (mysqli_query($conn, $sql)) {
      echo "Record deleted successfully";
    } else {
      echo "Error deleting record: " . mysqli_error($conn);
    }
  
    mysqli_close($conn);
  }

?>