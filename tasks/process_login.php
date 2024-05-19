<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];
    $password = md5($_POST["password"]);

    $servername = "localhost";
    $db_username = "root";
    $db_password = "";
    $database = "login_system";

    $conn = new mysqli($servername, $db_username, $db_password, $database);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "SELECT * FROM admins WHERE email='$email'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            $email_db = $row['email'];
            $password_db = $row['password'];

            if ($email == $email_db && $password == $password_db) {
                $_SESSION['email'] = $email;
                header("Location: display.php");
                exit();
            } else {
                echo "Incorrect Password";
            }
        }
    } else {
        echo "User Not Found.";
    }

    $conn->close();
}

