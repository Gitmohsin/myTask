<?php
    require_once("db.php");
    $id = $_GET['id'];
    $res = $database->Edit($id);
    $row = mysqli_fetch_assoc($res);  
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MyTask</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" />
</head>
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
          <a class="nav-link active" aria-current="page" href="index.php">Home</a>
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
<div class="container my-3">
    <h2>Update Employee Data</h2>
    <form method="POST">
        <div class="row mb-3">
            <label class="col-sm-3 col-form-label">Name</label>
            <div class="col-sm-6">
                <input type="text" class="form-control" name="Name" value="<?php echo $row['Name'] ?>">
            </div>
        </div>
        <div class="row mb-3">
            <label class="col-sm-3 col-form-label">BirthDate</label>
            <div class="col-sm-6">
                <input type="text" class="form-control" name="BirthDate" value="<?php echo $row['BirthDate'] ?>">
            </div>
        </div>
        <div class="row mb-3">
            <label class="col-sm-3 col-form-label">Nick_name</label>
            <div class="col-sm-6">
                <input type="text" class="form-control" name="Nick_name" value="<?php echo $row['Nick_name'] ?>"">
            </div>
        </div>
        <div class="row mb-3">
            <label class="col-sm-3 col-form-label">Address</label>
            <div class="col-sm-6">
                <input type="text" class="form-control" name="Address" value="<?php echo $row['Address'] ?>">
            </div>
        </div>
        <div class="row mb-3">
            <label class="col-sm-3 col-form-label">Salary</label>
            <div class="col-sm-6">
                <input type="text" class="form-control" name="Salary" value="<?php echo $row['Salary'] ?>">
            </div>
        </div>
    
        <div class="d-grid gap-2 d-md-block">
            <button class="btn btn-primary" type="submit" name="btnSave">Update Your Data</button>
            <!-- <input class="btn btn-primary" type="submit"value="Update Your Data" name="btnSave"> -->
        </div>

    </form>
</div>
</body>
</html>

<?php
if(isset($_POST['btnSave']))
{
    $name = $_POST['Name'];
    $birthdate = $_POST['BirthDate'];
    $nickname = $_POST['Nick_name'];
    $address = $_POST['Address'];
    $salary = $_POST['Salary'];

    $res = $database->update($id, $name, $birthdate, $nickname, $address, $salary);

    if($res)
    {
        header("Location:index.php");
    }
    else
    {
       echo "Failed to save data..";
    }
   
}
?>