<?php

$conn = mysqli_connect('localhost', 'root', '', 'dummy');

if(isset($_POST['delete'])) {

  $id = $_POST['id'];

  $sql = "DELETE FROM student WHERE id=$id";

  if($conn->query($sql)) {
    echo "Record deleted successfully";
  } else {
    echo "Error deleting record: " . $conn->error;
  }

}

?>

<form method="post">

  <input type="text" name="id" placeholder="Enter ID">
  
  <input type="submit" name="delete" value="Delete Student">

</form>