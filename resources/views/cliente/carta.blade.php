
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite(['resources/css/carta.css'])
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  @vite(['resources/js/main.js'])
  <title>Carta</title>
</head>
<body onload="carta()">
<div id="nav">
    <div id="logo">
    <img  id="imglogo" src="{{asset('../storage/logonamnam.png')}}" alt="Logo Ñam Ñam Rute">
    </div>
    <div id="rrss">
    <a href="https://www.facebook.com/people/%C3%91am-%C3%91am-Rute/100055149884082/">
    <img  id="facebook" src="{{asset('../storage/logofacebook.png')}}" alt="Facebook">
    </a>
    <a href="https://www.instagram.com/namnamrute/">
    <img id="instagram"src="{{asset('../storage/logoinstagram.png')}}" alt="Instagram">
    </a>
    </div>
  </div>
<div id="pintar"></div>
<a href="{{route('clienteindex')}}" id="enlacemenu">
    <button name="button" type="button" id="botonmenu">
      <p id="textoboton">Volver</p>
    </button>
</a>
</body>
</html>