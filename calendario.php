<?php include_once 'includes/templates/header.php'; ?>
  <section class="seccion contenedor">
    <h2>Calendario de Eventos</h2>
    <?php
      try {
        require_once('includes/funciones/bd_conexion.php');
        $sql = " SELECT evento_id, nombre_evento, fecha_evento, hora_evento, cate_evento, icono, nombre_invitado, apellido_invitado ";
        $sql .= " FROM eventos ";
        $sql .= " INNER JOIN categoria_evento ";
        $sql .= " ON eventos.id_cat_evento = categoria_evento.id_categoria ";
        $sql .= " INNER JOIN invitados ";
        $sql .= " ON eventos.id_invit = invitados.id_invitado ";
        $sql .= " ORDER BY evento_id ";
        $resultado = $conn->query($sql);
      } catch (\Exception $e){
          echo $e ->getMessage();
      }
    ?>
    <div class="calendario">
      <?php 
        $calendario = array();
        while ($eventos = $resultado->fetch_assoc() ){
          $evento = array(
            'titulo' => $eventos['nombre_evento'],
            'fecha' => $eventos['fecha_evento'],
            'hora' => $eventos['hora_evento'],
            'categoria' => $eventos['cate_evento'],
            'icono' => "fa" . " " . $eventos['icono'],
            'invitado' => $eventos['nombre_invitado'] . " " . $eventos['apellido_invitado']
          );
          $fecha = $eventos['fecha_evento'];
          $calendario[$fecha][] = $evento; 
      ?>
        <?php } ?>
        <?php foreach($calendario as $dia => $lista_eventos){ ?>
          <h3>
            <i class= "far fa-calendar "></i>
            <?php 
              //Acomodar fecha en Unix
              setlocale(LC_TIME, 'es_ES.UTF-8');
              //Acomodar fecha en Windows
              setlocale(LC_TIME, 'spanish.UTF-8');
              echo strftime ("%A, %d de %B del %Y", strtotime($dia));
              ?>
          </h3>
          <?php foreach($lista_eventos as $evento){ ?>
              <div class="dia">
                <p class="titulo"> <?php echo $evento['titulo']; ?> </p>
                <p class="hora"> <i class="far fa-clock" aria-hidden= "true"></i>
                  <?php echo $evento['fecha'] . " " . $evento['hora']; ?>
                </p> <!--fin fecha + hora-->
                <p>
                   <i class="<?php echo $evento['icono'] ?>" aria-hidden= "true"></i> 
                   <?php echo $evento['categoria']; ?> </p> <!--fin categoria-->
                <p>
                  <i class="far fa-user" aria-hidden= "true"></i> 
                  <?php echo $evento['invitado']; ?>
                </p> <!--fin invitado-->
              </div> <!--Fin dia-->
            <?php } //for each de evento ?>
          
        <?php } //fin foreach de dias ?>

    </div>
    <?php
      $conn->close();
    ?>
  </section>
  <!--Fin de la seccion-->
  <?php include_once 'includes/templates/footer.php'; ?>