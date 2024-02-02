<?php

$conn = mysqli_connect('localhost', 'root', '', 'dummy');

if(isset($_POST['update'])) {

  $id = $_POST['id'];
  
  $firstname = $_POST['firstname'];
  $lastname = $_POST['lastname'];
  $email = $_POST['email'];

  $sql = "UPDATE student 
          SET firstname='$firstname', lastname='$lastname', email='$email' 
          WHERE id=$id";

  if($conn->query($sql)) {
    echo "Record updated successfully";
  } else {
    echo "Error updating record: " . $conn->error;
  }

}

?>

<form method="post">

  <input type="text" name="id" placeholder="Enter ID">
  
  <input type="text" name="firstname" placeholder="First Name">

  <input type="text" name="lastname" placeholder="Last Name">

  <input type="email" name="email" placeholder="Email">

  <input type="submit" name="update" value="Update Student">

</form>