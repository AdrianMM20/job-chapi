<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" type="text/css" href="css/style.css">
  
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="js/button.js"></script>

</head>
<body>
  <h1>REGISTRO</h1>

    <form method="post" autocomplete="off">
      <div class="formulario">
        <input type="text" id="nombre" placeholder="Nombre">
        <input type="text" id="apellido" placeholder="Apellido">
      </div>
      <div class="formulario">
        <input type="text" class="email" id="correo" placeholder="Email">
      </div>
      <div class="formulario">
        <input type="date" id="cumple">
        <select name="opcion" id="opcion">
          <option value="1">Empleado</option>
          <option value="2">Empresa</option>
        </select>
      </div>
      <button class="register" type="button" onclick="calcularEdad()">Registar</button>
    </form>

  <input type="date" id="fechaCumpleanos">
  <button onclick="calcularEdad()">Calcular Edad</button>
  <p id="resultadoEdad">tu edad</p>
    
  <form method="post" action="" >
    <input type="text" id="valor" placeholder="Escribe un valor">
    <button type="button" onclick="agregarValor()">Agregar Valor</button>
    <input type="text" id="output">
  </form>

  
</body>
</html>