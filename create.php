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
    <h2>Add Employee in List</h2>
    <form method="POST">
    <div class="row mb-3">
            <label class="col-sm-3 col-form-label">Name</label>
            <div class="col-sm-6">
            <input type="text" class="form-control" name="Name" placeholder="Enter your name.">
            </div>
        </div>
        <div class="row mb-3">
            <label class="col-sm-3 col-form-label">BirthDate</label>
            <div class="col-sm-6">
            <input type="text" class="form-control" name="BirthDate" placeholder="Enter your Birthdate.">
            </div>
        </div>
        <div class="row mb-3">
            <label class="col-sm-3 col-form-label">Nick_name</label>
            <div class="col-sm-6">
            <input type="text" class="form-control" name="Nick_name" placeholder="Enter your NickName.">
            </div>
        </div>
        <div class="row mb-3">
            <label class="col-sm-3 col-form-label">Address</label>
            <div class="col-sm-6">
            <input type="text" class="form-control" name="Address" placeholder="Enter your Address.">
            </div>
        </div>
        <div class="row mb-3">
            <label class="col-sm-3 col-form-label">Salary</label>
            <div class="col-sm-6">
            <input type="text" class="form-control" name="Salary" placeholder="Enter your salary."> <br>
            </div>
        </div>

    <!-- <input type="text" name="textname" placeholder="Enter your name.">
    <input type="text" name="textbdate" placeholder="Enter your Birthdate.">
    <input type="text" name="textnickname" placeholder="Enter your NickName.">
    <input type="text" name="textaddress" placeholder="Enter your Address."> <br>
    <input type="text" name="textsalary" placeholder="Enter your salary."> <br> -->
        <div class="d-grid gap-2 d-md-block">
            <button class="btn btn-primary" type="submit" name="btnSave">Add Data in List</button>
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

    $res = $database->create($name, $birthdate, $nickname, $address, $salary);

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