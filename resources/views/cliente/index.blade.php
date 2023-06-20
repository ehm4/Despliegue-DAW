<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite(['resources/css/index.css'])
  <title>Ñam Ñam Rute</title>
</head>
<body>
  
  <div id="logo">
  <a href="https://www.facebook.com/people/%C3%91am-%C3%91am-Rute/100055149884082/">
    <img  id="rrss" src="{{asset('../storage/logofacebook.png')}}" alt="Facebook">
  </a>
  <img  id="imglogo" src="{{asset('../storage/logonamnam.png')}}" alt="Logo Ñam Ñam Rute">
  <a href="https://www.instagram.com/namnamrute/">
    <img id="rrss"src="{{asset('../storage/logoinstagram.png')}}" alt="Instagram">
  </a>
  </div>
  <div id="menu">
    <a href="{{route('cartacliente')}}" id="enlacemenu">
      <button name="button" id="botonmenu">
        <p id="textoboton">Carta</p>
      </button>
    </a>
    <a href="{{route('historiacliente')}}" id="enlacemenu">
      <button name="button" id="botonmenu">
        <p id="textoboton">Historia</p>
      </button>
    </a>
    <a href="{{route('pedido')}}" id="enlacemenu">
      <button name="button" id="botonmenu">
        <p id="textoboton">Pedidos</p>
      </button>
    </a>
    <a href="{{route('galeriacliente')}}" id="enlacemenu">
      <button name="button" id="botonmenu">
        <p id="textoboton">Galería</p>
      </button>
    </a>
    <a href="{{route('contactocliente')}}" id="enlacemenu">
      <button name="button" id="botonmenu">
        <p id="textoboton">Contacto</p>
      </button>
    </a>
  </div>
  <div id="footer">
    <div id="menu">
      <a href="{{route('logout')}}" id="enlacemenu">
      <button name="button" type="button" id="botonmenu">
        <p id="textoboton">Logout</p>
      </button>
      </a>
    </div>
      
    <p>Ñam Ñam Rute ©</p>
    <p>Todos los derechos reservados.</p>
  </div>
</body>
</html>