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


//Validaciones para insercion de los alumnos 
function validarCamposAlumno() {
  console.log("Ejecutando validación de alumno...");

  // Nombre
  if ($("#Nombre").val().trim() === "") {
    $("#Nombre").css("background-color", "red").focus();
    return false;
  }

  // Apellido
  if ($("#Apellido").val().trim() === "") {
    $("#Apellido").css("background-color", "red").focus();
    return false;
  }

  // Sexo
  const sexo = $("#Sexo").val();
  if (sexo !== "M" && sexo !== "F") {
    alert("Selecciona el sexo del alumno.");
    $("#Sexo").css("background-color", "red").focus();
    return false;
  }

  // Fecha de nacimiento
  const fecha = $("#FechaNacimiento").val();
  if (!fecha) {
    $("#FechaNacimiento").css("background-color", "red").focus();
    return false;
  }

  // CURP
  const curp = $("#CURP").val().trim().toUpperCase();
  const regexCURP = /^[A-Z]{4}\d{6}[HM][A-Z]{5}[A-Z0-9]{2}$/;
  if (!regexCURP.test(curp)) {
    alert("CURP inválido. Verifica el formato.");
    $("#CURP").css("background-color", "red").focus();
    return false;
  }

  // Grupo
  if ($("#IdGrupo").val() === "") {
    $("#IdGrupo").css("background-color", "red").focus();
    return false;
  }

  return true;
}

$(document).ready(function () {
  // Envío del formulario
  $(document).on("submit", "#form_registro_alumno", function (e) {
    e.preventDefault();

    if (!validarCamposAlumno()) return false;

    const datos = $(this).serialize();
    console.log("Datos enviados:", datos);

    $.ajax({
      type: "POST",
      url: "../controladores/insertar_alumno.php",
      data: datos,
      xhrFields: { withCredentials: true },
      success: function (respuesta) {
        console.log("Respuesta completa:", respuesta);
        alert("Alumno registrado correctamente");
        $("#form_registro_alumno")[0].reset();
      },
      error: function () {
        alert("Error al registrar alumno");
      }
    });
  });

  // Limpieza visual al escribir o cambiar
  $("#Nombre, #Apellido, #CURP, #FechaNacimiento").on("input", function () {
    $(this).css("background-color", "");
  });

  $("#Sexo, #IdGrupo").on("change", function () {
    $(this).css("background-color", "");
  });
});




// Validaciones para la edición de los alumnos
function validarCamposEditarAlumno() {
  console.log("Ejecutando validación de edición...");

  if ($("#editNombre").val().trim() === "") {
    $("#editNombre").css("background-color", "red").focus();
    return false;
  }
  if ($("#editApellido").val().trim() === "") {
    $("#editApellido").css("background-color", "red").focus();
    return false;
  }
  const sexo = $("#editSexo").val();
  if (sexo !== "M" && sexo !== "F") {
    alert("Selecciona el sexo del alumno.");
    $("#editSexo").css("background-color", "red").focus();
    return false;
  }
  const fecha = $("#editFecha").val();
  if (!fecha) {
    $("#editFecha").css("background-color", "red").focus();
    return false;
  }
  const curp = $("#editCURP").val().trim().toUpperCase();
  const regexCURP = /^[A-Z]{4}\d{6}[HM][A-Z]{5}[A-Z0-9]{2}$/;
  if (!regexCURP.test(curp)) {
    alert("CURP inválido. Verifica el formato.");
    $("#editCURP").css("background-color", "red").focus();
    return false;
  }
  return true;
}

$(document).ready(function () {
  // Cargar alumnos por grupo
  $("#btnCargarGrupo").on("click", function () {
    const idGrupo = $("#grupoSeleccionado").val();
    if (!idGrupo) {
      $("#tablaAlumnos tbody").html("");
      return;
    }
    $("#tablaAlumnos tbody").html('<tr><td colspan="6" class="text-center">Cargando...</td></tr>');
    $.ajax({
      type: "POST",
      url: "../controladores/listar_alumnos.php",
      data: { IdGrupo: idGrupo },
      dataType: "json",
      success: function (alumnos) {
        let filas = "";
        alumnos.forEach(a => {
          filas += `
            <tr>
              <td>${a.Nombre}</td>
              <td>${a.Apellido}</td>
              <td>${a.Sexo}</td>
              <td>${a.FechaNacimiento}</td>
              <td>${a.CURP}</td>
              <td>
                <button class="btn btn-sm btn-warning editar-alumno"
                  data-id="${a.IdAlumno}"
                  data-nombre="${a.Nombre}"
                  data-apellido="${a.Apellido}"
                  data-sexo="${a.Sexo}"
                  data-fecha="${a.FechaNacimiento}"
                  data-curp="${a.CURP}">
                  Editar
                </button>
                <button class="btn btn-sm btn-danger eliminar-alumno" 
                  data-id="${a.IdAlumno}" data-grupo="${idGrupo}">
                  Eliminar
                </button>
              </td>
            </tr>`;
        });
        $("#tablaAlumnos tbody").html(filas);
      }
    });
  });

  // Eliminar alumno
  $(document).on("click", ".eliminar-alumno", function () {
    const idAlumno = $(this).data("id");
    const idGrupo  = $(this).data("grupo");
    if (confirm("¿Seguro que deseas eliminar este alumno?")) {
      $.ajax({
        type: "POST",
        url: "../controladores/eliminar_alumno.php",
        data: { IdAlumno: idAlumno, IdGrupo: idGrupo },
        success: function (respuesta) {
          alert(respuesta);
          $("#btnCargarGrupo").trigger("click");
        }
      });
    }
  });

  // Abrir modal de edición
  $(document).on("click", ".editar-alumno", function () {
    $("#editIdAlumno").val($(this).data("id"));
    $("#editNombre").val($(this).data("nombre"));
    $("#editApellido").val($(this).data("apellido"));
    $("#editSexo").val($(this).data("sexo"));
    $("#editFecha").val($(this).data("fecha"));
    $("#editCURP").val($(this).data("curp"));
    $("#modalEditarAlumno").modal("show");
  });

  // Enviar edición
  $(document).on("submit", "#formEditarAlumno", function (e) {
    e.preventDefault();
    if (!validarCamposEditarAlumno()) return false;
    const datos = {
      IdAlumno: $("#editIdAlumno").val(),
      Nombre: $("#editNombre").val().trim(),
      Apellido: $("#editApellido").val().trim(),
      Sexo: $("#editSexo").val(),
      FechaNacimiento: $("#editFecha").val(),
      CURP: $("#editCURP").val().trim().toUpperCase()
    };
    $.ajax({
      type: "POST",
      url: "../controladores/editar_alumno.php",
      data: datos,
      success: function (respuesta) {
        alert(respuesta.message || respuesta);
        $("#modalEditarAlumno").modal("hide");
        $("#btnCargarGrupo").trigger("click");
      },
      error: function(xhr){
        console.error("Ërror: ",xhr.responseText);
      }
    });
  });

  // Limpieza visual
  $("#editNombre, #editApellido, #editCURP, #editFecha").on("input", function () {
    $(this).css("background-color", "");
  });
  $("#editSexo").on("change", function () {
    $(this).css("background-color", "");
  });
});


$(document).ready(function () {
  $("#grupoExportar").on("change", function () {
    const idGrupo = $(this).val();
    console.log("Grupo seleccionado:", idGrupo);
    $("#btnExportarExcel").prop("disabled", !idGrupo);
  });

  $("#btnExportarExcel").on("click", function () {
    const idGrupo = $("#grupoExportar").val();
    if (idGrupo) {
      $.ajax({
        url: "../controladores/exportar_alumnos.php",
        type: "GET",
        data: { IdGrupo: idGrupo },
        xhrFields: { responseType: 'blob' },
        success: function (data) {
          const url = window.URL.createObjectURL(data);
          const a = document.createElement("a");
          a.href = url;
          a.download = "alumnos_grupo" + idGrupo + ".xlsx";
          document.body.appendChild(a);
          a.click();
          a.remove();
          window.URL.revokeObjectURL(url);
          console.log(" Exportación exitosa del grupo " + idGrupo);
        },
        error: function (xhr) {
          console.error(" Error al exportar:", xhr.status, xhr.responseText);
        }
      });
    }
  });
});

