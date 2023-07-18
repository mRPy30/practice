<?php
    include 'database.php';

    $queryAccounts = "SELECT * FROM account";
    $sqlAccounts = mysqli_query($connection, $queryAccounts);
 
?>