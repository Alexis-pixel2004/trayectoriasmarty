function validarCamposRegistroUsuario() {
  console.log("Ejecutando validación...");

  if ($("#nombre").val() == "") {
    $("#nombre").css("background-color", "red").focus();
    return false;
  }

  if ($("#apellido").val() == "") {
    $("#apellido").css("background-color", "red").focus();
    return false;
  }

  if ($("#usuario").val() == "") {
    $("#usuario").css("background-color", "red").focus();
    return false;
  }

  if ($("#password").val() == "") {
    $("#password").css("background-color", "red").focus();
    return false;
  }

  
  return true;
}

function borrarValidacionregistro(elemento) {
  $("#" + elemento).css("background-color", "white");
}

$(document).ready(function () {
  // Validación y envío del formulario
  $(document).on("submit", "#registro_usuario", function (e) {
    e.preventDefault();
    console.log("Ejecutando validación...");

    if (!validarCamposRegistroUsuario()) return false;

    const datos = $(this).serialize();

    $.ajax({
      type: "POST",
      url: "../controladores/registro_docente.php",
      data: datos,
      success: function (respuesta) {
        alert("Usuario registrado correctamente");
        location.reload();
      },
      error: function () {
        alert("Error al registrar el usuario");
      }
    });
  });

  // Eventos para borrar validación al escribir
  $("#nombre").on("input", function () {
    borrarValidacionregistro("nombre");
  });

  $("#apellido").on("input", function () {
    borrarValidacionregistro("apellido");
  });

  $("#usuario").on("input", function () {
    borrarValidacionregistro("usuario");
  });

  $("#password").on("input", function () {
    borrarValidacionregistro("password");
  });

  $("#especialidad").on("input", function () {
    borrarValidacionregistro("especialidad");
  });
});



function validarCamposLogin() {
  console.log("Ejecutando validación login...");

  if ($("#usuario_login").val() == "") {
    $("#usuario_login").css("background-color", "red").focus();
    return false;
  }

  if ($("#password_login").val() == "") {
    $("#password_login").css("background-color", "red").focus();
    return false;
  }

  return true;
}

function borrarValidacionregistro(elemento) {
  $("#" + elemento).css("background-color", "white");
}

$(document).ready(function () {
  // Validación y envío del login
  $(document).on("submit", "#login_usuario", function (e) {
    e.preventDefault();
    console.log("Ejecutando validación login...");

    if (!validarCamposLogin()) return false;

    const datos = $(this).serialize();

    $.ajax({
      type: "POST",
      url: "../controladores/login.php",
      data: datos,
      success: function (respuesta) {
        if (respuesta.trim() === "ok") {
          alert("Login exitoso");
          window.location.href = "menu.tpl";
        } else {
          alert("Usuario o contraseña incorrectos");
        }
      },
      error: function () {
        alert("Error al procesar el login");
      }
    });
  });

  // Eventos para borrar validación al escribir
  $("#usuario_login").on("input", function () {
    borrarValidacionregistro("usuario_login");
  });

  $("#password_login").on("input", function () {
    borrarValidacionregistro("password_login");
  });
});


function validarCamposGrupo() {
  console.log("Ejecutando validación de grupo...");

  if ($("#NombreGrupo").val().trim() === "") {
    $("#NombreGrupo").css("background-color", "red").focus();
    return false;
  }

  if ($("#IdGrado").val() === "" || isNaN($("#IdGrado").val())) {
    $("#IdGrado").css("background-color", "red").focus();
    return false;
  }

  if ($("#CicloEscolar").val().trim() === "") {
    $("#CicloEscolar").css("background-color", "red").focus();
    return false;
  }

  // Validar formato ciclo escolar YYYY-YYYY
  var ciclo = $("#CicloEscolar").val().trim();
  var regexCiclo = /^\d{4}-\d{4}$/;
  if (!regexCiclo.test(ciclo)) {
    alert("Formato de ciclo escolar inválido. Usa el formato 2025-2026.");
    $("#CicloEscolar").css("background-color", "red").focus();
    return false;
  }


  return true;
}

$(document).ready(function () {
  // Validación y envío del formulario de grupos
$(document).on("submit", "#form_grupo", function (e) {
  e.preventDefault();
  console.log("Ejecutando validación de grupo...");

  if (!validarCamposGrupo()) return false;

  const datos = $(this).serialize(); // ahora después de validar
  console.log(datos);
  
  $.ajax({
    type: "POST",
    url: "../controladores/insertar_grupo.php",
    data: datos,
    xhrFields: { withCredentials: true },
    success: function (respuesta) {
      console.log("Respuesta completa:", respuesta);
      alert("Grupo registrado");
      location.reload();
    },
    error: function () {
      alert("Error al registrar el grupo");
    }
  });
});



$("#NombreGrupo, #CicloEscolar").on("input", function () {
  borrarValidacionGrupo(this.id);
});

$("#IdGrado").on("change", function () {
  borrarValidacionGrupo(this.id);
});

});


function borrarValidacionGrupo(campoId) {
  $("#" + campoId).css("background-color", "");
}




// Validacion de edicion de grupos y autollenado del modal 
function validarCamposEditarGrupo() {
  console.log("Ejecutando validación de edición...");

  if ($("#edit_NombreGrupo").val().trim() === "") {
    $("#edit_NombreGrupo").css("background-color", "red").focus();
    return false;
  }

  if ($("#edit_IdGrado").val() === "" || isNaN($("#edit_IdGrado").val())) {
    $("#edit_IdGrado").css("background-color", "red").focus();
    return false;
  }

  if ($("#edit_CicloEscolar").val().trim() === "") {
    $("#edit_CicloEscolar").css("background-color", "red").focus();
    return false;
  }

  var ciclo = $("#edit_CicloEscolar").val().trim();
  var regexCiclo = /^\d{4}-\d{4}$/;
  if (!regexCiclo.test(ciclo)) {
    alert("Formato de ciclo escolar inválido. Usa el formato 2025-2026.");
    $("#edit_CicloEscolar").css("background-color", "red").focus();
    return false;
  }

  return true;
}

$(document).on("click", ".editar-grupo", function () {
  const idGrupo = $(this).data("id");

  $.ajax({
    type: "POST",
    url: "../controladores/obtener_grupo.php",
    data: { IdGrupo: idGrupo },
    success: function (respuesta) {
      const grupo = JSON.parse(respuesta);
      $("#edit_IdGrupo").val(grupo.IdGrupo);
      $("#edit_NombreGrupo").val(grupo.NombreGrupo);
      $("#edit_IdGrado").val(grupo.IdGrado);
      $("#edit_CicloEscolar").val(grupo.CicloEscolar);
      $("#modalEditarGrupo").modal("show");
    },
    error: function () {
      alert("Error al obtener datos del grupo");
    }
  });
});

$(document).on("submit", "#form_editar_grupo", function (e) {
  e.preventDefault();

  if (!validarCamposEditarGrupo()) return false;

  const datos = $(this).serialize();
  console.log("Datos enviados:", datos);

  $.ajax({
    type: "POST",
    url: "../controladores/editar_grupo.php",
    data: datos,
    xhrFields: { withCredentials: true },
    success: function (respuesta) {
      console.log("Respuesta completa:", respuesta);
      alert("Grupo actualizado correctamente");
      location.reload();
    },
    error: function () {
      alert("Error al actualizar el grupo");
    }
  });
});

// Resetear validación al escribir/cambiar
$("#edit_NombreGrupo, #edit_CicloEscolar").on("input", function () {
  borrarValidacionGrupo(this.id);
});
$("#edit_IdGrado").on("change", function () {
  borrarValidacionGrupo(this.id);
});

function borrarValidacionGrupo(campoId) {
  $("#" + campoId).css("background-color", "");
}


// Validacion de eliminacion de grupos
$(document).on("click", ".eliminar-grupo", function () {
  const idGrupo = $(this).data("id");

  if (confirm("¿Seguro que deseas eliminar este grupo?")) {
    $.ajax({
      type: "POST",
      url: "../controladores/eliminar_grupo.php",
      data: { IdGrupo: idGrupo },
      xhrFields: { withCredentials: true },
      success: function (respuesta) {
        console.log("Respuesta completa:", respuesta);
        alert("Grupo eliminado correctamente");
        location.reload();
      },
      error: function () {
        alert("Error al eliminar el grupo");
      }
    });
  }
});

