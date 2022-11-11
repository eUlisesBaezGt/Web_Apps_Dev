<!DOCTYPE html>
<html lang="es">
<head>
    <style>
        table, th, td {
            border: 1px solid black;
        }
    </style>
    <title>PEDIDOS</title>
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

$sql = "SELECT * FROM pedidos";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table><tr><th>Numero de Opcion</th><th>Cantidad de Pedidos </th><th>Porcentaje</th></tr>";

    $sql2 = "SELECT COUNT(*) AS total FROM pedidos";
    $result2 = $conn->query($sql2);
    $row2 = $result2->fetch_assoc();
    $total = $row2["total"];
    $sql3 = "SELECT numopc, COUNT(*) AS total FROM pedidos GROUP BY numopc";
    $result3 = $conn->query($sql3);
    while ($row3 = $result3->fetch_assoc()) {
        $porcentaje = ($row3["total"] / $total) * 100;
        echo "<tr><td>" . $row3["numopc"] . "</td><td>" . $row3["total"] . "</td><td>" . $porcentaje . "%</td></tr>";
    }

    echo "</table>";
    $sql4 = "SELECT numopc, COUNT(*) AS total FROM pedidos GROUP BY numopc ORDER BY total DESC LIMIT 1";
    $result4 = $conn->query($sql4);
    $row4 = $result4->fetch_assoc();
    echo "<h1>El menu mas pedido es el " . $row4["numopc"] . "</h1>";

    $sql5 = "SELECT SUM(numopc) AS total FROM pedidos";
    $result5 = $conn->query($sql5);
    $row5 = $result5->fetch_assoc();
    echo "<h1>El total de compras es de " . $total . "</h1>";

} else {
    echo "0 results";
}

$conn->close();
?>
</body>
</html>