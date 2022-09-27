<?php
if(isset($_POST['reg'])){
    $servername = "localhost";
    $username = "root";
    $password = "";
    
    $conn = mysqli_connect($servername, $username, $password);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
}


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration page connected to Database</title>
    <link rel="stylesheet" href="CSS/bootstrap.css">
    <link rel="stylesheet" href="JS/bootstrap.js">
    <link rel="stylesheet" href="my-css/conn_form.css">
</head>

<body>
<div class="container">
    <div class="col-md-4 mx-auto mt-5 bg-dark shadow px-3 py-3 rounded">
        <h4 class="shadow mb-4 text-warning text-center fw-bold h4">Register here, if you are New..</h4>
        <form action="" method="post">
        <div class="form-input mb-3">
            <label for="fname">Full Name</label>
            <input type="text" name="fname" class="form-control"  placeholder="enter full Details">
        </div>

        <div class="form-input mb-3">
            <label for="uname">Username</label>
            <input type="text" class="form-control" name="uname" placeholder="enter Username">
        </div>

        <div class="form-input mb-3">
            <label for="em">Email</label>
            <input type="email" class="form-control" name="em" placeholder="example@gmail.com">
        </div>

        <div class="form-input mb-3">
            <label for="ph">Phone Number</label>
            <input type="text" class="form-control" name="ph" placeholder="+2349015261036">
        </div>

        <div class="form-input mb-3">
            <label for="pw">Password</label>
            <input type="password" class="form-control" name="pw" placeholder="******">
        </div>

        <div class="d-flex ml-3 justify-content-center">
        <button type="submit" name="reg" class="btn btn-transparent h4 btn-primary text-center fw-bold">Register</button>
        <a href="login.php" class="page-link h4">Direct Login</a>
        </div>
        

        </form>
    
</div>

</div>




<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/5.14.7/umd/popper.min.js"></script>
</body>
</html>