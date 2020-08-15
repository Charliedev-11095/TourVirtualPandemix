<?php
include ("conexion.php");
 $usuarios="select * from virtual_tour.museos_y_sitios";
?>

<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Museos estatales</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom fonts for this template -->
  <link href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/business-casual.min.css" rel="stylesheet">

</head>

<body>

  <h1 class="site-heading text-center text-white d-none d-lg-block">
    <span class="site-heading-upper text-primary mb-3">Museos de Morelia</span>
    <span class="site-heading-lower">Obras a través de el tiempo</span>
  </h1>

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark py-lg-4" id="mainNav">
    <div class="container">
      <a class="navbar-brand text-uppercase text-expanded font-weight-bold d-lg-none" href="#">MUSEOS DEL ESTADO </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav mx-auto">
          <li class="nav-item active px-lg-4">
            <a class="nav-link text-uppercase text-expanded" href="1.index.html">INICIO
              <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item px-lg-4">
            <a class="nav-link text-uppercase text-expanded" href="2.museos.html">MUSEOS</a>
          </li>
          <li class="nav-item px-lg-4">
            <a class="nav-link text-uppercase text-expanded" href="3.leyendas.html">LEYENDAS</a>
          </li>
          <li class="nav-item px-lg-4">
            <a class="nav-link text-uppercase text-expanded" href="4.contacto.html">CONTACTO</a>
          </li>
           <li class="nav-item px-lg-4">
            <a class="nav-link text-uppercase text-expanded" href="1.index.html">REGISTRATE</a>
          </li>
           <li class="nav-item px-lg-4">
            <a class="nav-link text-uppercase text-expanded" href="1.index.html">INICIA SESION</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

<?php $resultado= mysqli_query($conexion,$usuarios) or die(mysqli_error($conexion));

 while($row = mysqli_fetch_assoc($resultado))  {?>
  <section class="page-section">
    <div class="container">
      <div class="product-item">
        <div class="product-item-title d-flex">
          <div class="bg-faded p-5 d-flex ml-auto rounded">
            <h2 class="section-heading mb-0">
            
            <span class="section-heading-lower">
              <?php echo $row["nombre"];?>
              </span> 
            
            </h2>
          </div>
        </div>
         <a href="6.obras.html">
        <img class="product-item-img mx-auto d-flex rounded img-fluid mb-3 mb-lg-0" src='<?php echo $row["enlace_img"];?>'alt=""></a>
        <div class="product-item-description d-flex mr-auto">
          <div class="bg-faded p-5 rounded">
           <p class="table__item" class="mb-0">

              <?php echo $row["direccion"];?><br>
              <?php echo $row["horario_entrada"]." A ".$row["horario_salida"];?><br> 
              
              <?php echo $row["contacto"];?><br>
              <?php echo $row["descripcion"];?><br>
              
              
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="page-section">
    <div class="container">
      <div class="product-item">
        <div class="product-item-title d-flex">
          
            <h2 class="section-heading mb-0">
            <span class="section-heading-lower"> </span>
            </h2>
          </div>
        </div>
        <a href="6.obras.html">
        </a>
            <p class="mb-0"><strong><br>


          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="page-section">
    <div class="container">
      
        <div class="product-item-title d-flex">
          

              <span class="section-heading-lower"> </span>
            </h2>
          
        </div>
        <a href="6.obras.html">
      </a>
        
            <p class="mb-0">
            <strong>
</p>
          </div>
        </div>
      </div>
    </div>
  </section>

<?php } ?> 

  <footer class="footer text-faded text-center py-5">
    <div class="container">
      <h4><p class="m-0 small">&copy; Pandemix derechos reservados 2020</h4> </br><h2><h4>información:</h4></p>
      <strong><h5>Horario de atención:</h5></strong>Lunes a viernes: 9:00 a 14:00 y 16:00 a 18:00
Sábado 9:00 a 14:00
</br>
Facebook: Casi todo el tiempo


     </br><a href="4.contacto.html">información de contacto </a>
      
      </br><h4>síguenos:</h4></p>
      <a href="http://www.facebook.com"><img src="img/fb.jpg" width="70" height="70"></a>
      
      <a href="http://www.youtube.com"><img src="img/yt.jpg" width="70" height="70"></a>
      
      <a href="http://www.instagram.com"><img src="img/insta.jpg" width="70" height="70"></a>
      
      <a href="http://www.twitter.com"><img src="img/tw.jpg" width="70" height="70"></a>
      
    </div>
  </footer>


  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>