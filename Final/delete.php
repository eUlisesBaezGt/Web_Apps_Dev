<?php
// DELETE ALL CLIENTS FROM TABLE

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "gimnasio";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM gimnasio.gimnasio";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $sql = "DELETE FROM gimnasio.gimnasio";
    $result = $conn->query($sql);
    echo '<script type="text/javascript">
    alert("Todos los clientes han sido eliminados");
    history.back();
    </script>';
} else {
    echo '<script type="text/javascript">
    alert("NO hay clientes registrados");
    history.back();
    </script>';
}