<?php
 include 'retrieve.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    
    <link rel="shortcut icon" href="practice.jpg" type="">
    <title><?php echo "Practice Page"; ?></title>

</head>

  <style>
    table tr td:nth-child(4) {
      display: grid;
      grid-auto-flow: column;
    }
  </style>

<body>

<div class="container col-4 pt-4 text-center">
    <form action="/practice/create.php" method="post">
      <div class="mb-3">
        <h1>CREATE USER</h1>
        <label class="form-label">Username</label>
        <input type="text" name="username" class="form-control" required>
        <div class="form-text">We'll never share your username with anyone else.</div>
      </div>
      <div class="mb-3">
        <label class="form-label">Password</label>
        <input type="password" class="form-control" name="password" required>
      </div>
      <div class="d-grid gap-2 col-6 mx-auto">
      <button type="submit" name="create" value="CREATE" class="btn btn-primary">Submit</button>
      </div>
    </form>

<table class="table">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">Username</th>
      <th scope="col">Password</th>
      <th scope="col">Actions</th>
    </tr>
    <?php while($results = mysqli_fetch_array($sqlAccounts)) { ?>
  </thead>
  <tbody class="table-group-divider">
    <tr>
      <th><?php echo $results['id'] ?></th>
      <td><?php echo $results['username'] ?></td>
      <td><?php echo $results['password'] ?></td>
      <td>
        <form action="/practice/update.php" method="post">
            <button type="submit" name="edit" value="EDIT" class="btn btn-success">Edit</button>
            <input type="hidden" class="btn btn-danger" name="editId" value="<?php echo $results['id'] ?>">
            <input type="hidden" class="btn btn-danger" name="editUsername" value="<?php echo $results['username'] ?>">
            <input type="hidden" class="btn btn-danger" name="editPassword" value="<?php echo $results['password'] ?>">
          </form>
        <form action="/practice/delete.php" method="post">
            <button type="submit" class="btn btn-danger" name="delete" value="DELETE">Delete</button>
            <input type="hidden" class="btn btn-danger" name="deleteId" value="<?php echo $results['id'] ?>">
        </form>      
      </td>
    </tr>
  </tbody>
   <?php }?>
</table>
</div>

</body>
</html>