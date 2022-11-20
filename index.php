<?php include_once 'includes/templates/header.php'; ?>
  <body>
    <section class="seccion contenedor">
      <h2>La Mejor Conferencia de Diseño Web</h2>
      <p>
        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Qui quam
        officia, reiciendis quaerat magnam esse ex aut perspiciatis quae
        pariatur voluptatem labore mollitia temporibus quasi repudiandae
        recusandae exercitationem soluta ratione. Lorem ipsum dolor sit amet
        consectetur adipisicing elit. Sit iste tenetur quos vel placeat iure
        consectetur ipsum. Atque aspernatur itaque odit ab quia eius unde minima
        quos incidunt, dolor totam!
      </p>
    </section>
    <!--Fin de la seccion-->
    <section class="programa">
      <div class="contenedor-video">
        <video autoplay="false" loop poster="bg-talleres.jpg">
          <source src="video/video.mp4" type="video/mp4" />
          <source src="video/video.webm" type="video/webm" />
          <source src="video/video.ogv" type="video/ogv" />
        </video>
      </div>
      <div class="contenido-programa contenedor">
        <div class="programa-evento">
          <h2>Programa del evento</h2>
          <?php
            try {
              require_once('includes/funciones/bd_conexion.php');
              $sql = " SELECT * FROM `categoria_evento` ";
              $resultado = $conn->query($sql);
            } catch (\Exception $e){
                echo $e ->getMessage();
            }
          ?>
          <nav class="menu-programa">
            <?php while($cat = $resultado->fetch_array(MYSQLI_ASSOC)) { ?>
              <?php $nombre_evento = $cat['cate_evento']; ?>
                <a href="#<?php echo strtolower($nombre_evento) ?>">
                  <i class="fas <?php echo $cat['icono'] ?>" aria-hidden="true"></i>
                  <?php echo $nombre_evento ?>
                </a>
            <?php }; ?>
          </nav>
          <?php
              try {
                require_once('includes/funciones/bd_conexion.php');
                $sql = " SELECT evento_id, nombre_evento, fecha_evento, hora_evento, cate_evento, icono, nombre_invitado, apellido_invitado ";
                $sql .= " FROM eventos ";
                $sql .= " INNER JOIN categoria_evento ";
                $sql .= " ON eventos.id_cat_evento = categoria_evento.id_categoria ";
                $sql .= " INNER JOIN invitados ";
                $sql .= " ON eventos.id_invit = invitados.id_invitado ";
                $sql .= "AND eventos.id_cat_evento = 1";
                $sql .= " ORDER BY evento_id LIMIT 2; ";
                $sql .= " SELECT evento_id, nombre_evento, fecha_evento, hora_evento, cate_evento, icono, nombre_invitado, apellido_invitado ";
                $sql .= " FROM eventos ";
                $sql .= " INNER JOIN categoria_evento ";
                $sql .= " ON eventos.id_cat_evento = categoria_evento.id_categoria ";
                $sql .= " INNER JOIN invitados ";
                $sql .= " ON eventos.id_invit = invitados.id_invitado ";
                $sql .= "AND eventos.id_cat_evento = 2";
                $sql .= " ORDER BY evento_id LIMIT 2; ";
                $sql .= " SELECT evento_id, nombre_evento, fecha_evento, hora_evento, cate_evento, icono, nombre_invitado, apellido_invitado ";
                $sql .= " FROM eventos ";
                $sql .= " INNER JOIN categoria_evento ";
                $sql .= " ON eventos.id_cat_evento = categoria_evento.id_categoria ";
                $sql .= " INNER JOIN invitados ";
                $sql .= " ON eventos.id_invit = invitados.id_invitado ";
                $sql .= "AND eventos.id_cat_evento = 3";
                $sql .= " ORDER BY evento_id LIMIT 2; ";
              } catch (\Exception $e){
                  echo $e ->getMessage();
              }
            ?>
            <?php
              $conn->multi_query($sql);
            ?>
            <?php
              do{
                $resultado = $conn->store_result();
                $row = $resultado->fetch_all(MYSQLI_ASSOC); ?>
                <?php $i = 0; ?>
                <?php foreach($row as $evento): ?>
                <?php if($i %2 == 0){ ?>
                  <div id="<?php echo strtolower($evento['cate_evento']) ?>" class="info-curso ocultar clearfix">
                <?php } ?>
                    <div class="detalles-evento">
                      <h3><?php echo utf8_encode($evento['nombre_evento']) ?></h3>
                      <p>
                        <i class="fas fa-calendar" aria-hidden="true"></i><span class="letra_numeros">17</span> de
                        Noviembre
                      </p>
                      <p><i class="fas fa-clock" aria-hidden="true"></i><span class="letra_numeros">16:30</span></p>
                      <p>
                        <i class="fas fa-user" aria-hidden="true"></i><?php echo $evento['nombre_invitado'] . " " . $evento['apellido_invitado']; ?>
                      </p>
                    </div><!--fin detalles evento-->
                    
                    <?php if($i %2 == 1): ?>
                    <a href="calendario.php" class="button float-right">Ver Todos</a>
                    </div><!--Fin un taller-->
                    <?php endif; ?>
                  <?php $i++; ?>
                <?php endforeach; ?>
                <?php $resultado->free(); ?>

              <?php  }while ($conn->more_results() && $conn->next_result()); ?>
            
        </div>
      </div>
      <!--Contenido del programa-->
    </section>
    <!--Fin del video-->
    <?php include_once 'includes/templates/invitados.php'; ?>
    <!--Fin de los Invitados-->
    <div class="contador parallax clearfix">
      <div class="contenedor">
        <ul class="resumen-evento">
          <li>
            <p class="numero"></p>
            Invitados
          </li>
          <li>
            <p class="numero"></p>
            Talleres
          </li>
          <li>
            <p class="numero"></p>
            Días
          </li>
          <li>
            <p class="numero"></p>
            Conferencias
          </li>
        </ul>
      </div>
    </div>
    <!--Fin del Parallax-->
    <section class="precios seccion">
      <h2>Precios</h2>
      <div class="contenedor">
        <ul class="lista-precios clearfix">
          <li>
            <div class="tabla-precio">
              <h3>Pase por Día</h3>
              <p class="numero">$30</p>
              <ul>
                <li>Bocadillos Gratis</li>
                <li>Todas las Conferencias</li>
                <li>Todos los Talleres</li>
              </ul>
              <a href="#" class="button hollow">Comprar</a>
            </div>
          </li>
          <!--Fin de un cuadro-->
          <li>
            <div class="tabla-precio">
              <h3>Todos los Días</h3>
              <p class="numero">$50</p>
              <ul>
                <li>Bocadillos Gratis</li>
                <li>Todas las Conferencias</li>
                <li>Todos los Talleres</li>
              </ul>
              <a href="#" class="button">Comprar</a>
            </div>
          </li>
          <!--Fin de un cuadro-->
          <li>
            <div class="tabla-precio">
              <h3>Pase por 2 Días</h3>
              <p class="numero">$45</p>
              <ul>
                <li class="fab fa-check">Bocadillos Gratis</li>
                <li>Todas las Conferencias</li>
                <li>Todos los Talleres</li>
              </ul>
              <a href="#" class="button hollow">Comprar</a>
            </div>
          </li>
          <!--Fin de un cuadro-->
        </ul>
      </div>
    </section>
    <!--Fin de los precios-->
    <div id="mapa" class="mapa"></div>
    <!--Fin del mapa-->
    <section class="seccion">
      <h2>Testimoniales</h2>
      <div class="testimoniales contenedor clearflix">
        <div class="testimonial">
          <blockquote>
            <p>
              Lorem ipsum dolor, sit amet consectetur adipisicing elit. Provident
              eius enim voluptate. Quasi, quae! Dicta rerum quae voluptates
              cupiditate, animi reiciendis velit vel omnis quaerat alias at
              consectetur placeat perferendis.
              <footer class="info-testimonial clearfix">
                <img src="img/testimonial.jpg" alt="testimonial">
                <cite>Oswaldo Aponte Escabedo <span>Diseñador en @prisma</span></cite>
              </footer>
            </p>
          </blockquote>
        </div><!--Fin del testimonial-->
        <div class="testimonial">
          <blockquote>
            <p>
              Lorem ipsum dolor, sit amet consectetur adipisicing elit. Provident
              eius enim voluptate. Quasi, quae! Dicta rerum quae voluptates
              cupiditate, animi reiciendis velit vel omnis quaerat alias at
              consectetur placeat perferendis.
              <footer class="info-testimonial clearfix">
                <img src="img/testimonial.jpg" alt="testimonial">
                <cite>Oswaldo Aponte Escabedo <span>Diseñador en @indra</span></cite>
              </footer>
            </p>
          </blockquote>
        </div><!--Fin del testimonial-->
        <div class="testimonial">
          <blockquote>
            <p>
              Lorem ipsum dolor, sit amet consectetur adipisicing elit. Provident
              eius enim voluptate. Quasi, quae! Dicta rerum quae voluptates
              cupiditate, animi reiciendis velit vel omnis quaerat alias at
              consectetur placeat perferendis.
              <footer class="info-testimonial clearfix">
                <img src="img/testimonial.jpg" alt="testimonial">
                <cite>Oswaldo Aponte Escabedo <span>Desarrollador en @Talento</span></cite>
              </footer>
            </p>
          </blockquote>
        </div><!--Fin del testimonial-->
    </div>
    </section><!--Fin de los testimoniales-->
    <div class="newsletter parallax">
      <div class="contenido contenedor">
        <p>Regístrate al Newsletter:</p>
        <h3>GdlWebCamp</h3>
        <a href="register.php" class="button transparente">Registro</a>
      </div>  
    </div><!--Fin del Newsletter-->
    <section class="seccion">
      <h2>Faltan</h2>
      <div class="cuenta-regresiva contenedor">
        <ul class="clearfix">
          <li><p id="dias" class="numero"></p>Días</li>
          <li><p id="horas" class="numero"></p>Horas</li>
          <li><p id="minutos" class="numero"></p>Minutos</li>
          <li><p id="segundos" class="numero"></p>Segundos</li>
        </ul>
      </div>
    </section><!--Fin de la cuenta regresiva-->
  </body>
<?php include_once 'includes/templates/footer.php'; ?>