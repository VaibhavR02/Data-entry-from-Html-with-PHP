<?php

if(isset($_POST["name"])){
 $server = "localhost";
 $username = "root";
 $password = "Root@123";
 $database = "bookmyshow";
 $con = mysqli_connect($server, $username,$password, $database);

if(!$con){
    die("connection to this database failed due to" . mysqli_connect_error());
}

$name = $_POST['name'];
$email = $_POST['email'];
$mobile = $_POST['mobile'];
$show = $_POST['show'];


$sql="INSERT INTO `bookmyshow`.`user`( `name`,`email`, `mobile`, `show`, `dt`) VALUES 
 ( '$name', '$email', '$mobile','$show', current_timestamp())";


if($con -> query($sql)==true){
    // echo "successfull inserted";

}
else{
    echo "ERROR : $sql <br> $conn ->error";
}
$con ->close();


}
?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>BookMyshow</title>
    <link rel="stylesheet" href="style.css" />
    <link
      rel="stylesheet"
      href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"
    />
  </head>
  <body>
    <h1 class="heading">Welcome to BookMyshow.com!</h1>
    <div class="container">
      <form action="index.php" method="POST">
        <div class="form-group">
          <label for="name"> Name:</label>
          <input
            type="text"
            class="form-control"
            id="name"
            placeholder="Enter your Name"
            name="name"
          />
        </div>

        <div class="form-group">
          <label for="email"> Email:</label>
          <input
            type="email"
            class="form-control"
            id="email"
            placeholder="Enter email"
            name="email"
          />
        </div>

        <div class="form-group">
          <label for="mobile">Mobile no:</label>
          <input
            type="mobile"
            class="form-control"
            id="mobile"
            placeholder="Enter Mobile no"
            name="mobile"
          />
        </div>
        <div class="form-group">
          <label for="show">Enter show Name:</label>
          <input
            type="text"
            class="form-control"
            id="show"
            placeholder="Enter show name"
            name="show"
          />
        </div>

        <button class="btn">Submit</button>
      </form>
    </div>
  </body>
</html>
