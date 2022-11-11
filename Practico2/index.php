<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <title>ChilamBalon</title>
    <link rel="stylesheet" href="style.css">
    <script src="script.js"></script>
</head>

<body>
<!--Ejercicio 2 (valor 5 puntos): Fueron contratados por ChilamBalon (marca registrada) para
generar un quiosco de pedidos en tabletas afuera del establecimiento, el pedido será
pagado al momento de la entrega, por lo que no es necesario procesar el pago. Todos los
menús deberán de tener un opc. El número de pedidos debe de ser dado por quiosco.-->


<div class="container">
    <h1>MENU ChilamBalon</h1>
    <div class="row">
        <div class="col-sm">
            <img src="img/1.jpg" alt="1" width="70%" height="200">
        </div>
        <div class="col-sm">
            <img src="img/2.jpg" alt="2" width="70%" height="200">
        </div>
        <div class="col-sm">
            <img src="img/3.jpg" alt="3" width="70%" height="200">
        </div>
    </div>
</div>

<div class="container">
    <form action="respuesta.php" method="post">
        <p>Opcion deseada para el pedido: </p>
        <label>
            <input type="radio" name="pedido" value="1">
        </label>1) Tablet<br>
        <label>
            <input type="radio" name="pedido" value="2">
        </label>2) iPad<br>
        <label>
            <input type="radio" name="pedido" value="3">
        </label>3) Samsung Tab<br> <br>

        <label>
            <input type="text" name="nombre" placeholder="Nombre completo">
        </label> <br> <br>

        <p>Costo total: $<span id="opc"></span></p>

        <script>updatecost();</script>

        <input type="submit" value="Enviar">
</body>
</html>