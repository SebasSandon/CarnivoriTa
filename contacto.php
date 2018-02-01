<?php
  
  $name = '';
  $email = '';
  $body = '';

  if (isset($_POST['submit'])) {
    require 'phpmailer/src/Exception.php';
    require 'phpmailer/src/PHPMailer.php';

    function sendEmail($to, $from, $fromName, $body){
      $mail = new PHPMailer(true);
      $mail->setFrom($from, $fromName);
      $mail->addAddress($to);
      $mail->Subject = 'Consulta a CarnivoriTa';
      $mail->Body = $body;
      $mail->isHTML(false);

      return $mail->send();
    }
    
    $name = $_POST['name'];
    $email = $_POST['email'];
    $body = $_POST['body'];

    if(sendEmail('sebas.sandon@gmail.com',$email,$name,$body)){
        echo 'Consulta Enviada';
        //echo '<script type="text/javascript">alert("Consulta Enviada"); </script>';
    }else{
      echo 'Consulta No Enviada';
      //echo '<script type="text/javascript">alert("Error al Enviar"); </script>';
    }

  }
?>

<!DOCTYPE html>
<html lang="es">
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

	<title>CarnivoriTa - Contacto</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/shop-homepage.css" rel="stylesheet">

</head>

<body style="background-color:#CEF6CE;">

<!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-success fixed-top">
      <div class="container">
        <a class="navbar-brand" href="#"><img src="images/logo/icono.png">CarnivoriTa</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item mr-2">
              <a href="#" class="badge badge-success" data-toggle="modal" data-target="#exampleModalCenter"><img src="images/logo/carro.png"><span class="badge badge-light">4</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="index.html">Inicio</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Nosotros</a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="pronto.html">Contacto</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Modal -->
    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLongTitle">Carrito de compra</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            hOLA
          </div>
          <div class="modal-footer">
            <a class="btn btn-primary" href="factura.html" role="button">Ir a caja</a>
          </div>
        </div>
      </div>
    </div>
    
    <br/>
    <br/>
	<!--Page Content-->
	<section class="container">
	<div class="jumbotron jumbotron-fluid border border-success rounded bg-light text-dark">
	  <div class="container">
	    <h1 class="display-4">Contacto</h1>
	    <p class="lead">WhatsApp: +56977777777</p>
	    <p class="lead">Facebook: <a href="https://www.facebook.com/jorge.g.guerra.5">Jorge Albiña</a></p>
	    <p class="lead">Si lo prefiere puede enviar su consulta con su correo más abajo.</p>
	  </div>
	</div>
	</section>

	<!--Formulario-->
	<section class="container mt-4 mb-4 pt-4 pb-4 border border-success">
	<form>
    <div class="form-group">
      <label for="FormControlInput1">Su nombre</label>
      <input type="text" class="form-control" name="name" id="FormControlInput1" placeholder="Juan Perez" required>
    </div>
	  <div class="form-group">
	    <label for="FormControlInput2">Dirección de correo</label>
	    <input type="email" class="form-control" name="email" id="FormControlInput2" placeholder="micorreo@ejemplo.cl" required>
	  </div>
	  <div class="form-group">
	    <label for="FormControlTextarea">Escriba su consulta</label>
	    <textarea class="form-control" name="body" id="FormControlTextarea" rows="5"></textarea>
	  </div>
	  <input type="submit" name="submit" value="Enviar Consulta" class="btn btn-outline-info">
	</form>
	</section>

    <!-- Footer -->
    <footer class="py-5 bg-dark">
      <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy; Carnivorita 2018</p>
      </div>
      <!-- /.container -->
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>
</html>