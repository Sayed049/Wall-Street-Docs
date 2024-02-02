<?php

class Bank {

  private $accounts = [];
  
  public function __construct() {
    $this->showMenu();
  }

  private function showMenu() {
  
        echo "1. <a href='createAccount.php'>Create new account</a> <br>";
        echo "2. <a href='display.php'>Display all accounts</a> <br>";   
        echo "3. <a href='updateAccount.php'>Update an account</a> <br>";
        echo "4. <a href='deleteAccount.php'>Delete an account</a> <br>";
        echo "5. <a href='depositAmount.php'>Deposit amount</a> <br>";
        echo "6. <a href='withdrawAmount.php'>Withdraw amount</a> <br>";
        echo "7. <a href='searchAccount.php'>Search account</a> <br>";  
        echo "8. <a href='exit.php'>Exit</a> <br>";

    
  }
  
  // Other methods definition
}

$bank = new Bank();

?>