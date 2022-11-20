<?php include_once 'includes/templates/header.php'; ?>
  <section class="seccion contenedor">
    <h2>Registro de Usuarios</h2>
    <form id="registro" class="registro" action="validar_registro.php" method="post">
      <div id="datos_usuario" class="registro caja clearfix">
        <div class="campo">
          <label for="nombre">Nombre:</label>
          <input type="text" id="nombre" name="nombre" placeholder="Tu nombre">
        </div>
        <!--Fin del campo-->
        <div class="campo">
          <label for="apellido">Apellido:</label>
          <input type="text" id="apellido" name="apellido" placeholder="Tu apellido">
        </div>
        <!--Fin del campo-->
        <div class="campo">
          <label for="email">Email:</label>
          <input type="email" id="email" name="email" placeholder="Tu email">
        </div>
        <!--Fin del campo-->
        <div id="error"></div>
      </div>
      <!--Fin de datos usuario-->
      <div id="paquetes" class="paquetes">
        <h3>Elige el número de boletos</h3>
        <ul class="lista-precios clearfix">
          <li>
            <div class="tabla-precio tabla-register">
              <h3>Pase por Día (Viernes)</h3>
              <p class="numero">$30</p>
              <ul>
                <li>Bocadillos Gratis</li>
                <li>Todas las Conferencias</li>
                <li>Todos los Talleres</li>
              </ul>
              <div class="orden">
                <label for="pase_dia">Boletos Deseados:</label>
                <input type="number" min="0" id="pase_dia" size="3" name="boletos[]" placeholder="0">
              </div>
            </div>
          </li>
          <!--Fin de un cuadro-->
          <li>
            <div class="tabla-precio tabla-register">
              <h3>Todos los Días</h3>
              <p class="numero">$50</p>
              <ul>
                <li>Bocadillos Gratis</li>
                <li>Todas las Conferencias</li>
                <li>Todos los Talleres</li>
              </ul>
              <div class="orden">
                <label for="pase_completo">Boletos Deseados:</label>
                <input type="number" min="0" id="pase_completo" size="3" name="boletos[]" placeholder="0">
              </div>
            </div>
          </li>
          <!--Fin de un cuadro-->
          <li>
            <div class="tabla-precio tabla-register">
              <h3>Pase por 2 Días (Viernes y Sábado)</h3>
              <p class="numero">$45</p>
              <ul>
                <li class="fab fa-check">Bocadillos Gratis</li>
                <li>Todas las Conferencias</li>
                <li>Todos los Talleres</li>
              </ul>
              <div class="orden margenadicional">
                <label for="pase_dos_dias">Boletos Deseados:</label>
                <input type="number" min="0" id="pase_dos_dias" size="3" name="boletos[]" placeholder="0">
              </div>
            </div>
          </li>
          <!--Fin de un cuadro-->
        </ul>
      </div>
      <!--Fin de paquetes-->

      <div id="eventos" class="eventos clearfix">
        <h3>Elige tus talleres</h3>
        <div class="caja">
          <div id="viernes" class="contenido-dia clearfix">
            <h4>Viernes</h4>
            <div>
              <p>Talleres:</p>
              <label><input type="checkbox" name="registro[]" id="taller_01" value="taller_01"> <time>10:00</time>
                Responsive Web Design</label>
              <label><input type="checkbox" name="registro[]" id="taller_02" value="taller_02"> <time>12:00</time>
                Flexbox</label>
              <label><input type="checkbox" name="registro[]" id="taller_03" value="taller_03"> <time>14:00</time> Html5
                y CSS</label>
              <label><input type="checkbox" name="registro[]" id="taller_04" value="taller_04"> <time>16:00</time>
                Drupal</label>
              <label><input type="checkbox" name="registro[]" id="taller_05" value="taller_05"> <time>18:00</time>
                Wordpress</label>
            </div>
            <!--fin de un div-->
            <div>
              <p>Conferencias:</p>
              <label><input type="checkbox" name="registro[]" id="conf_01" value="conf_01"> <time>10:00</time> Como ser
                Freelancer</label>
              <label><input type="checkbox" name="registro[]" id="conf_02" value="conf_02"> <time>17:00</time>
                Tecnologías del futuro</label>
              <label><input type="checkbox" name="registro[]" id="conf_03" value="conf_03"> <time>19:00</time> Seguridad
                en la Web</label>
            </div>
            <!--fin de un div-->
            <div>
              <p>Seminarios:</p>
              <label><input type="checkbox" name="registro[]" id="sem_01" value="sem_01"> <time>10:00</time> Diseño UI y
                UX para Teléfonos</label>
            </div>
            <!--fin de un div-->
          </div>
          <!--Fin del viernes-->
          <div id="sabado" class="contenido-dia clearfix">
            <h4>Sábado</h4>
            <div>
              <p>Talleres:</p>
              <label><input type="checkbox" name="registro[]" id="taller_06" value="taller_06"> <time>10:00</time>
                AngularJS</label>
              <label><input type="checkbox" name="registro[]" id="taller_07" value="taller_07"> <time>12:00</time> PHP y
                MySQL</label>
              <label><input type="checkbox" name="registro[]" id="taller_08" value="taller_08"> <time>14:00</time>
                JavaScript avanzado</label>
              <label><input type="checkbox" name="registro[]" id="taller_09" value="taller_09"> <time>17:00</time> SEO
                en Google</label>
              <label><input type="checkbox" name="registro[]" id="taller_10" value="taller_10"> <time>19:00</time> De
                Photoshop a HTML y CSS</label>
              <label><input type="checkbox" name="registro[]" id="taller_11" value="taller_11"> <time>21:00</time> PHP
                medio y avanzado</label>
            </div>
            <!--fin de un div-->
            <div>
              <p>Conferencias:</p>
              <label><input type="checkbox" name="registro[]" id="conf_04" value="conf_04"> <time>10:00</time> Como
                crear una tienda online exitosa</label>
              <label><input type="checkbox" name="registro[]" id="conf_05" value="conf_05"> <time>17:00</time> Mejores
                formas de encontrar trabajo</label>
              <label><input type="checkbox" name="registro[]" id="conf_06" value="conf_06"> <time>19:00</time> Pasos
                para crear un negocio contable</label>
            </div>
            <!--fin de un div-->
            <div>
              <p>Seminarios:</p>
              <label><input type="checkbox" name="registro[]" id="sem_02" value="sem_02"> <time>10:00</time> Aprende a
                programar rapidamente</label>
              <label><input type="checkbox" name="registro[]" id="sem_03" value="sem_03"> <time>10:00</time> Diseño UI y
                UX para móviles</label>
            </div>
            <!--fin de un div-->
          </div>
          <!--Fin del sabado-->
          <div id="domingo" class="contenido-dia clearfix">
            <h4>Domingo</h4>
            <div>
              <p>Talleres:</p>
              <label><input type="checkbox" name="registro[]" id="taller_12" value="taller_12"> <time>10:00</time>
                Laravel</label>
              <label><input type="checkbox" name="registro[]" id="taller_13" value="taller_13"> <time>12:00</time> Crea
                tu
                propia API</label>
              <label><input type="checkbox" name="registro[]" id="taller_14" value="taller_14"> <time>14:00</time>
                JavaScript y JQuery</label>
              <label><input type="checkbox" name="registro[]" id="taller_15" value="taller_15"> <time>17:00</time>
                Creando
                plantillas para Wordpress</label>
              <label><input type="checkbox" name="registro[]" id="taller_16" value="taller_16"> <time>19:00</time>
                Tiendas
                virtuales en Magento</label>
            </div>
            <!--fin de un div-->
            <div>
              <p>Conferencias:</p>
              <label><input type="checkbox" name="registro[]" id="conf_07" value="conf_07"> <time>10:00</time> Como
                hacer
                Marketing en línea</label>
              <label><input type="checkbox" name="registro[]" id="conf_08" value="conf_08"> <time>17:00</time> ¿Con qué
                lenguaje debo empezar?</label>
              <label><input type="checkbox" name="registro[]" id="conf_09" value="conf_09"> <time>19:00</time>
                Frameworks
                y librerias opensource</label>
            </div>
            <!--fin de un div-->
            <div>
              <p>Seminarios:</p>
              <label><input type="checkbox" name="registro[]" id="sem_04" value="sem_04"> <time>14:00</time> Creando una
                app Android en una tarde</label>
              <label><input type="checkbox" name="registro[]" id="sem_05" value="sem_05"> <time>17:00</time> Creando una
                app IOS en una tarde</label>
            </div>
            <!--fin de un div-->
          </div>
          <!--Fin del domingo-->
        </div>
        <!--Fin de la caja-->
      </div>
      <!--Fin de eventos-->
      <div id="resumen" class="resumen">
        <h3>Pago y Extras</h3>
        <div class="caja clearfix">
          <div class="extras">
            <div class="orden">
              <label for="camisa_evento">Camisa del evento <span class="letra_numeros">$10</span> <small>(promoción <span class="letra_numeros">7%</span>dto.)</small></label>
              <input type="number" min="0" id="camisa_evento" size="3" name="pedido_camisas" placeholder="0">
            </div><!--fin orden-->
            <div class="orden">
              <label for="etiquetas">Paquete de <span class="letra_numeros">10</span> etiquetas <span class="letra_numeros">$2</span> <small>(HTML5, CSS3, JavaScript, Chrome)</small></label>
              <input type="number" min="0" id="etiquetas" size="3" name="pedido_etiquetas" placeholder="0">
            </div><!--fin orden-->
            <div class="orden">
              <label for="regalo">Selecciona un regalo</label>
              <select required="required" id="regalo" name="regalo">
                  <option value="">Selecciona un Regalo</option>
                  <option value="2">Etiquetas</option>
                  <option value="1">Pulseras</option>
                  <option value="3">Bolígrafos</option>
              </select>
            </div><!--fin orden-->
            <input type="button" id="calcular" class="button" value="Calcular">
          </div><!--fin extras-->
          <div class="total">
            <p>Resumen:</p>
            <div id="lista_productos"></div>
            <p>Total:</p>
            <div id="suma_total"></div>
          </div><!--fin resumen y total-->
          <input type="hidden" name="total_pedido" id="total_pedido">
          <input id="botonRegistro" type="submit" name= "submit" class="button" value="Pagar">
        </div><!--fin caja-->
      </div><!--fin resumen-->
    </form>
    <!--fin de los precios-->
  </section>
<?php include_once 'includes/templates/footer.php'; ?>