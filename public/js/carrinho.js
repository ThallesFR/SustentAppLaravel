//////////////////////////////// contador ////////////////////////////////
var elemento = document.getElementById("cetaEsquerda");
var elemento = document.getElementById("cetaDireita");
function incrementar() {
    var contadorElemento = document.getElementById("contador");
    var contador = parseInt(contadorElemento.value);
    if (contador < 10) {
      contador++;
    }
    contadorElemento.value = contador;
  }

  function decrementar() {
    var contadorElemento = document.getElementById("contador");
    var contador = parseInt(contadorElemento.value);
    if (contador > 0) {
      contador--;
    }
    contadorElemento.value = contador;
  }
