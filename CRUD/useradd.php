

<?php 

include "./connec.php";

if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $mail = $_POST['email'];
    $phone = $_POST['phone'];
    $pass = $_POST['passowrd'];

    $insert = "insert into usert (name,email,phone,password) values('$name','$mail','$phone','$pass')";
    $result = mysqli_query($con,$insert);
    if($result){
        header('location:display.php');
    }else{
        echo mysqli_error($con);
    }
}
// Upload User please
echo ('<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container my-5">
        <h1 class="justify-self-center">Upload User please</h1>
        <form method="post">
            <div class="row mb-3">
                <label for="inputname" class="col-sm-2 col-form-label">User Name</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="inputname" name = "name">
                </div>
            </div>
            <div class="row mb-3">
                <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
                <div class="col-sm-10">
                    <input type="email" class="form-control" id="inputEmail3" name = "email">
                </div>
            </div>
            <div class="row mb-3">
                <label for="inputphone" class="col-sm-2 col-form-label">phone</label>
                <div class="col-sm-10">
                    <input type="number" class="form-control" id="inputphone" name = "phone">
                </div>
            </div>
            <div class="row mb-3">
                <label for="inputPassword" class="col-sm-2 col-form-label">Password</label>
                <div class="col-sm-10">
                    <input type="password" class="form-control" id="inputPassword" name = "passowrd">
                </div>
            </div>
            <button type="submit" class="btn btn-primary" name = "submit">add User</button>
        </form>
    </div>
</body>
</html>');
?>


