(function () {
  "use strick";
  let regalo = document.getElementById("regalo");
  document.addEventListener("DOMContentLoaded", function () {
    //mapa
    var mapa = document.getElementById("mapa");
    if (mapa) {
      var map = L.map("mapa").setView([-34.907006, -56.144627], 17);
      L.tileLayer("https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png", {
        attribution:
          '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors',
      }).addTo(map);

      L.marker([-34.907006, -56.144627])
        .addTo(map)
        .bindPopup("Ubicación aproximada.<br> Todavia no vivo por ahí, pronto.")
        .openPopup()
        .bindTooltip("Un Tooltip")
        .openTooltip();
    }

    //campos de registro
    let nombre = document.getElementById("nombre");
    let apellido = document.getElementById("apellido");
    let email = document.getElementById("email");

    //Campos Pases
    let pase_dia = document.getElementById("pase_dia");
    let pase_dos_dias = document.getElementById("pase_dos_dias");
    let pase_completo = document.getElementById("pase_completo");

    //Botones y divs
    let errorDiv = document.getElementById("error");
    let botonRegistro = document.getElementById("botonRegistro");
    let lista_productos = document.getElementById("lista_productos");
    let calcular = document.getElementById("calcular");
    let suma = document.getElementById("suma_total");

    //Extras
    let etiquetas = document.getElementById("etiquetas");
    let camisas = document.getElementById("camisa_evento");
    botonRegistro.disabled = true;
    //event listeners
    if (calcular) {
      calcular.addEventListener("click", calcularMontos);
      pase_dia.addEventListener("blur", mostrar_dias);
      pase_dos_dias.addEventListener("blur", mostrar_dias);
      pase_completo.addEventListener("blur", mostrar_dias);

      //validar campos
      nombre.addEventListener("blur", validar_campos); //fin error nombre
      apellido.addEventListener("blur", validar_campos); //fin error apellido
      email.addEventListener("blur", validar_campos); //fin error email
      email.addEventListener("blur", validar_email); //fin validar si es email
    }

    //Info de los talleres
    $("#seminarios").hide();
    $("#conferencias").hide();
    $(".programa-evento .info-curso:first").show();
    $(".menu-programa a:first").addClass("activo");

    $("#tg_conferencias").on("click", activar_menu);
    $("#tg_seminarios").on("click", activar_menu);
    $("#tg_talleres").on("click", activar_menu);

    //COMO YO HICE LO DEL MENU DE CONFERENCIAS
    /* $("#tg_conferencias").click(function (e) {
      e.preventDefault();
      $("#conferencias").show();
      $("#talleres").hide();
      $("#seminarios").hide();
      let enlace = $(this).attr("href");
      $(enlace).fadeIn(1000);
      $("#conferencias").fadeIn(1000);
    });
    $("#tg_seminarios").click(function (e) {
      e.preventDefault();
      $("#seminarios").show();
      $("#talleres").hide();
      $("#conferencias").hide();
    });
    $("#tg_talleres").click(function (e) {
      e.preventDefault();
      $("#talleres").show();
      $("#seminarios").hide();
      $("#conferencias").hide();
    }); */

    function validar_campos() {
      if (this.value == "") {
        errorDiv.style.display = "block";
        errorDiv.innerHTML = "Este campo es obligatorio";
        this.style.border = "1px solid red";
        errorDiv.style.border = "1px solid red";
      } else {
        errorDiv.style.display = "none";
        this.style.border = "1px solid #cccccc";
      }
    }

    function validar_email() {
      if (this.value.indexOf("@") > -1) {
        errorDiv.style.display = "none";
        this.style.border = "1px solid #cccccc";
      } else {
        errorDiv.style.display = "block";
        errorDiv.innerHTML = "Este no es un email válido";
        this.style.border = "1px solid red";
        errorDiv.style.border = "1px solid red";
      }
    }

    function calcularMontos(event) {
      event.preventDefault();
      if (regalo.value === "") {
        alert("Debes Elegir un Regalo");
        regalo.focus();
      } else {
        let boleto_dia = parseInt(pase_dia.value, 10) || 0;
        let boleto_dos_dias = parseInt(pase_dos_dias.value, 10) || 0;
        let boleto_completo = parseInt(pase_completo.value, 10) || 0;
        let cantidad_camisas = parseInt(camisas.value, 10) || 0;
        let cantidad_etiquetas = parseInt(etiquetas.value, 10) || 0;

        let total_pagar =
          boleto_dia * 30 +
          boleto_dos_dias * 45 +
          boleto_completo * 50 +
          cantidad_camisas * 10 * 0.93 +
          cantidad_etiquetas * 2;

        let listado_productos = [];

        if (boleto_dia >= 1) {
          listado_productos.push(boleto_dia + " Pases por Día");
        }
        if (boleto_dos_dias >= 1) {
          listado_productos.push(boleto_dos_dias + " Pases por 2 Días");
        }
        if (boleto_completo >= 1) {
          listado_productos.push(boleto_completo + " Pases Completos");
        }
        if (cantidad_camisas >= 1) {
          listado_productos.push(cantidad_camisas + " Camisas");
        }
        if (cantidad_etiquetas >= 1) {
          listado_productos.push(cantidad_etiquetas + " Etiquetas");
        }
        // if (regalo.value == "ETI") {
        //   listado_productos.push("Etiquetas de Regalo");
        // }
        // if (regalo.value == "PUL") {
        //   listado_productos.push("Pulsera de Regalo");
        // }
        // if (regalo.value == "BOL") {
        //   listado_productos.push("Bolígrafos de Regalo");
        // }
        lista_productos.style.display = "block";
        lista_productos.innerHTML = "";
        for (let i = 0; i < listado_productos.length; i++) {
          lista_productos.innerHTML += listado_productos[i] + "<br/>";
        }
        suma.innerHTML = "$ " + total_pagar.toFixed(2);
        botonRegistro.disabled = false;
        document.getElementById("total_pedido").value = total_pagar;
      } // fin else
    } //fin calcular montos
    function mostrar_dias() {
      let boleto_dia = parseInt(pase_dia.value, 10) || 0;
      let boleto_dos_dias = parseInt(pase_dos_dias.value, 10) || 0;
      let boleto_completo = parseInt(pase_completo.value, 10) || 0;

      let dias_elegidos = [];

      if (boleto_dia >= 1) {
        dias_elegidos.push("viernes");
        $("#viernes").show();
      }
      if (boleto_dos_dias >= 1) {
        dias_elegidos.push("viernes", "sabado");
        $("#viernes").show();
        $("#sabado").show();
      }
      if (boleto_completo >= 1) {
        dias_elegidos.push("viernes", "sabado", "domingo");
        $("#viernes").show();
        $("#sabado").show();
        $("#domingo").show();
      }
      if (dias_elegidos.length > 0) {
        for (let i = 0; i < dias_elegidos.length; i++) {
          document.getElementById(dias_elegidos[i]).style.display = "block";
        }
      } else {
        $("#viernes").hide();
        $("#sabado").hide();
        $("#domingo").hide();
      }
    } //fin mostrar_dias
    function activar_menu() {
      $(".programa-evento .info-curso:first").show();
      $(".menu-programa a:first").addClass("activo");
      $(".menu-programa a").on("click", function () {
        $(".menu-programa a:first").removeClass("activo");
        $(this).removeClass("ocultar");
        $(this).show();
        let enlace = $(this).attr("href");
        $(enlace).fadeIn(400);
        return false;
      });
    } //Fin activar_menu
    //Menu Responsive
    $(".menu-movil").on("click", function () {
      $(".navegacion-principal").slideToggle();
    });
  }); //DOM CONTENT LOADED

  //cuenta regresiva plugin
  $(".cuenta-regresiva").countdown("2022/12/10 09:00:00", function (event) {
    $("#dias").html(event.strftime("%D"));
    $("#horas").html(event.strftime("%H"));
    $("#minutos").html(event.strftime("%M"));
    $("#segundos").html(event.strftime("%S"));
  });
})();
$(function () {
  //Animaciones para los numeros plugin
  let resumen_lista = $(".resumen-evento");
  if (resumen_lista.length > 0) {
    $(".resumen-evento").waypoint(function () {
      $(".resumen-evento li:nth-child(1) p").animateNumber({ number: 6 }, 1200);
      $(".resumen-evento li:nth-child(2) p").animateNumber(
        { number: 15 },
        1200
      );
      $(".resumen-evento li:nth-child(3) p").animateNumber({ number: 3 }, 1500);
      $(".resumen-evento li:nth-child(4) p").animateNumber({ number: 9 }, 1500);
    });
  }

  //Agregar clases a la barra de menu
  $(
    'body.conferencia .navegacion-principal a:contains("Conferencia")'
  ).addClass("resaltador");
  $('body.calendario .navegacion-principal a:contains("Calendario")').addClass(
    "resaltador"
  );
  $('body.invitados .navegacion-principal a:contains("Invitados")').addClass(
    "resaltador"
  );
  $('body.register .navegacion-principal a:contains("Reservaciones")').addClass(
    "resaltador_reservaciones"
  );

  //Menu fijo
  let window_height = $(window).height();
  let barra_altura = $(".barra").innerHeight();
  $(window).scroll(function () {
    let scroll = $(window).scrollTop();
    if (scroll > window_height) {
      $(".barra").addClass("fixed");
      $(".body").css({ "margin-top": barra_altura + "rem" });
    } else {
      $(".barra").removeClass("fixed");
      $(".body").css({ "margin-top": 0 + "rem" });
    }
  }); //fin menu fijo

  //Colorbox plugin
  $(".invitado-info").colorbox({
    inline: true,
    width: "50%",
    height: "90%",
    fixed: "true",
  });
});
