<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "login";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
// RECEIVE DATA FROM FORM
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$email = $_POST['email'];
$pass = $_POST['pass'];
$password_check = $_POST['$password_check'];

// CHECK IF EMAIL ALREADY EXISTS
$sql = "SELECT * FROM login.users WHERE email = '$email'";
$result = $conn->query($sql);

// IF EMAIL ALREADY EXISTS
if ($result->num_rows > 0) {
    echo "Email already exists <br/>";
} else {
    // IF EMAIL DOES NOT EXIST
    // CHECK IF PASSWORDS MATCH
    if ($pass != $password_check) {
        echo "Passwords do not match <br/>";
    } else {
        // IF PASSWORDS MATCH
        // CHECK At least 8 characters, min 1 Uppercase
        if (!preg_match('/^(?=.*[A-Z])(?=.{8,})/', $pass)) {
            echo "Password must be at least 8 characters & min 1 Uppercase <br/>";
        } else {
            // IF PASSWORD IS VALID
            // INSERT DATA INTO DATABASE
            $sql = "INSERT INTO login.users (NOMBRE, APELLIDO, EMAIL, PASS, PASSWORD_CHECK)
        VALUES ('$nombre', '$apellido', '$email', '$pass', '$password_check')";
            if ($conn->query($sql) === TRUE) {
                echo "New record created successfully";
            } else {
                echo "Error";
            }
        }


    }
}
$conn->close();


