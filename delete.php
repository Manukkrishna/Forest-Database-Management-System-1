<form action="delete.php" method="post">
  <input type="text" name="name">
  <input type="submit" value="Delete">
</form>

<?php

$server = "localhost";
$username = "root";
$password = "";
$database = "forest";

if (isset($_POST["name"])) {
  $name = $_POST["name"];

  $conn = mysqli_connect("$server", "$username", "$password", "$database");

  $sql = "DELETE FROM amphibian WHERE name = '$name'";

  if (mysqli_query($conn, $sql)) {
    echo "Record deleted successfully";
  } else {
    echo "Error deleting record: " . mysqli_error($conn);
  }

  mysqli_close($conn);
}
?>
