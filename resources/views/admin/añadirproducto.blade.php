<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite(['resources/css/registro.css'])
  <title>Registrar</title>
</head>
<body>
<div class="container">
        <div class="logo">
            <img src="{{asset('../storage/logonamnam.png')}}" alt="Logo">
        </div>
        <form action="{{ route('validar-registro-productos') }}" method="POST">
            @csrf
            <div id="formulario">
            <input type="text" name="nombre" placeholder="Nombre" required>
            <input type="text" name="descripcion" placeholder="Descripción" required>
            <input type="decimal" name="precio" placeholder="Precio" required>
            <input type="text" name="imagen" placeholder="Imagen" >
            <input type="text" name="categoria" placeholder="Categoria" required>
            <input type="number" name="exitencias" placeholder="Existencias" required>
            </div>
            <div class="button-container">
                <a href="{{route('admin')}}" id="enlacemenu">
                <button name="button" type="button" id="botonmenu">
                    <p id="textoboton">Cancelar</p>
                </button>
                </a>
                <a id="enlacemenu">
                 <button name="button"  id="botonmenu">
                    <p id="textoeditar">Añadir</p>
                </button>   
                </a>
            
            </div>
        </form>
    </div>
</body>
</html>