<!DOCTYPE html>
<html lang="es">
<head>
    <style>
        table, th, td {
            border: 1px solid black;
        }
    </style>
    <title>CLIENTES REGISTRADOS</title>
</head>
<body>
<?php
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
echo "<h1>CLIENTES REGISTRADOS</h1>";
if ($result->num_rows > 0) {
    echo "<table><tr><th>ID USUARIO</th><th>Nombre del Usuario</th><th>Apellido del Usuario</th><th>Tipo de Membresía</th><th>Monto depositado</th></tr>";
    while ($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["id_gimnasio"] . "</td><td>" . $row["nombre"] . "</td><td>" . $row["apellido"] . "</td><td>" . $row["tipo_membresia"] . "</td><td>" . $row["monto_depositado"] . "</td></tr>";
    }
    echo "</table>";

} else {
    echo "0 results";
}

$conn->close();
?>
<br><br>
<!--CREATE A BUTTON TO DELETE ALL CLIENTS FROM TABLE-->
<form action="delete.php" method="post">
    <input type="submit" name="delete" value="Eliminar todos los clientes">
</form>
</body>
</html>