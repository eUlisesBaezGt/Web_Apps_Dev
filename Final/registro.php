<?php
//RETRIEVE DATA FROM FORM AND STORE IN VARIABLES
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$tipo_membresia = $_POST['membresia'];
$monto_depositado = $_POST['monto'];

//CONNECT TO DATABASE
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

// IF EMPTY DATA IS SUBMITTED, RETURN TO FORM
if (empty($nombre) || empty($apellido) || empty($tipo_membresia) || empty($monto_depositado)) {
    // ALERT WITH JAVA SCRIPT
    echo '<script type="text/javascript">
    alert("Alguno de los campos esta vacio");
    history.back();
    </script>';
    exit();
}

// IF DATA IS SUBMITTED, INSERT INTO DATABASE
$sql = "INSERT INTO gimnasio (nombre, apellido, tipo_membresia, monto_depositado)
VALUES ('$nombre', '$apellido', '$tipo_membresia', '$monto_depositado')";

if ($conn->query($sql) === TRUE) {
    echo '<script type="text/javascript">
    alert("Registro exitoso");
    history.back();
    </script>';
} else {
    echo '<script type="text/javascript">
    alert("Error al registrar");
    history.back();
    </script>';
}
$conn->close();
?>


