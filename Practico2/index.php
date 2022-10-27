<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>ChilamBalon</title>
</head>
<body>
<!--Ejercicio 2 (valor 5 puntos): Fueron contratados por ChilamBalon (marca registrada) para
generar un quiosco de pedidos en tabletas afuera del establecimiento, el pedido será
pagado al momento de la entrega, por lo que no es necesario procesar el pago. Todos los
menús deberán de tener un opc. El número de pedidos debe de ser dado por quiosco.-->

<h1>MENU ChilamBalon</h1>
<img src="img/1.jpg" alt="1" width="200" height="200">
<img src="img/2.jpg" alt="2" width="200" height="200">
<img src="img/3.jpg" alt="3" width="200" height="200">

<form action="respuesta.php" method="post">
    <input type="radio" name="pedido" value="1">1. Tablet<br>
    <input type="radio" name="pedido" value="2">2. iPad<br>
    <input type="radio" name="pedido" value="3">3. Samsung Tab<br> <br>
    
    <input type="text" name="nombre" placeholder="Nombre completo"> <br>

    <p>Costo total: $<span id="opc"></span></p>
    <script>
        var opc = document.getElementsByName("pedido");
        var opcTotal = document.getElementById("opc");
        
        function mostraropc() {
            if (opc[0].checked) {
                opcTotal.innerHTML = "1000";
            }
            else if (opc[1].checked) {
                opcTotal.innerHTML = "2000";
            }
            else if (opc[2].checked) {
                opcTotal.innerHTML = "3000";
            }
            else {
                opcTotal.innerHTML = "0";
            }
        }
        opc[0].addEventListener("click", mostraropc);
        opc[1].addEventListener("click", mostraropc);
        opc[2].addEventListener("click", mostraropc);
    </script>

    <input type="submit" value="Enviar">

</form>






<!-- Boton de enviar -->

<!-- Al enviar el pedido, en caso de ser registrado correctamente, lo llevas a una página que dice pedido registrado y toma el nombre escrito en el formulario y añade un boton con la opcion de volver a comprar -->
<!-- En caso de no ser registrado correcctamente, informar en una nueva pantalla PHp -->



</body>
</html>