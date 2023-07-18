<?php
    include 'database.php';

    if (isset($_POST['create'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];

        $queryCreate = "INSERT INTO account VALUES (null, '$username', '$password')";
        $sqlCreate = mysqli_query($connection, $queryCreate);

        echo '<script>alert("Successfully Created!")</script>';
         echo '<script>window.location.href = "/practice/index.php"</script>';
    }


?>