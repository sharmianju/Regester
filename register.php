<?php
$conn = new mysqli("localhost","root","","register");
if($conn->connect_error) {
    die('connection failed:'.$conn->connect_error);
}

if(isset($_POST['submit'])) {
    $name=$_POST['name'];
    $email=$_POST['email'];
    $number=$_POST['number'];
    $pass=$_POST['password'];
    $dob=$_POST['dob'];

    $sql="INSERT INTO register (name, email, number, password, dob)
VALUES ('$name', '$email', '$number', '$pass', '$dob')";
if($conn->query($sql)) {
    echo "Registered Successfully";
}
else {
    echo "Error:".mysqli_error($conn);
}
}
?>
