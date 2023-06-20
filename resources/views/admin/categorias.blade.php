<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite(['resources/css/clientes.css'])
  @vite(['resources/js/main.js'])
  <title>Productos</title>
</head>
<body>
<div class="container">
<div class="logo">
            <img src="{{asset('../storage/logonamnam.png')}}" alt="Logo">
</div>
    <h1>Lista de Categorias</h1>

    <div id="pintar"></div>

    <a href="{{route('admin')}}" id="enlacemenu">
       <button name="button" type="button" id="botonmenu">
           <p id="textoboton">Menu</p>
      </button>
    </a>
    <a href="{{route('añadircategoria')}}" id="enlacemenu">
      <button name="button" type="button" id="botonmenu">
        <p id="textoboton">Añadir categoria</p>
      </button>
    </a>
  </div>
</body>
</html>