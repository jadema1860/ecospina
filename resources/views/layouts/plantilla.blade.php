<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Ecospina E.S.P.</title>
        <meta charset="UTF-8">
        <link rel='icon' href='./images/agua.ico' type='image/x-icon' sizes="16x16" />
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/mystyle.css" rel="stylesheet">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    </head>
    <body>
    <header>
     <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <a class="navbar-brand" href="#">Ecospina E.S.P.</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="{{ route('inicio')}}">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('nosotros')}}">Nosotros</a>
            </li>
          
            <li class="nav-item">
                <a class="nav-link" href="{{ route('servicios')}}">Servicios</a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="{{ route('contactos')}}">Contactos</a>
            </li>
            </ul>
        </div>
        <span class="pie">
          EMPRESA DE ADMINISTRACION PÚBLICA COOPERATIVA DE
SERVICIOS PÚBLICOS DOMICILIARIOS
        </span>
      
        </nav>
    
    </header>
        
    @yield('carrusel')
    <footer>
  <div class="container mt-3">
    <div class="row">
        <div class="col-xs-12 col-md-6 text-left mt-3">
            <h5 class="pie">Contacto:</h5>
            <h5 class="pie">
            <p>Dirección: Calle 3ª Sector Nuevo Horizonte, Municipio de Ospina – Nariño</p>
            <p>Celular: 315 508 22 72</p>
            <p>Correo: ecospina@hotmail.com</p>
            </h5>
        </div>

        <div class="col-xs-12 col-md-6 text-right mt-3">
            <div class="col-md-12 text-right">
                  <p class="small">JdS Software @2016.
                  <br>313 793 14 68
                  <br> Todos los derechos reservados.                  
                  </p>
            </div>
        </div>
    </div>
    
    </div>
  </div>  
</div>
</footer>
    </body>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</html>



