function validarFormulario() {
    var numero1 = document.querySelector("input[name='numero1']").value;
    var numero2 = document.querySelector("input[name='numero2']").value;
  
    if (numero1 === "" || numero2 === "") {
      alert("Debe ingresar ambos números.");
      return;
    }

    // Realizar la operación
  switch (operacion) {
    case "suma":
      resultado = numero1 + numero2;
      break;
    case "resta":
      resultado = numero1 - numero2;
      break;
    case "multiplicacion":
      resultado = numero1 * numero2;
      break;
    case "division":
      resultado = numero1 / numero2;
      break;
  }
}
  