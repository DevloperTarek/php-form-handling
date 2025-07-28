<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registratoin Form</title>
</head>
<body>
    <form action="access.php" method="post">
        <div class="container">
            <h2 class="form-title">Registration From Submitting Issue</h2>
            <br>
            <br>
            <br>
            <div class="form-input">
                <label for="name">Name *</label>
                <input type="text" name="name" id="name" require placeholder="Enter Your Full Name" />
            </div>
            <div class="form-input">
                <label for="email">Email *</label>
                <input type="email" name="email" id="email" require placeholder="Enter Your Email" />
            </div>
            <div class="form-input">
                <label for="password">Password *</label>
                <input type="password" name="password" id="password" require placeholder="Enter Password" />
            </div>
            <input type="submit" value="send" />
        </div>
    </form>

    <?php 
        $host = "localhost";
        $username = "root";
        $password = "";
        $database = "registrationdb";

        // Database Connection
        $conn = new mysqli($host,$username,$password,$database);
        // Connection Checking
        if($conn->connect_error){
            die("Connection Failed" . $conn->connect_error);
        }else{
            echo "Database Connection Successfully";
        }
    ?>
</body>
</html>