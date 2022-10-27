<?php
// en caso de que no los datos hayan sido vacios, mostrar un mensaje de error
if (empty($_POST['pedido']) || empty($_POST['nombre'])) {
    echo "Error, tu pedido no pudo ser registrado";
} else {
    // En caso de que los datos hayan sido enviados, mostrar un mensaje de exito
    echo "Pedido registrado<br><br>";
    echo "Tu pedido ha sido registrado, " . $_POST['nombre'] . "!";
    echo "<br><br>Gracias por comprar con nosotros";
    echo "<br><br><a href='index.php'>Volver a comprar</a>";

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
    $pedido = $_POST['pedido'];
    $sql = "INSERT INTO pedidos (numopc)
    VALUES ('$pedido')";
    if ($conn->query($sql) === TRUE) {
        echo "";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    $conn->close();
}
