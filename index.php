<?php include('includes/db.php') ?>
<?php include('includes/header.php') ?>

<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top" style="background-image:url(jpg/verde.jpg); opacity:0.9">
  <a class="navbar-brand" href="#" id="blanco">Costacar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#" id="blanco">Inicio <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#" id="blanco">Caracteristicas</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#" id="blanco">Precios</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#" id="blanco">Contactanos</a>
      </li>
    </ul>
    <?php
    if (isset($_SESSION['logwell'])) {
    ?>
      <!--<li class="nav-item navbar-nav">
        <a class="" id="blanco">Bienvenido <?php echo $_SESSION['loguser'] ?></a>
      </li>
    -->
      <li class="nav-item navbar-nav">
        <a class="nav-link" href="user_logout.php" id="blanco">Cerrar sesión</a>
      </li>
    <?php
    } else {
    ?>
      <div class="nav-item">
        <a class="btn " type="button" id="blanco" data-toggle="modal" data-target="#loginmodal">Ingresar</a>
      </div>
      <div class="nav-item">
        <a class="btn " type="button" id="blanco" data-toggle="modal" data-target="#registromodal">Registrarse</a>
      </div>
    <?php
    }
    ?>
  </div>
</nav>
<div class="modal fade" id="registromodal" tabindex="-1" role="dialog" aria-labelledby="registromod" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header" style="background-image:url(jpg/verde.jpg)">
        <h5 class="modal-title" id="blanco">Registrarse</h5>
        <button type="button" class="close" id="blanco" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body" style="background-image:url(png/fondo.png)">
        <form action="user_reg.php" method="POST">
          <div class="form-group">
            <label for="usuario">Nombre de usuario</label>
            <input type="text" class="form-control" name="usuario" placeholder="Usuario">
          </div>
          <div class="form-group">
            <label for="pass">Contraseña</label>
            <input type="password" class="form-control" name="pass" placeholder="Contraseña">
          </div>
          <div class="form-group">
            <label for="nombres">Nombres</label>
            <input type="text" class="form-control" name="nombres" placeholder="Nombres">
          </div>
          <div class="form-group">
            <label for="apellidos">Apellidos</label>
            <input type="text" class="form-control" name="apellidos" placeholder="Apellidos">
          </div>
          <div class="form-group">
            <label for="correo">Correo electronico</label>
            <input type="email" class="form-control" name="correo" placeholder="ejemplo@ejemplo.com">
          </div>
          <input type="submit" class="btn btn-success btn-block" name="user_reg" value="Registrar">
        </form>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="loginmodal" tabindex="-1" role="dialog" aria-labelledby="loginmod" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header" style="background-image:url(jpg/verde.jpg)">
        <h5 class="modal-title" id="blanco">Ingresar</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body" style="background-image:url(png/fondo.png)">
        <form action="user_login.php" method="POST">
          <div class="form-group">
            <label for="usuario">Nombre de usuario</label>
            <input type="text" class="form-control" name="usuario" placeholder="Usuario">
          </div>
          <div class="form-group">
            <label for="pass">Contraseña</label>
            <input type="password" class="form-control" name="pass" placeholder="Contraseña">
          </div>
          <input type="submit" class="btn btn-success btn-block" name="login" value="Ingresar">
        </form>
      </div>
    </div>
  </div>
</div>
<div id="">
  <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
      <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active" style="max-height: 100vh">
        <img src="jpg/carro.jpg" class="d-block d-sm-block w-100 " alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h5>Renta los mejores autos</h5>
          <p>Autos en perfecto estado y en multiples modelos</p>
        </div>
      </div>
      <div class="carousel-item" style="max-height: 100vh">
        <img src="jpg/colombia.jpg" class="d-block w-100 " alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h5>Viaja por toda Colombia</h5>
          <p>Atrévete a explorar todo el territorio colombiano</p>
        </div>
      </div>
      <div class="carousel-item" style="max-height: 100vh">
        <img src="jpg/dinero.jpg" class="d-block w-100 " alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h5>Ahorra dinero</h5>
          <p>Nosotros cubrimos combustible, seguro, parqueo y mantenimiento</p>
        </div>
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>
<div style="background-image:url(jpg/verde.jpg);">
  <div style="margin-left:27vw; ">
    <img src="png/Costacar.png" style="width:46vw; " alt="">
  </div>
</div>
<div style="background-image: url(png/fondo.png);">
  <div class="container">
    <div class="row">
      <div class="col-md" id="texto">
        <p><br></p>
        <h4>Membresía</h4>
      </div>
      <div class="col-md" id="texto">
        <p><br></p>
        <h4>Rentar</h4>
      </div>
      <div class="col-md" id="texto">
        <p><br></p>
        <h4>Devolver</h4>
      </div>
    </div>
  </div>
  <p></p>
  <div class="container">
    <div class="row">
      <div class="col-sm" style="text-align: center">
        <img src="png/membresia.png">
      </div>
      <div class="col-sm" style="text-align: center">
        <img src="png/rentar.png">
      </div>
      <div class="col-sm" style="text-align: center">
        <img src="png/devolver.png">
      </div>
    </div>
  </div>
  <div class="container">
    <div class="row">
      <div class="col-md" id="texto">
        <h6>Hazte miembro y obtén nuestra membresía completamente gratis</h6>
      </div>
      <div class="col-md" id="texto">
        <h6>Renta ya los mejores autos del mercado cuando quieras y como quieras</h6>
      </div>
      <div class="col-md" id="texto">
        <h6>Devolver el auto nunca ha sido tan fácil, regresalo justo donde lo recogiste</h6>
      </div>
    </div>
  </div>
  <br>
  <div class="container">
    <div class="row">
      <div class="col-sm" style="text-align: center">
        <img src="png/bus.png">
      </div>
      <div class="col-sm" style="text-align: center">
        <img src="png/pago.png">
      </div>
      <div class="col-sm" style="text-align: center">
        <img src="png/ahorro.png">
      </div>
    </div>
  </div>
  <div class="container">
    <div class="row">
      <div class="col-md" id="texto">
        <h6>Deja atras las incomodidades del transporte público y únete a nuestro grupo de clientes satisfechos</h6>
      </div>
      <div class="col-md" id="texto">
        <h6>Estima tu viaje y realiza tu pago con los múltiples metodos que tenemos para ti</h6>
      </div>
      <div class="col-md" id="texto">
        <h6>Elimina los gastos de tener un auto propio, nosotros nos hacemos cargo del combustible y costos de parqueo</h6>
      </div>
    </div>
  </div>
  <p> <br><br></p>
  <div class="footer" style="width:100wh">
    <div style="background-image:url(jpg/verde.jpg)">
      <!-- Estas letras tienen que ir centradas y en la mitad de la imagen verdad, encima de la imagen verde, que no ocupen mucho espacio. Si te das cuenta debajo de la imagen verde hay un espacio en blanco que no se como quitar-->
      <p><br></p>
      <h6 id="blanco" style="text-align:center">Contactanos</h6>
      <h6 id="blanco" style="text-align:center">Daniel Donado - adavendano@uninorte.edu.co</h6>
      <h6 id="blanco" style="text-align:center">Daniel Valencia - dvalencia@uninorte.edu.co</h6>
      <h6 id="blanco" style="text-align:center">Santiago Zúñiga - sazuniga@uninorte.edu.co</h6>
      <h6 id="blanco" style="text-align:center">Copyright (c) 2020</h6>
      <p></p>
    </div>
  </div>
</div>

<?php include('includes/footer.php') ?>