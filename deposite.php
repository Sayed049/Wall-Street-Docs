<?php

$conn = mysqli_connect('localhost','root','','bank');

if(isset($_POST['deposit'])) {

  $accountNo = $_POST['accountNo'];
  $amount = $_POST['amount'];

  $sql = "UPDATE accounts 
          SET balance = balance + $amount  
          WHERE account_no = $accountNo";

  if($conn->query($sql)){
    echo "Amount deposited successfully!";
  } else {
    echo "Error depositing amount: " . $conn->error;
  }

}

?>

<form method="post">
  <input type="text" name="accountNo" placeholder="Account Number">
  <input type="text" name="amount" placeholder="Amount">
  <input type="submit" name="deposit" value="Deposit">
</form>