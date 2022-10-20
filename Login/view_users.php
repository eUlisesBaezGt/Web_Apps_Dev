<!DOCTYPE html>
<html>
<head>
    <style>
        table, th, td {
            border: 1px solid black;
        }
    </style>
    <title>My Website</title>
</head>
<body>

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

/*$sql = "INSERT INTO login.users (NOMBRE, APELLIDO, EMAIL, PASS, PASSWORD_CHECK)
VALUES ('Ana', 'Gonzales', '0248272@up.edu.mx', '123456', '123456')";*/

$sql = "SELECT NOMBRE, APELLIDO, EMAIL, PASS, PASSWORD_CHECK FROM login.users";
$result = $conn->query($sql);

/*if ($result->num_rows > 0) {
    // output data of each row
    while ($row = $result->fetch_assoc()) {
        echo "NOMBRE: " . $row["NOMBRE"] . " - APELLIDO: " . $row["APELLIDO"] . " - EMAIL: " . $row["EMAIL"] . " 
        PASS: " . $row["PASS"] . " - PASSWORD_CHECK: " . $row["PASSWORD_CHECK"] . "\n";
    }
} else {
    echo "0 results";
}*/

/*if ($conn->query($sql) === TRUE) {
    echo "new record created successfully";
} else {
    echo "Error: " . $sql . " < br>" . $conn->error;
}*/

if ($result->num_rows > 0) {
    echo "<table><tr><th>NOMBRE</th><th>CORREO</th></tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>".$row["NOMBRE"]."</td><td>".$row["EMAIL"]."</td></tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}

$conn->close();
?>
</body>
</html>