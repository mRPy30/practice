<?php 
     include 'database.php';

     if (isset($_POST['delete'])) {
         $deleteId = $_POST['deleteId'];
 
         $queryDelete = "DELETE FROM account WHERE id = $deleteId";
         $sqlDelete = mysqli_query($connection, $queryDelete);
 
         echo '<script>alert("Successfully Deleted!")</script>';
         echo '<script>window.location.href = "/practice/index.php"</script>';
     }

?>