//////////////////////////////// contador ////////////////////////////////

//////////////////////////////// contador ////////////////////////////////

function incrementar(id) {
    var contadorElemento = document.getElementById(id);
    var contador = parseInt(contadorElemento.value);
    if (contador < 5) {
      contador++;
    }
    contadorElemento.value = contador;
  }

  function decrementar(id) {
    var contadorElemento = document.getElementById(id);
    var contador = parseInt(contadorElemento.value);
    if (contador > 1) {
      contador--;
    }
    contadorElemento.value = contador;
  }
