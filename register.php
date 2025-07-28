<?php 
    $host = "localhost";
    $username = "root";
    $password = "";
    $database = "registrationdb";

// Connect Database

   $conn = new mysqli($host,$username,$password,$database);

   $connSuff = new mysqli($host,$username,$password,$database);

   if($connSuff ->connect_error){
        die('Connection Failed') . $connSuff -> connect_error;
   }else{
        echo "Connection Sucessfully";
   }

//    Check Connection

if($conn->connect_error){
    die('Connection Failed' . $conn->connect_error);
}

// Get User Data from index.php file

$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];

// Password Hashing
$password_hashing = password_hash($password, PASSWORD_DEFAULT);

// Insert data to database

$sql = "insert into registrationdb(name,email,password) values (?,?,?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param('sass',$name,$email,$password_hashing);
if($stmt->execute()){
    echo "Registration Successfully Send";
}else{
    echo "Registration Fail to Send" . $conn->error;
}

$stmt->close();
$conn->close();
?>