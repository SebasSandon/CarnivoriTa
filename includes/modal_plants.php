<?php 
  $consulta_plantas = $conn->prepare("SELECT id_producto, nombre_planta FROM producto");
  $consulta_plantas->execute();
?>
    <!-- Modal Plants -->
    <div class="modal fade" id="ModalPlants" tabindex="-1" role="dialog" aria-labelledby="ModalPlantsTitle" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="table-responsive">
            <table class="table table-striped">
              <thead class="thead-dark">
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Lista de Plantas Carnívoras</th>
                </tr>
              </thead>
              <tbody>
              <?php while($plantas = $consulta_plantas->fetch()) : ?>
                <tr>
                  <th scope="row"><?php echo $plantas['id_producto']?></th>
                  <td><?php echo $plantas['nombre_planta']?></td>
                </tr>
              <?php endwhile; ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>