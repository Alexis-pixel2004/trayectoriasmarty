function validarCamposRegistroUsuario() {
  console.log("Ejecutando validación...");

  let valido = true;

  if ($("#nombre").val().trim() === "") {
    $("#nombre").css("background-color", "red").focus();
    $("#error-nombre").removeClass("d-none");
    valido = false;
  }

  if ($("#apellido").val().trim() === "") {
    $("#apellido").css("background-color", "red").focus();
    $("#error-apellido").removeClass("d-none");
    valido = false;
  }

  if ($("#usuario").val().trim() === "") {
    $("#usuario").css("background-color", "red").focus();
    $("#error-usuario").removeClass("d-none");
    valido = false;
  }

  if ($("#password").val().trim() === "") {
    $("#password").css("background-color", "red").focus();
    $("#error-password").removeClass("d-none");
    valido = false;
  }

  if ($("#especialidad").val().trim() === "") {
    $("#especialidad").css("background-color", "red").focus();
    $("#error-especialidad").removeClass("d-none");
    valido = false;
  }

  return valido;
}

function borrarValidacionregistro(elemento) {
  $("#" + elemento).css("background-color", "white");
  $("#error-" + elemento).addClass("d-none"); // ocultar mensaje
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
        $("#registro_usuario").prepend(`
          <div class="alert alert-success alert-dismissible fade show" role="alert">
            Usuario registrado correctamente.
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
          </div>
        `);
      },
      error: function () {
        $("#registro_usuario").prepend(`
          <div class="alert alert-danger alert-dismissible fade show" role="alert">
            Error al registrar el usuario.
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
          </div>
        `);
      }
    });
  });

  // Eventos para borrar validación al escribir
  $("#nombre, #apellido, #usuario, #password, #especialidad").on("input", function () {
    borrarValidacionregistro($(this).attr("id"));
  });
});







function validarCamposGrupo() {
  console.log("Ejecutando validación de grupo...");
  let valido = true;

  if ($("#NombreGrupo").val().trim() === "") {
    $("#NombreGrupo").css("background-color", "red").focus();
    $("#error-NombreGrupo").removeClass("d-none");
    valido = false;
  }

  if ($("#IdGrado").val() === "" || isNaN($("#IdGrado").val())) {
    $("#IdGrado").css("background-color", "red").focus();
    $("#error-IdGrado").removeClass("d-none");
    valido = false;
  }

  const ciclo = $("#CicloEscolar").val().trim();
  const regexCiclo = /^\d{4}-\d{4}$/;
  if (ciclo === "") {
    $("#CicloEscolar").css("background-color", "red").focus();
    $("#error-CicloEscolar").text("Te falta ingresar el ciclo escolar.").removeClass("d-none");
    valido = false;
  } else if (!regexCiclo.test(ciclo)) {
    $("#CicloEscolar").css("background-color", "red").focus();
    $("#error-CicloEscolar").text("Formato inválido. Usa el formato 2025-2026.").removeClass("d-none");
    valido = false;
  }

  return valido;
}

function borrarValidacionGrupo(campoId) {
  $("#" + campoId).css("background-color", "white");
  $("#error-" + campoId).addClass("d-none");
}


$(document).ready(function () {
  $(document).on("submit", "#form_grupo", function (e) {
    e.preventDefault();
    console.log("Ejecutando validación de grupo...");

    if (!validarCamposGrupo()) return false;

    const datos = $(this).serialize();
    console.log(datos);

    $.ajax({
      type: "POST",
      url: "../controladores/insertar_grupo.php",
      data: datos,
      xhrFields: { withCredentials: true },
      success: function (respuesta) {
        $("#form_grupo").prepend(`
          <div class="alert alert-success alert-dismissible fade show" role="alert">
            Grupo registrado correctamente.
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
          </div>
        `);
      },
      error: function () {
        $("#form_grupo").prepend(`
          <div class="alert alert-danger alert-dismissible fade show" role="alert">
            Error al registrar el grupo.
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
          </div>
        `);
      }
    });
  });

  // Resetear validación 
$(document).on("input", "#NombreGrupo, #CicloEscolar", function () {
  borrarValidacionGrupo(this.id);
});

$(document).on("change", "#IdGrado", function () {
  borrarValidacionGrupo(this.id);
});

});






function validarCamposEditarGrupo() {
  console.log("Ejecutando validación de edición...");
  let valido = true;

  if ($("#edit_NombreGrupo").val().trim() === "") {
    $("#edit_NombreGrupo").css("background-color", "red").focus();
    $("#error-edit_NombreGrupo").removeClass("d-none");
    valido = false;
  }


  if ($("#edit_IdGrado").val() === "") {
    $("#edit_IdGrado").css("background-color", "red").focus();
    $("#error-edit_IdGrado").removeClass("d-none");
    valido = false;
  }


  const ciclo = $("#edit_CicloEscolar").val().trim();
  const regexCiclo = /^\d{4}-\d{4}$/;
  if (ciclo === "") {
    $("#edit_CicloEscolar").css("background-color", "red").focus();
    $("#error-edit_CicloEscolar").text("Te falta ingresar el ciclo escolar.").removeClass("d-none");
    valido = false;
  } else if (!regexCiclo.test(ciclo)) {
    $("#edit_CicloEscolar").css("background-color", "red").focus();
    $("#error-edit_CicloEscolar").text("Formato inválido. Usa el formato 2025-2026.").removeClass("d-none");
    valido = false;
  }

  return valido;
}

function borrarValidacionGrupo(campoId) {
  $("#" + campoId).css("background-color", "white");
  $("#error-" + campoId).addClass("d-none");
}

$(document).on("click", ".editar-grupo", function () {
  const idGrupo = $(this).data("id");
 console.log("ID del grupo a editar:", idGrupo);
  $.ajax({
    type: "POST",
    url: "../controladores/obtener_grupo.php",
    data: { IdGrupo: idGrupo },
    dataType: "json",
    beforeSend: function() {
      console.log("Enviando solicitud AJAX para obtener datos del grupo...");
    },
    success: function (respuesta) {
      const grupo = respuesta.grupo;
      const grados = respuesta.grados;
      console.log("Datos recibidos para edición:", respuesta);
      // Llenar campos del grupo
      $("#edit_IdGrupo").val(grupo.IdGrupo);
      $("#edit_NombreGrupo").val(grupo.NombreGrupo);
      $("#edit_CicloEscolar").val(grupo.CicloEscolar);

      // Llenar dinámicamente el select de grados
      const selectGrado = $("#edit_IdGrado");
      selectGrado.empty().append('<option value="">-- Selecciona un grado --</option>');
      grados.forEach(g => {
        selectGrado.append(`
          <option value="${g.IdGrado}">
            ${g.NombreGrado} - ${g.Nivel}
          </option>
        `);
      });

      // Seleccionar el grado actual del grupo
      selectGrado.val(grupo.IdGrado);
     console.log("Cargando datos del grupo para edición:", grupo);
      // Mostrar modal
      $("#modalEditarGrupo").modal("show");
    },
    error: function () {
      $("#form_editar_grupo").prepend(`
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
          Error al obtener datos del grupo.
          <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        </div>
      `);
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
      $("#form_editar_grupo").prepend(`
        <div class="alert alert-success alert-dismissible fade show" role="alert">
          Grupo actualizado correctamente.
          <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        </div>
      `);
      setTimeout(() => location.reload(), 1500);
    },
    error: function () {
      $("#form_editar_grupo").prepend(`
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
          Error al actualizar el grupo.
          <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        </div>
      `);
    }
  });
});

// Resetear validación al escribir/cambiar
$(document).on("input", "#edit_NombreGrupo, #edit_CicloEscolar", function () {
  borrarValidacionGrupo(this.id);
});

$(document).on("change", "#edit_IdGrado", function () {
  borrarValidacionGrupo(this.id);
});








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
  let valido = true;

  // Nombre
  if ($("#Nombre").val().trim() === "") {
    $("#Nombre").css("background-color", "red").focus();
    $("#error-Nombre").removeClass("d-none");
    valido = false;
  }

  // Apellido
  if ($("#Apellido").val().trim() === "") {
    $("#Apellido").css("background-color", "red").focus();
    $("#error-Apellido").removeClass("d-none");
    valido = false;
  }

  // Sexo
  const sexo = $("#Sexo").val();
  if (sexo !== "M" && sexo !== "F") {
    $("#Sexo").css("background-color", "red").focus();
    $("#error-Sexo").removeClass("d-none");
    valido = false;
  }

  // Fecha de nacimiento
  const fecha = $("#FechaNacimiento").val();
  if (!fecha) {
    $("#FechaNacimiento").css("background-color", "red").focus();
    $("#error-FechaNacimiento").removeClass("d-none");
    valido = false;
  }

  // CURP
  const curp = $("#CURP").val().trim().toUpperCase();
  const regexCURP = /^[A-Z]{4}\d{6}[HM][A-Z]{5}[A-Z0-9]{2}$/;
  if (!regexCURP.test(curp)) {
    $("#CURP").css("background-color", "red").focus();
    $("#error-CURP").removeClass("d-none");
    valido = false;
  }

  // Grupo
  if ($("#IdGrupo").val() === "") {
    $("#IdGrupo").css("background-color", "red").focus();
    $("#error-IdGrupo").removeClass("d-none");
    valido = false;
  }

  return valido;
}

function borrarValidacionAlumno(campoId) {
  $("#" + campoId).css("background-color", "white");
  $("#error-" + campoId).addClass("d-none");
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
        $("#form_registro_alumno").prepend(`
          <div class="alert alert-success alert-dismissible fade show" role="alert">
            Alumno registrado correctamente.
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
          </div>
        `);
        $("#form_registro_alumno")[0].reset();
      },
      error: function () {
        $("#form_registro_alumno").prepend(`
          <div class="alert alert-danger alert-dismissible fade show" role="alert">
            Error al registrar alumno.
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
          </div>
        `);
      }
    });
  });

  // Resetear validación al escribir/cambiar
  $(document).on("input", "#Nombre, #Apellido, #CURP, #FechaNacimiento", function () {
    borrarValidacionAlumno(this.id);
  });

  $(document).on("change", "#Sexo, #IdGrupo", function () {
    borrarValidacionAlumno(this.id);
  });
});





// Validaciones para la edición de los alumnos
function cargarAlumnosPorGrupo(idGrupo) {
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
}

$(document).on("click", "#btnCargarGrupo", function () {
  const idGrupo = $("#grupoSeleccionado").val();
  cargarAlumnosPorGrupo(idGrupo);
});



function validarCamposEditarAlumno() {
  let valido = true;

  if ($("#editNombre").val().trim() === "") {
    $("#editNombre").css("background-color", "red").focus();
    $("#error-editNombre").removeClass("d-none");
    valido = false;
  }

  if ($("#editApellido").val().trim() === "") {
    $("#editApellido").css("background-color", "red").focus();
    $("#error-editApellido").removeClass("d-none");
    valido = false;
  }

  const sexo = $("#editSexo").val();
  if (sexo !== "M" && sexo !== "F") {
    $("#editSexo").css("background-color", "red").focus();
    $("#error-editSexo").removeClass("d-none");
    valido = false;
  }

  const fecha = $("#editFecha").val();
  if (!fecha) {
    $("#editFecha").css("background-color", "red").focus();
    $("#error-editFecha").removeClass("d-none");
    valido = false;
  }

  const curp = $("#editCURP").val().trim().toUpperCase();
  const regexCURP = /^[A-Z]{4}\d{6}[HM][A-Z]{5}[A-Z0-9]{2}$/;
  if (!regexCURP.test(curp)) {
    $("#editCURP").css("background-color", "red").focus();
    $("#error-editCURP").removeClass("d-none");
    valido = false;
  }

  return valido;
}


function borrarValidacionEditarAlumno(campoId) {
  $("#" + campoId).css("background-color", "white");
  $("#error-" + campoId).addClass("d-none");
}

// Abrir modal con datos
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
      $("#formEditarAlumno").prepend(`
        <div class="alert alert-success alert-dismissible fade show" role="alert">
          Alumno actualizado correctamente.
          <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        </div>
      `);
      $("#modalEditarAlumno").modal("hide");
      $("#btnCargarGrupo").trigger("click");
    },
    error: function () {
      $("#formEditarAlumno").prepend(`
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
          Error al actualizar el alumno.
          <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        </div>
      `);
    }
  });
});

// Limpieza visual
$(document).on("input", "#editNombre, #editApellido, #editCURP, #editFecha", function () {
  borrarValidacionEditarAlumno(this.id);
});
$(document).on("change", "#editSexo", function () {
  borrarValidacionEditarAlumno(this.id);
});

// Eliminar alumno
function eliminarAlumno(idAlumno, idGrupo) {
  if (confirm("¿Seguro que deseas eliminar este alumno?")) {
    $.ajax({
      type: "POST",
      url: "../controladores/eliminar_alumno.php",
      data: { IdAlumno: idAlumno, IdGrupo: idGrupo },
      success: function (respuesta) {
        // Mensaje 
        $("#tablaAlumnos").before(`
          <div class="alert alert-success alert-dismissible fade show" role="alert">
            ${respuesta}
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
          </div>
        `);
        // Recargar la lista de alumnos del grupo
        $("#btnCargarGrupo").trigger("click");
      },
      error: function () {
        // Mensaje de error
        $("#tablaAlumnos").before(`
          <div class="alert alert-danger alert-dismissible fade show" role="alert">
            Error al eliminar el alumno.
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
          </div>
        `);
      }
    });
  }
}


$(document).on("click", ".eliminar-alumno", function () {
  const idAlumno = $(this).data("id");
  const idGrupo  = $(this).data("grupo");
  eliminarAlumno(idAlumno, idGrupo);
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

