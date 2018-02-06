<?php 
  require_once 'core/init.php';
  include 'includes/head.php';
  include 'includes/navigation.php';
  include 'includes/modal_cart.php';
  include 'includes/modal_plants.php';

  $consulta_producto = $conn->prepare("SELECT * FROM producto WHERE precio > 0");
  $consulta_producto->execute();
?>

    <br/>
    <br/>
    <!-- Page Content -->
    <div class="container">

      <div class="row">

        <div class="col-lg-3">
          <div class="my-4"><img src="images/logo/logo_carnivorita2.png" width="250" height="300"></div>
          <div class="list-group">
            <a href="#" class="list-group-item" data-toggle="modal" data-target="#ModalPlants">Plantas</a>
            <a href="#" class="list-group-item">Cuidados</a>
            <a href="#" class="list-group-item">Otros Productos</a>
          </div>
          
        </div>
        <!-- /.col-lg-3 -->

        <div class="col-lg-9">

          <div id="carouselSlides" class="carousel slide my-4" data-ride="carousel">
            <ol class="carousel-indicators">
              <li data-target="#carouselSlides" data-slide-to="0" class="active"></li>
              <li data-target="#carouselSlides" data-slide-to="1"></li>
              <li data-target="#carouselSlides" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner" role="listbox">
              <div class="carousel-item active">
                <img class="d-block img-fluid" src="images/slides/slide1.png" alt="First slide">
              </div>
              <div class="carousel-item">
                <img class="d-block img-fluid" src="images/slides/slide2.png" alt="Second slide">
              </div>
              <div class="carousel-item">
                <img class="d-block img-fluid" src="images/slides/slide3.png" alt="Third slide">
              </div>
            </div>
            <a class="carousel-control-prev" href="#carouselSlides" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselSlides" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>

          <div class="row">
          <?php while($producto = $consulta_producto->fetch()) : ?>
            <div class="col-lg-4 col-md-6 mb-4">
              <div class="card h-100">
                <a href="#"><img class="card-img-top" src="images/products/planta1.jpg" alt=""></a>
                <div class="card-body">
                  <h4 class="card-title">
                    <a href="#"><?php echo $producto['nombre_planta']?></a>
                  </h4>
                  <h5>
                    <?php 
                    if($producto['precio'] != 0){
                      echo '$'.$producto['precio'];
                      }else{
                        echo 'A consultar';
                        }?>
                   </h5>
                  <p class="card-text"><?php echo $producto['descripcion']?></p>
                </div>
                <button type="button" class="btn btn-outline-primary" onclick="agregar_carrito(<?= $producto['id_producto'];?>)">Agregar al Carrito</button>
              </div>
            </div>
          <?php endwhile; ?>
          </div>
          <!-- /.row -->

        </div>
        <!-- /.col-lg-9 -->

      </div>
      <!-- /.row -->

    </div>
    <!-- /.container -->

<?php 
  include 'includes/footer.php';
?>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  </body>

</html>
