<?php
    require_once("db.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MyTask</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" />
</head>
<body>
<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">First_Task</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">About</a>
        </li>
      </ul>
      <form class="d-flex" role="search">
        <button class="btn btn-outline-success" type="submit">GitHub</button>
      </form>
    </div>
  </div>
</nav>
<div class="container my-2">
    <h2>All Employee List</h2>
    <table class="table">
        <thead>
            <tr>
                <th>id</th>
                <th>Name</th>
                <th>BirthDate</th>
                <th>Nick_name</th>
                <th>Address</th>
                <th>Salary</th>
                <th>Operation</th>
            </tr>
        </thead>
        <?php

            $res = $database->getData();
            while($row = mysqli_fetch_assoc($res))
            {
                ?>
                <tr>
                    <td><?php echo $row['id'] ?></td>
                    <td><?php echo $row['Name'] ?></td>
                    <td><?php echo $row['BirthDate'] ?></td>
                    <td><?php echo $row['Nick_name'] ?></td>
                    <td><?php echo $row['Address'] ?></td>
                    <td><?php echo $row['Salary'] ?></td>
                    <td>
                        <a class='btn btn-primary' href="edit.php?id=<?php echo $row['id'] ?>">Update</a>
                        <a class='btn btn-danger'href="delete.php?id=<?php echo $row['id'] ?>">Delete</a>
                    </td>
                </tr> 
            <?php
            }

        ?>


    </table>
    <div class="my-2">
    <a class="btn btn-primary" href="create.php" role="button">Add New Employee</a>
    </div>
</div>
</body>
</html>





