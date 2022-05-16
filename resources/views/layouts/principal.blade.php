<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="{{ asset('materialize/css/materialize.css') }}">

    <title>Document</title>
</head>
<body>
<nav>
    <div class="nav-wrapper cyan lighten-2">
      <a href="#" class="brand-logo">La tienda</a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
        <li><a href="sass.html">Productos</a></li>
        <li><a href="badges.html">Pedidos</a></li>
      </ul>
    </div>
  </nav>
  
<div class="container-fluid"> 
    @yield('contenido')
</div>
    
    <!-- Compiled and minified JavaScript -->
    <script src="{{ asset('materialize/js/materialize.js') }} "></script>
    <script> 
            document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('select');
    var instances = M.FormSelect.init(elems, []);
  });
    </script>
</body>
</html>