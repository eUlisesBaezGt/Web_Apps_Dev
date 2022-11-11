function updatecost() {
    const opc = document.getElementsByName("pedido");
    const opcTotal = document.getElementById("opc");

    function mostraropc() {
        if (opc[0].checked) {
            opcTotal.innerHTML = "1000";
        } else if (opc[1].checked) {
            opcTotal.innerHTML = "2000";
        } else if (opc[2].checked) {
            opcTotal.innerHTML = "3000";
        } else {
            opcTotal.innerHTML = "0";
        }
    }

    opc[0].addEventListener("click", mostraropc);
    opc[1].addEventListener("click", mostraropc);
    opc[2].addEventListener("click", mostraropc);
}
