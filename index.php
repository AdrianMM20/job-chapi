<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <script>
        function agregarValor() {
            var valor = document.getElementById("valor").value;
            var output = document.getElementById("output");
            output.value = "Valor agregado: " + valor;
        }
    </script>
</head>
<body>
    <h1>Hello World</h1>
    <form method="post" action="">
    <input type="text" id="valor" placeholder="Escribe un valor">
    <button type="button" onclick="agregarValor()">Agregar Valor</button>
</form>

<input type="text" id="output">
</body>
</html>