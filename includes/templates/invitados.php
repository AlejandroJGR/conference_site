<section class="seccion contenedor">
    <h2>Invitados</h2>
    <?php
      try {
        require_once('includes/funciones/bd_conexion.php');
        $sql = "SELECT * FROM `invitados` ";
        $resultado = $conn->query($sql);
      } catch (\Exception $e){
          echo $e ->getMessage();
      }
    ?>
      <ul class="lista-invitados clearfix">
      <?php
        while($invitados = $resultado->fetch_assoc() ){ ?>
          <li>
            <div class="invitado">
              <a class="invitado-info" href="#invitado<?php echo $invitados['id_invitado']; ?> ">
                <img src="img/<?php echo $invitados['url_imagen']?>" alt="imagen invitado" />
                <p>
                  <?php echo $invitados['nombre_invitado'] . " " . $invitados['apellido_invitado']; ?>
                </p>
              </a>
            </div>
          </li>
          <div class= "ocultar">
            <div class="invitado-info" id="invitado<?php echo $invitados['id_invitado']; ?>" >
              <h2>
                <?php echo $invitados['nombre_invitado'] . " " . $invitados['apellido_invitado']; ?>
              </h2>
              <img src="img/<?php echo $invitados['url_imagen']?>" alt="imagen invitado" />
              <p>
                <?php echo $invitados['descripcion']; ?>
              </p>
            </div> 
          </div>
      <?php } //fin del while ?>  
      </ul>
    <?php
      $conn->close();
    ?>
  </section>
  <!--Fin de la seccion contenedora-->