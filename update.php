<?php
 include 'database.php';
 
 if (isset($_POST['edit'])) {
    $editId = $_POST['editId'];
    $editUsername = $_POST['editUsername'];
    $editPassword = $_POST['editPassword'];
 }
 

 if (isset($_POST['update'])) {
    $updateId = $_POST['updateId'];
    $updateUsername = $_POST['updateUsername'];
    $updatePassword = $_POST['updatePassword'];

    $queryUpdate = "UPDATE account SET username = '$updateUsername', password = '$updatePassword' WHERE id = $updateId";
    $sqlUpdate = mysqli_query($connection, $queryUpdate);

    echo '<script>alert("Successfully Updated!")</script>';
    echo '<script>window.location.href = "/practice/index.php"</script>';
 }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    
    <link rel="shortcut icon" href="practice.jpg" type="">
    <title><?php echo "Update Page"; ?></title>

</head>

  
<body>

<div class="container pt-4 text-center">
<form action="/practice/update.php" method="post">
  <div class="mb-3">
  <h1>UPDATE USER</h1>
    <label class="form-label">Update Username</label>
    <input type="text" name="updateUsername" class="form-control" value="<?php echo $editUsername?>"required>
  </div>
  <div class="mb-3">
    <label class="form-label" value="<?php echo $editPassword?>">Password</label>
    <input type="password" class="form-control" name="updatePassword" required>
  </div>
  <button type="submit" name="update" value="UPDATE" class="btn btn-primary">Update</button>
  <input type="hidden" name="updateId" value="<?php echo $editId ?>" />
</form>

</div>

</body>
</html>