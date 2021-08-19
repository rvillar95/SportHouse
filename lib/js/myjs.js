function IniciarSesion() {
    var rut = $("#rutUsuario").val();
    var clave = $("#clave").val();
    if (rut == "" || clave == "") {
        alert("ingresa todos los datos");
    } else {
        $.ajax({
            url: 'http://127.0.0.1/SportHouse/index.php/iniciarSesion',
            type: 'POST',
            dataType: 'json',
            data: {"rut": rut, "clave": clave}
        }).then(function (msg) {
            if (msg.msg == "error") {
                $.notify({
                    icon: "lib/img/warning.png",
                    message: "<strong>Error al ingresar al sistema, intentelo nuevamente</strong>"
                }, {
                    icon_type: 'image',
                    type: "warning"
                });
            } else if (msg.msg == "administrador") {
                window.location.href = 'http://127.0.0.1/SportHouse/index.php/Administrador';
            } else if (msg.msg == "entrenador") {
                window.location.href = 'http://127.0.0.1/SportHouse/index.php/Entrenador';
            } else if (msg.msg == "socio") {
                window.location.href = 'http://127.0.0.1/SportHouse/index.php/Socio';
            } else if (msg.msg == "profesor") {
                window.location.href = 'http://127.0.0.1/SportHouse/index.php/Profesor';
            } else if (msg.msg == "inactivo") {
                $.notify({
                    icon: "lib/img/no.png",
                    message: "<strong>Su cuenta se encuentra Inactiva, comuniquese con algun Administrador.</strong>"
                }, {
                    icon_type: 'image',
                    type: "danger"
                });
            } else if (msg.msg == "2") {
                $('#modal-session').modal('toggle');
                $("#selectSession").empty();
                var fila = "<option disabled selected>Seleccione el Rol</option>";
                $.each(msg.user, function (i, o) {
                    fila += "<option value='" + o.idTipo + "'>" + o.descripcion + "</option>";
                });
                $("#selectSession").append(fila);
            } else if (msg.msg == "3") {
                $('#modal-session').modal('toggle');
                $("#selectSession").empty();
                var fila = "<option disabled selected>Seleccione el Rol</option>";
                $.each(msg.user, function (i, o) {
                    fila += "<option value='" + o.idTipo + "'>" + o.descripcion + "</option>";
                });
                $("#selectSession").append(fila);
            } else if (msg.msg == "4") {
                $('#modal-session').modal('toggle');
                $("#selectSession").empty();
                var fila = "<option disabled selected>Seleccione el Rol</option>";
                $.each(msg.user, function (i, o) {
                    fila += "<option value='" + o.idTipo + "'>" + o.descripcion + "</option>";
                });
                $("#selectSession").append(fila);
            }

        });
    }
}

function ingresoMultiple() {
    var rut = $("#rutUsuario").val();
    var clave = $("#clave").val();
    var tipo = $("#selectSession").val();
    if (rut == "" || clave == "" || tipo == null) {
        alert("ingresa todos los datos");
    } else {
        $.ajax({
            url: 'http://127.0.0.1/SportHouse/index.php/sesionMultiple',
            type: 'POST',
            dataType: 'json',
            data: {"rut": rut, "clave": clave, "tipo": tipo}
        }).then(function (msg) {
            if (msg.msg == "error") {
                $.notify({
                    icon: "lib/img/no.png",
                    message: "<strong>Error, verifique su clave.</strong>"
                }, {
                    icon_type: 'image',
                    type: "danger"
                });
            } else if (msg.msg == "administrador") {
                window.location.href = 'http://127.0.0.1/SportHouse/index.php/Administrador';
            } else if (msg.msg == "entrenador") {
                window.location.href = 'http://127.0.0.1/SportHouse/index.php/Entrenador';
            } else if (msg.msg == "socio") {
                window.location.href = 'http://127.0.0.1/SportHouse/index.php/Socio';
            } else if (msg.msg == "profesor") {
                window.location.href = 'http://127.0.0.1/SportHouse/index.php/Profesor';
            }
        });
    }
}

function salir() {
    $.ajax({
        url: 'http://127.0.0.1/SportHouse/index.php/cerrarSesion', type: 'POST', dataType: 'json', data: {}
    }).then(function (msg) {

    });
    window.location.href = 'http://127.0.0.1/SportHouse/';
}

function RegistrarUsuario() {
    var rol1 = $('input:radio[name=radio1]:checked').val();
    var rol2 = $('input:radio[name=radio2]:checked').val();
    var rol3 = $('input:radio[name=radio3]:checked').val();
    var rol4 = $('input:radio[name=radio4]:checked').val();
    var rutUsuario = $("#rutUsuario").val();
    var nombreUsuario = $("#nombreUsuario").val();
    var apellidoUsuario = $("#apellidoUsuario").val();
    var fechaNacimiento = $("#fechaNacimientoUsuario").val();
    var correoUsuario = $("#correoUsuario").val();
    var claveUsuario = $("#claveUsuario").val();
    var ocupacion = $("#selectOcupacion").val();
    var estado = "1";
    if (rutUsuario == "" || nombreUsuario == "" || apellidoUsuario == "" || correoUsuario == "" || ocupacion == "" || fechaNacimiento == "" || claveUsuario == "") {
        $.notify({
            icon: "../lib/img/warning.png",
            message: "<strong>Ingrese los datos pedidos</strong> "
        }, {
            icon_type: 'image',
            type: "warning"
        });
    } else {
        $.ajax({
            url: 'http://127.0.0.1/SportHouse/index.php/validarRut',
            type: 'POST',
            dataType: 'json',
            data: {"rut": rutUsuario}
        }).then(function (msg) {
            var resultado;
            for (var key in msg.msg) {
                var obj = msg.msg[key];
                for (var prop in obj) {
                    if (obj.hasOwnProperty(prop)) {
                        resultado = obj[prop];
                    }
                }
            }
            if (resultado == 0) {
                $.ajax({
                    url: 'http://127.0.0.1/SportHouse/index.php/addUser',
                    type: 'POST',
                    dataType: 'json',
                    data: {"rutUsuario": rutUsuario, "nombreUsuario": nombreUsuario, "apellidoUsuario": apellidoUsuario, "fechaNacimiento": fechaNacimiento, "correoUsuario": correoUsuario, "claveUsuario": claveUsuario, "ocupacion": ocupacion, "estado": estado, "rol1": rol1, "rol2": rol2, "rol3": rol3, "rol4": rol4}
                }).then(function (msg) {
                    if (msg.msg == "ok") {
                        $.notify({
                            icon: "../lib/img/tick2.png",
                            message: "<strong>Usuario Registrado con Exito!!!</strong> "
                        }, {
                            icon_type: 'image',
                            type: "success"
                        });
                        $("#rutUsuario").val("");
                        $("#nombreUsuario").val("");
                        $("#apellidoUsuario").val("");
                        $("#fechaNacimientoUsuario").val("");
                        $("#fechaNacimientoUsuario").val("");
                        $("#correoUsuario").val("");
                        $("#claveUsuario").val("");
                        $("#selectOcupacion").val();
                    } else {
                        $.notify({
                            icon: "../lib/img/no.png",
                            message: "<strong>Seleccione un Rol</strong>"
                        }, {
                            icon_type: 'image',
                            type: "danger"
                        });
                    }
                });
            } else {
                $.notify({
                    icon: "../lib/img/no.png",
                    message: "<strong>Rut Ya Registrado.</strong>"
                }, {
                    icon_type: 'image',
                    type: "danger"
                });
            }
        });


    }
}

function getSelectTipo() {
    var hola = 'http://127.0.0.1/SportHouse/index.php/getTipo';
    $("#roles").empty();
    var fila = "";

    $.getJSON(hola, function (result) {
        $.each(result, function (i, o) {
            fila += "<div class='form-check'>";
            fila += "<input type='radio' name='radio" + o.idTipo + "' id='rol" + o.idTipo + "' value='" + o.idTipo + "' onclick='uncheckRadio(this)'>" + o.descripcion + "";

            fila += "</div>";
        });
        $("#roles").append(fila);
    });
}

function getSelectOcupacion() {
    var hola = 'http://127.0.0.1/SportHouse/index.php/getOcupacion';
    $("#selectOcupacion").empty();
    var fila = "<option disabled selected>Seleccione la Ocupacion</option>";
    $.getJSON(hola, function (result) {
        $.each(result, function (i, o) {
            fila += "<option value='" + o.idOcupacion + "'>" + o.descripcion + "</option>";
        });
        $("#selectOcupacion").append(fila);
    });
}

function checkRut(rut) {
    var rutUsuario = $("#rutUsuario").val();
    $.ajax({
        url: 'http://127.0.0.1/SportHouse/index.php/validarRut',
        type: 'POST',
        dataType: 'json',
        data: {"rut": rutUsuario}
    }).then(function (msg) {
        var resultado;
        for (var key in msg.msg) {
            var obj = msg.msg[key];
            for (var prop in obj) {
                if (obj.hasOwnProperty(prop)) {
                    resultado = obj[prop];
                }
            }
        }
        if (resultado == 0) {
            // Despejar Puntos
            var valor = rut.value.replace('.', '');
            // Despejar Guión
            valor = valor.replace('-', '');

            // Aislar Cuerpo y Dígito Verificador
            cuerpo = valor.slice(0, -1);
            dv = valor.slice(-1).toUpperCase();

            // Formatear RUN
            rut.value = cuerpo + '-' + dv

            // Si no cumple con el mínimo ej. (n.nnn.nnn)
            if (cuerpo.length < 7) {
                $("#div_rut").empty();
                var fila = '<label>Rut Incompleto</label><br/>';
                fila += '<img src="http://127.0.0.1/SportHouse/lib/img/warning.png" style="height: 25px; width: 25px;">';
                $("#div_rut").append(fila);

                $("#rutUsuario").val("");
                $('#btnAgregarUsuario').attr("disabled", true);
                return false;
            }

            // Calcular Dígito Verificador
            suma = 0;
            multiplo = 2;

            // Para cada dígito del Cuerpo
            for (i = 1; i <= cuerpo.length; i++) {

                // Obtener su Producto con el Múltiplo Correspondiente
                index = multiplo * valor.charAt(cuerpo.length - i);

                // Sumar al Contador General
                suma = suma + index;

                // Consolidar Múltiplo dentro del rango [2,7]
                if (multiplo < 7) {
                    multiplo = multiplo + 1;
                } else {
                    multiplo = 2;
                }

            }

            // Calcular Dígito Verificador en base al Módulo 11
            dvEsperado = 11 - (suma % 11);

            // Casos Especiales (0 y K)
            dv = (dv == 'K') ? 10 : dv;
            dv = (dv == 0) ? 11 : dv;

            // Validar que el Cuerpo coincide con su Dígito Verificador
            if (dvEsperado != dv) {
                $("#div_rut").empty();
                var fila = '<label>Rut Invalido</label><br/>';
                fila += '<img src="http://127.0.0.1/SportHouse/lib/img/negativo.png" style="height: 25px; width: 25px;">';
                $("#div_rut").append(fila);
                $("#rutUsuario").val("");
                $('#btnAgregarUsuario').attr("disabled", true);
                return false;
            }

            // Si todo sale bien, eliminar errores (decretar que es válido)
            $("#div_rut").empty();

            var fila = '<label>Rut Valido</label><br/>';
            fila += '<img src="http://127.0.0.1/SportHouse/lib/img/tick.png" style="height: 25px; width: 25px;">';
            $("#div_rut").append(fila);

            var element = document.getElementById("btnAgregarUsuario");
            element.classList.remove("disabled");
        } else {
            $("#div_rut").empty();
            var fila = '<label>Rut Ya Registrado</label><br/>';
            fila += '<img src="http://127.0.0.1/SportHouse/lib/img/negativo.png" style="height: 25px; width: 25px;">';
            $("#div_rut").append(fila);
            $('#btnAgregarUsuario').attr("disabled", true);
        }
    });



}

function getSelectDia() {
    var hola = 'http://127.0.0.1/SportHouse/index.php/getDia';
    $("#selectDia").empty();
    $("#selectDia2").empty();
    var fila = "<option disabled selected>Seleccione el Día</option>";
    $.getJSON(hola, function (result) {
        $.each(result, function (i, o) {
            fila += "<option value='" + o.idDia + "'>" + o.dia + "</option>";
        });
        $("#selectDia").append(fila);
        $("#selectDia2").append(fila);
    });
}

function getSelectSalon() {
    var hola = 'http://127.0.0.1/SportHouse/index.php/getSalon';
    $("#selectSalon").empty();
    $("#selectSalon2").empty();
    var fila = "<option disabled selected>Seleccione el Salon</option>";
    $.getJSON(hola, function (result) {
        $.each(result, function (i, o) {
            fila += "<option value='" + o.idSalon + "'>" + o.nombre + "</option>";
        });
        $("#selectSalon").append(fila);
        $("#selectSalon2").append(fila);
    });
}

function getSelectProfesor() {
    var hola = 'http://127.0.0.1/SportHouse/index.php/getProfesor';
    $("#selectProfesor").empty();
    $("#selectProfesor2").empty();
    var fila = "<option disabled selected>Seleccione el Profesor</option>";
    $.getJSON(hola, function (result) {
        $.each(result, function (i, o) {
            fila += "<option value='" + o.idUsuario + "'>" + o.nombre + " " + o.apellido + "</option>";
        });
        $("#selectProfesor").append(fila);
        $("#selectProfesor2").append(fila);
    });
}

function getSelectOcupacionEdit() {
    var hola = 'http://127.0.0.1/SportHouse/index.php/getOcupacion';
    $("#getOcupacion").empty();
    var fila = "<option disabled selected>Seleccione la Ocupacion</option>";
    $.getJSON(hola, function (result) {
        $.each(result, function (i, o) {
            fila += "<option value='" + o.idOcupacion + "'>" + o.descripcion + "</option>";
        });
        $("#getOcupacion").append(fila);
    });
}

function getSelectEstado() {
    var hola = 'http://127.0.0.1/SportHouse/index.php/getEstado';
    $("#getEstado").empty();
    var fila = "<option disabled selected>Seleccione el Estado</option>";
    $.getJSON(hola, function (result) {
        $.each(result, function (i, o) {
            fila += "<option value='" + o.idEstado + "'>" + o.descripcion + "</option>";
        });
        $("#getEstado").append(fila);
    });
}

function getSelectHora() {
    $("#selectHora").empty();
    $("#selectHora2").empty();
    var fila = "<option disabled selected>Seleccione la Hora</option>";
    for (var i = 8; i < 23; i++) {
        fila += "<option value='" + i + ":00'>" + i + ":00</option>";
    }

    $("#selectHora2").append(fila);
    $("#selectHora").append(fila);

}

function EditarUsuario() {
    var id = $("#id").val();
    var rutUsuario = $("#rutU").val();
    var nombreUsuario = $("#nombreU").val();
    var apellidoUsuario = $("#apellido").val();
    var fechaNacimiento = $("#fechaU").val();
    var correoUsuario = $("#correo").val();
    var clave = $("#claveU").val();
    var estado = $("#getEstado").val();
    var ocupacion = $("#getOcupacion").val();
    if (id == "" || rutUsuario == "" || nombreUsuario == "" || apellidoUsuario == "" || correoUsuario == "" || ocupacion == null || fechaNacimiento == "" || estado == null || clave == "") {
        $.notify({
            icon: "../lib/img/warning.png",
            message: "<strong>Ingrese los datos pedidos</strong> "
        }, {
            icon_type: 'image',
            type: "warning"
        });
    } else {
        $.ajax({
            url: 'http://127.0.0.1/SportHouse/index.php/editUser',
            type: 'POST',
            dataType: 'json',
            data: {"id": id, "rutUsuario": rutUsuario, "nombreUsuario": nombreUsuario, "apellidoUsuario": apellidoUsuario, "fechaNacimiento": fechaNacimiento, "correoUsuario": correoUsuario, "clave": clave, "ocupacion": ocupacion, "estado": estado}
        }).then(function (msg) {
            if (msg.msg == "ok") {
                $.notify({
                    icon: "../lib/img/tick2.png",
                    message: "<strong>Usuario Editado con Exito!!!</strong> "
                }, {
                    icon_type: 'image',
                    type: "success"
                });
            } else {
                $.notify({
                    icon: "../lib/img/no.png",
                    message: "<strong>Error al ingresar al sistema, intentelo nuevamente</strong>"
                }, {
                    icon_type: 'image',
                    type: "danger"
                });
            }
        });
    }
}

function RegistrarClase() {
    var nombreClase = $("#nombreClase").val();
    var dia = $("#selectDia").val();
    var hora = $("#selectHora").val();
    var salon = $("#selectSalon").val();
    var profesor = $("#selectProfesor").val();
    var asistentes = 0;
    if (nombreClase == "" || dia == null || hora == null || salon == null || profesor == null) {
        $.notify({
            icon: "../lib/img/warning.png",
            message: "<strong>Ingrese los datos pedidos</strong> "
        }, {
            icon_type: 'image',
            type: "warning"
        });
    } else {
        $.ajax({
            url: 'http://127.0.0.1/SportHouse/index.php/addClase',
            type: 'POST',
            dataType: 'json',
            data: {"nombreClase": nombreClase, "asistentes": asistentes, "dia": dia, "hora": hora, "salon": salon, "profesor": profesor}
        }).then(function (msg) {
            if (msg.msg == "ok") {
                $.notify({
                    icon: "../lib/img/tick2.png",
                    message: "<strong>Clase Registrada con Exito!!!</strong> "
                }, {
                    icon_type: 'image',
                    type: "success"
                });
                table.ajax.reload(null, false);


            } else {
                $.notify({
                    icon: "../lib/img/no.png",
                    message: "<strong>Error al ingresar al sistema, intentelo nuevamente</strong>"
                }, {
                    icon_type: 'image',
                    type: "danger"
                });
            }
        });
    }
}

function EditarClase() {
    var id = $("#idC").val();
    var nombre = $("#nombreC").val();
    var asistentes = $("#asistentesC").val();
    var dia = $("#selectDia2").val();
    var hora = $("#selectHora2").val();
    var salon = $("#selectSalon2").val();
    var profesor = $("#selectProfesor2").val();
    if (id == "" || nombre == "" || asistentes == "" || dia == null || hora == null || salon == null || profesor == null) {
        $.notify({
            icon: "../lib/img/warning.png",
            message: "<strong>Ingrese los datos pedidos</strong> "
        }, {
            icon_type: 'image',
            type: "warning"
        });
    } else {
        $.ajax({
            url: 'http://127.0.0.1/SportHouse/index.php/editClase',
            type: 'POST',
            dataType: 'json',
            data: {"id": id, "nombre": nombre, "asistentes": asistentes, "dia": dia, "hora": hora, "salon": salon, "profesor": profesor}
        }).then(function (msg) {
            if (msg.msg == "ok") {
                $.notify({
                    icon: "../lib/img/tick2.png",
                    message: "<strong>Clase Editada con Exito!!!</strong> "
                }, {
                    icon_type: 'image',
                    type: "success"
                });
            } else {
                $.notify({
                    icon: "../lib/img/no.png",
                    message: "<strong>Error al ingresar al sistema, intentelo nuevamente</strong>"
                }, {
                    icon_type: 'image',
                    type: "danger"
                });
            }
        });
    }
}

function eliminarClase(id) {
    var idClase = id;
    $.ajax({
        url: 'http://127.0.0.1/SportHouse/index.php/eliminarEmpleado',
        type: 'POST',
        dataType: 'json',
        data: {"id": idClase},
        success: function (msg) {
            if (msg.msg == "ok") {
                $.notify({
                    icon: "../lib/img/tick2.png",
                    message: "<strong>Clase Eliminada con Exito!!!</strong> "
                }, {
                    icon_type: 'image',
                    type: "success"
                });
            }
        },
        error: function () {
            $.notify({
                icon: "../lib/img/no.png",
                message: "<strong>Error al ingresar al sistema, intentelo nuevamente</strong>"
            }, {
                icon_type: 'image',
                type: "danger"
            });
        }
    });
}

function getOferta() {
    var hola = 'http://127.0.0.1/SportHouse/index.php/verOferta';
    $("#tbodyOferta").empty();
    $.getJSON(hola, function (result) {
        $.each(result, function (i, o) {
            var fila = "<tr><td style='display:none;'>" + o.idOferta + "</td>";
            fila += "<td >" + o.nombre + "</td>";
            fila += "<td >" + o.descripcion + "</td>";
            fila += "<td ><img src='http://127.0.0.1/SportHouse/lib/img/Ofertas/" + o.imagen + "'  class=' img-responsive img-thumbnail'></td>";
            fila += '<td ><button type="button" id="btnEditarOferta" class="btn btn-info" value="' + o.idOferta + "," + o.nombre + "," + o.imagen + "," + o.estadoOferta + '" data-toggle="modal" data-target="#modal-oferta"><i class="glyphicon glyphicon-pencil"></i></button><button type="button" value="' + o.idOferta + "," + o.imagen + '" id="btnEliminarOferta" class="btn btn-danger" data-toggle="modal" data-target="#modal-eliminar"><i class="glyphicon glyphicon-trash"></i></button>';
            $("#tbodyOferta").append(fila);
        });
    });
}

function eliminarOferta(id, imagen) {
    var idOferta = id;
    var imagen = imagen;
    $.ajax({
        url: 'http://127.0.0.1/SportHouse/index.php/eliminarOferta',
        type: 'POST',
        dataType: 'json',
        data: {"idOferta": idOferta, "imagen": imagen},
        success: function (msg) {
            if (msg.msg == "ok") {
                $('#modal-eliminar').modal('toggle');
                getOferta();
                $.notify({
                    icon: "../lib/img/tick2.png",
                    message: "<strong>Oferta Eliminada con Exito!!!</strong> "
                }, {
                    icon_type: 'image',
                    type: "success"
                });
            }
        },
        error: function () {
            alert("Error, rellene todos los campos");
        }
    });

}

function EditarOferta() {
    var id = $("#idOferta").val();
    var nombre = $("#nombreOferta").val();
    var estado = $("#getEstado").val();
    if (id == "" || nombre == "" || estado == null) {
        $.notify({
            icon: "../lib/img/warning.png",
            message: "<strong>Ingrese los datos pedidos</strong> "
        }, {
            icon_type: 'image',
            type: "warning"
        });
    } else {
        $.ajax({
            url: 'http://127.0.0.1/SportHouse/index.php/editOferta',
            type: 'POST',
            dataType: 'json',
            data: {"id": id, "nombre": nombre, "estado": estado}
        }).then(function (msg) {
            if (msg.msg == "ok") {
                $('#modal-oferta').modal('toggle');
                getOferta();
                $.notify({
                    icon: "../lib/img/tick2.png",
                    message: "<strong>Oferta Editada con Exito!!!</strong> "
                }, {
                    icon_type: 'image',
                    type: "success"
                });
            } else {
                $.notify({
                    icon: "../lib/img/no.png",
                    message: "<strong>Error al ingresar al sistema, intentelo nuevamente</strong>"
                }, {
                    icon_type: 'image',
                    type: "danger"
                });
            }
        });
    }
}

function getUsuariosConsejos() {
    var hola = 'http://127.0.0.1/SportHouse/index.php/getUsuarioConsejo';
    $("#selectUsuarios").empty();
    var fila = "<option disabled selected>Seleccione los Usuarios</option>";
    $.getJSON(hola, function (result) {
        $.each(result, function (i, o) {
            fila += "<option value='" + o.id + "'>" + o.nombreUsuario + "</option>";
        });
        $("#selectUsuarios").append(fila);
    });
}

function getConsejosXadmin() {
    var id = $("#idusuario").val();
    var vueltas = 1;
    if (id == "") {
        $.notify({
            icon: "../lib/img/warning.png",
            message: "<strong>Ingrese los datos pedidos</strong> "
        }, {
            icon_type: 'image',
            type: "warning"
        });
    } else {
        $.ajax({
            url: 'http://127.0.0.1/SportHouse/index.php/getConsejosXadmin',
            type: 'POST',
            dataType: 'json',
            data: {"id": id}
        }).then(function (msg) {
            $("#tbodyConsejos").empty();
            $.each(msg, function (i, o) {
                var fila = "<tr><td style='display:none;'>" + o.idConsejo + "</td>";
                fila += "<td >" + o.titulo + "</td>";
                fila += "<td >" + o.descripcion + "</td>";
                fila += "<td ><img src='http://127.0.0.1/SportHouse/lib/img/Consejos/" + o.imagen + "'  style='height: 100px; width: 125px;'></td>";
                fila += "<td >" + o.nombreUsuario + "</td>";
                fila += '<td ><button type="button" id="btnEditarConsejo" class="btn btn-info" value="' + o.idConsejo + "," + o.titulo + "," + o.descripcion + "," + o.imagen + "," + o.estado + '" data-toggle="modal" data-target="#modal-consejo"><i class="glyphicon glyphicon-pencil"></i></button>';
                $("#tbodyConsejos").append(fila);
                vueltas = vueltas + 1;
            });

        });
      
    }




}

function getConsejosXadminInactivos() {
    var id = $("#idusuario").val();
    if (id == "") {
        $.notify({
            icon: "../lib/img/warning.png",
            message: "<strong>Ingrese los datos pedidos</strong> "
        }, {
            icon_type: 'image',
            type: "warning"
        });
    } else {
        $.ajax({
            url: 'http://127.0.0.1/SportHouse/index.php/getConsejosInactivos',
            type: 'POST',
            dataType: 'json',
            data: {"id": id}
        }).then(function (msg) {
            $("#tbodyConsejosInactivos").empty();
            $.each(msg, function (i, o) {
                var fila = "<tr><td style='display:none;'>" + o.idConsejo + "</td>";
                fila += "<td >" + o.titulo + "</td>";
                fila += "<td >" + o.descripcion + "</td>";
                fila += "<td ><img src='http://127.0.0.1/SportHouse/lib/img/Consejos/" + o.imagen + "'  style='height: 100px; width: 125px;'></td>";
                fila += "<td >" + o.nombreUsuario + "</td>";
                fila += '<td ><button type="button" id="btnEditarConsejo" class="btn btn-info" value="' + o.idConsejo + "," + o.titulo + "," + o.descripcion + "," + o.imagen + "," + o.estado + '" data-toggle="modal" data-target="#modal-consejo"><i class="glyphicon glyphicon-pencil"></i></button>';
                $("#tbodyConsejosInactivos").append(fila);
            });
        });
    }
}

function DetalleConsejos() {
    var id = $("#idConsejoDetalle").val();
    if (id == "") {
        $.notify({
            icon: "../lib/img/warning.png",
            message: "<strong>Ingrese los datos pedidos</strong> "
        }, {
            icon_type: 'image',
            type: "warning"
        });
    } else {
        $.ajax({
            url: 'http://127.0.0.1/SportHouse/index.php/getDetalleConsejos',
            type: 'POST',
            dataType: 'json',
            data: {"id": id}
        }).then(function (msg) {
            $("#listaSocios").empty();
            var fila = '<label for="fechaU">Usuarios a los cuales se les a enviado este Consejo:</label>';
            fila += '<textarea class="form-control" rows="3" disabled>';
            $.each(msg, function (i, o) {
                fila += o.nombreUsuario + '\n';
            });
            fila += '</textarea>';
            $("#listaSocios").append(fila);
            $("#listaSocios").toggle();

        });
    }
}

function eliminarConsejo(id, imagen) {
    var idConsejo = id;
    var imagen = imagen;
    $.ajax({
        url: 'http://127.0.0.1/SportHouse/index.php/eliminarConsejos',
        type: 'POST',
        dataType: 'json',
        data: {"id": idConsejo, "imagen": imagen},
        success: function (msg) {
            if (msg.msg == "ok") {
                $('#modal-eliminar').modal('toggle');
                getConsejosXadmin();
                $.notify({
                    icon: "../lib/img/tick2.png",
                    message: "<strong>Consejo Eliminado con Exito!!!</strong> "
                }, {
                    icon_type: 'image',
                    type: "success"
                });
            }
        },
        error: function () {
            alert("Error, rellene todos los campos");
        }
    });

}


function EditarConsejo() {
    var id = $("#idConsejoDetalle").val();
    var nombre = $("#nombreConsejo").val();
    var consejo = $("#detalleConsejo").val();
    var estado = $("#getEstado").val();
    if (id == "" || nombre == "" || consejo == "" || estado == null) {
        $.notify({
            icon: "../lib/img/warning.png",
            message: "<strong>Ingrese los datos pedidos</strong> "
        }, {
            icon_type: 'image',
            type: "warning"
        });
    } else {
        $.ajax({
            url: 'http://127.0.0.1/SportHouse/index.php/editConsejo',
            type: 'POST',
            dataType: 'json',
            data: {"id": id, "nombre": nombre, "consejo": consejo, "estado": estado}
        }).then(function (msg) {
            if (msg.msg == "ok") {
                $('#modal-consejo').modal('toggle');
                getConsejosXadmin();
                getConsejosXadminInactivos();
                $.notify({
                    icon: "../lib/img/tick2.png",
                    message: "<strong>Consejo Editado con Exito!!!</strong> "
                }, {
                    icon_type: 'image',
                    type: "success"
                });
            } else {
                $.notify({
                    icon: "../lib/img/no.png",
                    message: "<strong>Error al ingresar al sistema, intentelo nuevamente</strong>"
                }, {
                    icon_type: 'image',
                    type: "danger"
                });
            }
        });
    }
}

function agregarControl() {
    var peso = $("#peso").val();
    var porcentajeGrasa = $("#porcentajeGrasa").val();
    var pecho = $("#pecho").val();
    var cintura = $("#cintura").val();
    var cadera = $("#cadera").val();
    var muslo = $("#muslo").val();
    var brazo = $("#brazo").val();
    var eBiolog = $("#eBiolog").val();
    var mMusc = $("#mMusc").val();
    var gVicer = $("#gVicer").val();
    var calorias = $("#calorias").val();
    var imc = $("#imc").val();
    var usuario = $("#selectUsuarios").val();
    var entrenador = $("#idusuario").val();
    if (peso == "" || porcentajeGrasa == "" || pecho == "" || cintura == "" || cadera == "" || muslo == "" || brazo == "" || eBiolog == "" || mMusc == "" || gVicer == "" || calorias == "" || imc == "") {
        $.notify({
            icon: "../lib/img/warning.png",
            message: "<strong>Ingrese los datos pedidos</strong> "
        }, {
            icon_type: 'image',
            type: "warning"
        });
    } else {
        $.ajax({
            url: 'http://127.0.0.1/SportHouse/index.php/agregarControl',
            type: 'POST',
            dataType: 'json',
            data: {"peso": peso, "porcentajeGrasa": porcentajeGrasa, "pecho": pecho, "cintura": cintura, "cadera": cadera, "muslo": muslo, "brazo": brazo, "eBiolog": eBiolog, "mMusc": mMusc, "gVicer": gVicer, "calorias": calorias, "imc": imc, "usuario": usuario, "entrenador": entrenador}
        }).then(function (msg) {
            if (msg.msg == "ok") {
                getConsejosXadmin();
                $.notify({
                    icon: "../lib/img/tick2.png",
                    message: "<strong>Control Agregado con Exito!!!</strong> "
                }, {
                    icon_type: 'image',
                    type: "success"
                });
            } else {
                $.notify({
                    icon: "../lib/img/no.png",
                    message: "<strong>Error al ingresar al sistema, intentelo nuevamente</strong>"
                }, {
                    icon_type: 'image',
                    type: "danger"
                });
            }
        });
    }
}

function checkRutLogin(rut) {
    var rutUsuario = $("#rutUsuario").val();
    $.ajax({
        url: 'http://127.0.0.1/SportHouse/index.php/validarRut',
        type: 'POST',
        dataType: 'json',
        data: {"rut": rutUsuario}
    }).then(function (msg) {
        var resultado;
        for (var key in msg.msg) {
            var obj = msg.msg[key];
            for (var prop in obj) {
                if (obj.hasOwnProperty(prop)) {
                    resultado = obj[prop];
                }
            }
        }
        if (resultado == 0) {
            // Despejar Puntos
            var valor = rut.value.replace('.', '');
            // Despejar Guión
            valor = valor.replace('-', '');

            // Aislar Cuerpo y Dígito Verificador
            cuerpo = valor.slice(0, -1);
            dv = valor.slice(-1).toUpperCase();

            // Formatear RUN
            rut.value = cuerpo + '-' + dv

            // Si no cumple con el mínimo ej. (n.nnn.nnn)
            if (cuerpo.length < 7) {


                $("span:first").removeClass("glyphicon glyphicon-user");
                $("span:first").addClass("glyphicon glyphicon-remove");


                $("#rutUsuario").val("");
                $('#btnAgregarUsuario').attr("disabled", true);
                return false;
            }

            // Calcular Dígito Verificador
            suma = 0;
            multiplo = 2;

            // Para cada dígito del Cuerpo
            for (i = 1; i <= cuerpo.length; i++) {

                // Obtener su Producto con el Múltiplo Correspondiente
                index = multiplo * valor.charAt(cuerpo.length - i);

                // Sumar al Contador General
                suma = suma + index;

                // Consolidar Múltiplo dentro del rango [2,7]
                if (multiplo < 7) {
                    multiplo = multiplo + 1;
                } else {
                    multiplo = 2;
                }

            }

            // Calcular Dígito Verificador en base al Módulo 11
            dvEsperado = 11 - (suma % 11);

            // Casos Especiales (0 y K)
            dv = (dv == 'K') ? 10 : dv;
            dv = (dv == 0) ? 11 : dv;

            // Validar que el Cuerpo coincide con su Dígito Verificador
            if (dvEsperado != dv) {
                $("span:first").removeClass("glyphicon glyphicon-user");
                $("span:first").addClass("glyphicon glyphicon-remove");
                $("#rutUsuario").val("");

                $('#btnAgregarUsuario').attr("disabled", true);
                return false;
            }

            // Si todo sale bien, eliminar errores (decretar que es válido)

            $("span:first").removeClass("glyphicon glyphicon-user glyphicon glyphicon-remove");
            $("span:first").addClass("glyphicon glyphicon-ok");

            $("button:first").removeAttr("disabled");




            var element = document.getElementById("btnAgregarUsuario");
            element.classList.remove("disabled");
        } else {
            $("span:first").removeClass("glyphicon glyphicon-user");
            $("span:first").addClass("glyphicon glyphicon-remove");
            $('#btnAgregarUsuario').attr("disabled", true);
            return false;
        }
    });
}

function getControlXadmin() {
    var id = $("#idusuario").val();
    if (id == "") {
        $.notify({
            icon: "../lib/img/warning.png",
            message: "<strong>Ingrese los datos pedidos</strong> "
        }, {
            icon_type: 'image',
            type: "warning"
        });
    } else {
        $.ajax({
            url: 'http://127.0.0.1/SportHouse/index.php/getControlXadmin',
            type: 'POST',
            dataType: 'json',
            data: {"id": id}
        }).then(function (msg) {
            $("#tbodyControl").empty();
            $.each(msg, function (i, o) {
                var fila = "<tr><td style='display:none;'>" + o.idControl + "</td>";
                fila += "<td >" + o.fecha + "</td>";
                fila += "<td >" + o.peso + "</td>";
                fila += "<td >" + o.porcentajeGrasa + "</td>";
                fila += "<td >" + o.pecho + "</td>";
                fila += "<td >" + o.cintura + "</td>";
                fila += "<td >" + o.cadera + "</td>";
                fila += "<td >" + o.muslo + "</td>";
                fila += "<td >" + o.brazo + "</td>";
                fila += "<td >" + o.eBiolog + "</td>";
                fila += "<td >" + o.mMusc + "</td>";
                fila += "<td >" + o.gVicer + "</td>";
                fila += "<td >" + o.calorias + "</td>";
                fila += "<td >" + o.imc + "</td>";
                fila += "<td >" + o.nombreUsuario + "</td>";
                fila += '<td ><button type="button" id="btnEditarControl" class="btn btn-info" value="' + o.idControl + "," + o.fecha + "," + o.peso + "," + o.porcentajeGrasa + "," + o.pecho + "," + o.cintura + "," + o.cadera + "," + o.muslo + "," + o.brazo + "," + o.eBiolog + "," + o.mMusc + "," + o.gVicer + "," + o.calorias + "," + o.imc + "," + o.estado + '" data-toggle="modal" data-target="#modal-control"><i class="glyphicon glyphicon-pencil"></i></button>';
                $("#tbodyControl").append(fila);
            });
        });
    }
    //fila += '<td ><button type="button" id="btnEditarControl" class="btn btn-info" value="' + o.idControl + "," + o.fecha + "," + o.peso + "," + o.porcentajeGrasa + "," + o.pecho + "," + o.cintura + "," + o.cadera + "," + o.muslo + "," + o.brazo + "," + o.eBiolog + "," + o.mMusc + "," + o.gVicer + "," + o.calorias + "," + o.imc + "," + o.estado + '" data-toggle="modal" data-target="#modal-control"><i class="glyphicon glyphicon-pencil"></i></button><button type="button" value="' + o.idControl + '" id="btnEliminarControl" class="btn btn-danger" data-toggle="modal" data-target="#modal-eliminar"><i class="glyphicon glyphicon-trash"></i></button>';
}

function getControlXadminInactivo() {
    var id = $("#idusuario").val();
    if (id == "") {
        $.notify({
            icon: "../lib/img/warning.png",
            message: "<strong>Ingrese los datos pedidos</strong> "
        }, {
            icon_type: 'image',
            type: "warning"
        });
    } else {
        $.ajax({
            url: 'http://127.0.0.1/SportHouse/index.php/getControlXadminInactivo',
            type: 'POST',
            dataType: 'json',
            data: {"id": id}
        }).then(function (msg) {
            $("#tbodyControlI").empty();
            $.each(msg, function (i, o) {
                var fila = "<tr><td style='display:none;'>" + o.idControl + "</td>";
                fila += "<td >" + o.fecha + "</td>";
                fila += "<td >" + o.peso + "</td>";
                fila += "<td >" + o.porcentajeGrasa + "</td>";
                fila += "<td >" + o.pecho + "</td>";
                fila += "<td >" + o.cintura + "</td>";
                fila += "<td >" + o.cadera + "</td>";
                fila += "<td >" + o.muslo + "</td>";
                fila += "<td >" + o.brazo + "</td>";
                fila += "<td >" + o.eBiolog + "</td>";
                fila += "<td >" + o.mMusc + "</td>";
                fila += "<td >" + o.gVicer + "</td>";
                fila += "<td >" + o.calorias + "</td>";
                fila += "<td >" + o.imc + "</td>";
                fila += "<td >" + o.nombreUsuario + "</td>";
                fila += '<td ><button type="button" id="btnEditarControl" class="btn btn-info" value="' + o.idControl + "," + o.fecha + "," + o.peso + "," + o.porcentajeGrasa + "," + o.pecho + "," + o.cintura + "," + o.cadera + "," + o.muslo + "," + o.brazo + "," + o.eBiolog + "," + o.mMusc + "," + o.gVicer + "," + o.calorias + "," + o.imc + "," + o.estado + '" data-toggle="modal" data-target="#modal-control"><i class="glyphicon glyphicon-pencil"></i></button>';
                $("#tbodyControlI").append(fila);
            });
        });
    }
    //fila += '<td ><button type="button" id="btnEditarControl" class="btn btn-info" value="' + o.idControl + "," + o.fecha + "," + o.peso + "," + o.porcentajeGrasa + "," + o.pecho + "," + o.cintura + "," + o.cadera + "," + o.muslo + "," + o.brazo + "," + o.eBiolog + "," + o.mMusc + "," + o.gVicer + "," + o.calorias + "," + o.imc + "," + o.estado + '" data-toggle="modal" data-target="#modal-control"><i class="glyphicon glyphicon-pencil"></i></button><button type="button" value="' + o.idControl + '" id="btnEliminarControl" class="btn btn-danger" data-toggle="modal" data-target="#modal-eliminar"><i class="glyphicon glyphicon-trash"></i></button>';
}


function DetalleControl() {
    var id = $("#idControl").val();
    if (id == "") {
        $.notify({
            icon: "../lib/img/warning.png",
            message: "<strong>Ingrese los datos pedidos</strong> "
        }, {
            icon_type: 'image',
            type: "warning"
        });
    } else {
        $.ajax({
            url: 'http://127.0.0.1/SportHouse/index.php/getDetalleControl',
            type: 'POST',
            dataType: 'json',
            data: {"id": id}
        }).then(function (msg) {
            $("#listaSocios").empty();
            var fila = '<label for="fechaU">Usuarios a los cuales se les a enviado este Consejo:</label>';
            fila += '<textarea class="form-control" rows="3" disabled>';
            $.each(msg, function (i, o) {
                fila += o.nombreUsuario + '\n';
            });
            fila += '</textarea>';
            $("#listaSocios").append(fila);
            $("#listaSocios").toggle();

        });
    }

}

function EditarControl() {
    var id = $("#idControl").val();
    var peso = $("#peso2").val();
    var porcentajeGrasa = $("#porcentajeGrasa2").val();
    var pecho = $("#pecho2").val();
    var cintura = $("#cintura2").val();
    var cadera = $("#cadera2").val();
    var muslo = $("#muslo2").val();
    var brazo = $("#brazo2").val();
    var eBiolog = $("#eBiolog2").val();
    var mMusc = $("#mMusc2").val();
    var gVicer = $("#gVicer2").val();
    var calorias = $("#calorias2").val();
    var imc = $("#imc2").val();
    var estado = $("#getEstado").val();
    if (id == "" || peso == "" || porcentajeGrasa == "" || pecho == "" || cintura == "" || cadera == "" || muslo == "" || brazo == "" || eBiolog == "" || mMusc == "" || gVicer == "" || calorias == "" || imc == "" || estado == null) {
        $.notify({
            icon: "../lib/img/warning.png",
            message: "<strong>Ingrese los datos pedidos</strong> "
        }, {
            icon_type: 'image',
            type: "warning"
        });
    } else {
        $.ajax({
            url: 'http://127.0.0.1/SportHouse/index.php/editControl',
            type: 'POST',
            dataType: 'json',
            data: {"id": id, "peso": peso, "porcentajeGrasa": porcentajeGrasa, "pecho": pecho, "cintura": cintura, "cadera": cadera, "muslo": muslo, "brazo": brazo, "eBiolog": eBiolog, "mMusc": mMusc, "gVicer": gVicer, "calorias": calorias, "imc": imc, "estado": estado}
        }).then(function (msg) {
            if (msg.msg == "ok") {
                $('#modal-control').modal('toggle');
                getControlXadmin();
                getControlXadminInactivo();
                $.notify({
                    icon: "../lib/img/tick2.png",
                    message: "<strong>Control Editado con Exito!!!</strong> "
                }, {
                    icon_type: 'image',
                    type: "success"
                });
            } else {
                $.notify({
                    icon: "../lib/img/no.png",
                    message: "<strong>Error al ingresar al sistema, intentelo nuevamente</strong>"
                }, {
                    icon_type: 'image',
                    type: "danger"
                });
            }
        });
    }
}

function getEjercicios() {
    var hola = 'http://127.0.0.1/SportHouse/index.php/verEjercicio';
    $("#tbodyEjercicios").empty();
    $.getJSON(hola, function (result) {
        $.each(result, function (i, o) {
            var fila = "<tr><td style='display:none;'>" + o.idEjercicio + "</td>";
            fila += "<td >" + o.descripcion + "</td>";
            fila += "<td >" + o.numeroMaquina + "</td>";
            fila += "<td ><img src='http://127.0.0.1/SportHouse/lib/img/Ejercicios/" + o.imagen + "' style='height:100px; width: 100px;' ></td>";
            fila += '<td ><button type="button" id="btnEditarEditar" class="btn btn-info" value="' + o.idEjercicio + "," + o.descripcion + "," + o.numeroMaquina + "," + o.imagen + '" data-toggle="modal" data-target="#modal-oferta"><i class="glyphicon glyphicon-pencil"></i></button>';
            $("#tbodyEjercicios").append(fila);
        });
    });
}

function getSelectEjercicio() {
    var hola = 'http://127.0.0.1/SportHouse/index.php/verEjercicio';
    $("#getEjercicios").empty();
    var fila = "<option disabled selected>Seleccione Ejercicios</option>";
    $.getJSON(hola, function (result) {
        $.each(result, function (i, o) {
            fila += "<option value='" + o.idEjercicio + "'>" + o.descripcion + " | N° Maquina: " + o.numeroMaquina + "</option>";
        });
        $("#getEjercicios").append(fila);
    });
}

function getSocios() {
    var hola = 'http://127.0.0.1/SportHouse/index.php/getUsuarioConsejo';
    $("#selectUsuarios").empty();
    var fila = "<option disabled selected>Seleccione los Usuarios</option>";
    $.getJSON(hola, function (result) {
        $.each(result, function (i, o) {
            fila += "<option value='" + o.id + "'>" + o.nombreUsuario + "</option>";
        });
        $("#selectUsuarios").append(fila);
    });
}

function agregarRutina() {
    var entrenador = $("#idEntrenador").val();
    var fechaEvaluacion = $("#fechaEvaluacion").val();
    var observacion = $("#observacion").val();
    var fechaSiguienteEvaluacion = $("#fechaSiguienteEvaluacion").val();
    var ejercicio = $("#getEjercicios").val();
    var usuario = $("#selectUsuarios").val();
    if (entrenador == "" || fechaEvaluacion == "" || observacion == null || fechaSiguienteEvaluacion == "" || ejercicio == null || usuario == null) {
        $.notify({
            icon: "../lib/img/warning.png",
            message: "<strong>Ingrese los datos pedidos</strong> "
        }, {
            icon_type: 'image',
            type: "warning"
        });
    } else {
        $.ajax({
            url: 'http://127.0.0.1/SportHouse/index.php/addRutina',
            type: 'POST',
            dataType: 'json',
            data: {"entrenador": entrenador, "fechaEvaluacion": fechaEvaluacion, "observacion": observacion, "fechaSiguiente": fechaSiguienteEvaluacion, "ejercicio": ejercicio, "usuario": usuario}
        }).then(function (msg) {
            if (msg.msg == "ok") {
                $('#modal-control').modal('toggle');
                getControlXadmin();
                $.notify({
                    icon: "../lib/img/tick2.png",
                    message: "<strong>Rutina Creada con Exito!!!</strong> "
                }, {
                    icon_type: 'image',
                    type: "success"
                });
            } else {
                $.notify({
                    icon: "../lib/img/no.png",
                    message: "<strong>Error al ingresar al sistema, intentelo nuevamente</strong>"
                }, {
                    icon_type: 'image',
                    type: "danger"
                });
            }
        });
    }
}

function editarRutina() {
    var id = $("#idDetalle").val();
    var repeticiones = $("#repeticiones").val();
    var series = $("#series").val();

    if (id == "" || repeticiones == "" || series == "" || repeticiones == 0 || series == 0) {
        $.notify({
            icon: "../lib/img/warning.png",
            message: "<strong>Ingrese los datos pedidos</strong> "
        }, {
            icon_type: 'image',
            type: "warning"
        });
    } else {
        $.ajax({
            url: 'http://127.0.0.1/SportHouse/index.php/editRutina',
            type: 'POST',
            dataType: 'json',
            data: {"id": id, "repeticiones": repeticiones, "series": series}
        }).then(function (msg) {
            if (msg.msg == "ok") {
                getDetalleRutina();

                $.notify({
                    icon: "../lib/img/tick2.png",
                    message: "<strong>Rutina Editada con Exito!!!</strong> "
                }, {
                    icon_type: 'image',
                    type: "success"
                });
            } else {
                $.notify({
                    icon: "../lib/img/no.png",
                    message: "<strong>Error al ingresar al sistema, intentelo nuevamente</strong>"
                }, {
                    icon_type: 'image',
                    type: "danger"
                });
            }
        });
    }
}

function getDetalleRutina() {
    var id = $("#id").val();
    if (id == "") {
        $.notify({
            icon: "../lib/img/warning.png",
            message: "<strong>Ingrese los datos pedidos</strong> "
        }, {
            icon_type: 'image',
            type: "warning"
        });
    } else {
        $.ajax({
            url: 'http://127.0.0.1/SportHouse/index.php/getDetalleRutina',
            type: 'POST',
            dataType: 'json',
            data: {"id": id}
        }).then(function (msg) {
            $("#tbodyDetalle").empty();
            $.each(msg, function (i, o) {
                var fila = "<tr><td>" + o.idRutinaEjercicio + "</td>";
                fila += "<td >" + o.descripcion + "</td>";
                fila += "<td >" + o.series + "</td>";
                fila += "<td >" + o.repeticiones + "</td>";
                fila += '<td ><button type="button" id="btnEditarDetalle" class="btn btn-info" value="' + o.idRutinaEjercicio + "," + o.series + "," + o.repeticiones + '" ><i class="glyphicon glyphicon-pencil"></i></button>';
                $("#tbodyDetalle").append(fila);
            });
        });
    }
}

function getDetalleFichaMedica() {
    var id = $("#id").val();
    $.ajax({
        url: 'http://127.0.0.1/SportHouse/index.php/getDetalleFicha',
        type: 'POST',
        dataType: 'json',
        data: {"id": id}
    }).then(function (msg) {
        if (msg.msg == "vacio") {
            $("#modal-ficha").modal('show');
            $("#mensaje").text("Este usuario actualmente no tiene ficha medica. Rellene los siguientes campos");
            $("#idFichaMedica").val("");
            $("#medicamentoContraIndicado").val("");
            $("#lesion").val("");
            $("#patologia").val("");
            $("#intervencionQuirurgica").val("");
            $("#fechaDeporte").val("");
            $("#observacion").val("");
            var element = document.getElementById("crear");
            element.classList.remove("disabled");
            $("button").removeAttr("disabled");
        } else if (msg.msg == "ok") {
            $("#mensaje").text("");
            $("#modal-ficha").modal('show');

            $.each(msg.resultado, function (i, o) {
                $("#idFichaMedica").val(o.idFichaMedica);
                $("#medicamentoContraIndicado").val(o.medicamentoContraIndicado);
                $("#lesion").val(o.lesion);
                $("#patologia").val(o.patologia);
                $("#intervencionQuirurgica").val(o.intervencionQuirurgica);
                $("#fechaDeporte").val(o.ultimaFechaRealizaDeporte);
                $("#observacion").val(o.observacion);
                $('#crear').attr("disabled", true);
                return false;
            });
        } else {
            $.notify({
                icon: "../lib/img/no.png",
                message: "<strong>Error al ingresar al sistema, intentelo nuevamente</strong>"
            }, {
                icon_type: 'image',
                type: "danger"
            });
        }
    });
}

function agregarFichaMedica() {
    var id = $("#idUser").val();
    var medicamentoContraIndicado = $("#medicamentoContraIndicado").val();
    var lesion = $("#lesion").val();
    var patologia = $("#patologia").val();
    var intervencionQuirurgica = $("#intervencionQuirurgica").val();
    var fechaDeporte = $("#fechaDeporte").val();
    var observacion = $("#observacion").val();

    if (id == "" || medicamentoContraIndicado == "" || lesion == "" || patologia == "" || intervencionQuirurgica == "" || fechaDeporte == "" || observacion == "") {
        $.notify({
            icon: "../lib/img/warning.png",
            message: "<strong>Ingrese los datos pedidos</strong> "
        }, {
            icon_type: 'image',
            type: "warning"
        });
    } else {
        $.ajax({
            url: 'http://127.0.0.1/SportHouse/index.php/addFichaMedica',
            type: 'POST',
            dataType: 'json',
            data: {"id": id, "medicamentoContraIndicado": medicamentoContraIndicado, "lesion": lesion, "patologia": patologia, "intervencionQuirurgica": intervencionQuirurgica, "fechaDeporte": fechaDeporte, "observacion": observacion}
        }).then(function (msg) {
            if (msg.msg == "ok") {
                $('#modal-ficha').modal('toggle');
                getControlXadmin();
                $.notify({
                    icon: "../lib/img/tick2.png",
                    message: "<strong>Rutina Creada con Exito!!!</strong> "
                }, {
                    icon_type: 'image',
                    type: "success"
                });
            } else {
                $.notify({
                    icon: "../lib/img/no.png",
                    message: "<strong>Error al ingresar al sistema, intentelo nuevamente</strong>"
                }, {
                    icon_type: 'image',
                    type: "danger"
                });
            }
        });
    }
}

function EditarPerfil() {
    var id = $("#id").val();
    var rutUsuario = $("#rut").val();
    var nombreUsuario = $("#nombre").val();
    var apellidoUsuario = $("#apellido").val();
    var fechaNacimiento = $("#fecha").val();
    var correoUsuario = $("#email").val();
    var clave = $("#clave").val();
    if (id == "" || rutUsuario == "" || nombreUsuario == "" || apellidoUsuario == "" || correoUsuario == "" || fechaNacimiento == "" || clave == "") {
        $.notify({
            icon: "../lib/img/warning.png",
            message: "<strong>Ingrese los datos pedidos</strong> "
        }, {
            icon_type: 'image',
            type: "warning"
        });
    } else {
        $.ajax({
            url: 'http://127.0.0.1/SportHouse/index.php/editarPerfil',
            type: 'POST',
            dataType: 'json',
            data: {"id": id, "rutUsuario": rutUsuario, "nombreUsuario": nombreUsuario, "apellidoUsuario": apellidoUsuario, "fechaNacimiento": fechaNacimiento, "correoUsuario": correoUsuario, "clave": clave}
        }).then(function (msg) {
            if (msg.msg == "ok") {
                $.notify({
                    icon: "../lib/img/tick2.png",
                    message: "<strong>Usuario Editado !!! Ingrese Nuevamente...</strong> "
                }, {
                    icon_type: 'image',
                    type: "success"
                });
                setTimeout('salir()', 3000);
            } else {
                $.notify({
                    icon: "../lib/img/no.png",
                    message: "<strong>Error al ingresar al sistema, intentelo nuevamente</strong>"
                }, {
                    icon_type: 'image',
                    type: "danger"
                });
            }
        });
    }
}

function AgregarAsistencia() {
    var idClase = $("#idClase").val();
    var idUsuario = $("#idUsuario").val();
    if (idClase == "" || idUsuario == "") {
        $.notify({
            icon: "../lib/img/warning.png",
            message: "<strong>Ingrese los datos pedidos</strong> "
        }, {
            icon_type: 'image',
            type: "warning"
        });
    } else {
        $.ajax({
            url: 'http://127.0.0.1/SportHouse/index.php/verificarAsistencia',
            type: 'POST',
            dataType: 'json',
            data: {"idClase": idClase, "idUsuario": idUsuario}
        }).then(function (msg) {
            var resultado;
            for (var key in msg.msg) {
                var obj = msg.msg[key];
                for (var prop in obj) {
                    if (obj.hasOwnProperty(prop)) {
                        resultado = obj[prop];
                    }
                }
            }
            if (resultado == 0) {
                $.ajax({
                    url: 'http://127.0.0.1/SportHouse/index.php/agregarAsistencia',
                    type: 'POST',
                    dataType: 'json',
                    data: {"idClase": idClase, "idUsuario": idUsuario}
                }).then(function (msg) {
                    if (msg.msg == "ok") {
                        clasesTomadas();
                        $.notify({
                            icon: "../lib/img/tick2.png",
                            message: "<strong>Registro con Exito!!!</strong> "
                        }, {
                            icon_type: 'image',
                            type: "success"
                        });
                    } else if (msg.msg == "error") {
                        $.notify({
                            icon: "../lib/img/no.png",
                            message: "<strong>Ya esta Registrado en esta clase</strong>"
                        }, {
                            icon_type: 'image',
                            type: "danger"
                        });
                    }
                });
            } else {
                $.notify({
                    icon: "../lib/img/no.png",
                    message: "<strong>Ya se encuentra Registrado en esta Clase.</strong>"
                }, {
                    icon_type: 'image',
                    type: "danger"
                });
            }
        });
    }
}

function clasesTomadas() {
    var id = $("#idUsuario").val();
    $.ajax({
        url: 'http://127.0.0.1/SportHouse/index.php/getClaseSocioTomadas',
        type: 'POST',
        dataType: 'json',
        data: {"id": id}
    }).then(function (msg) {
        $("#tbodyClases").empty();
        $.each(msg, function (i, o) {
            var fila = "<tr><td>" + o.idClase + "</td>";
            fila += "<td >" + o.nombreC + "</td>";
            fila += "<td >" + o.asistentes + "</td>";
            fila += "<td >" + o.dia + "</td>";
            fila += "<td >" + o.hora + "</td>";
            fila += "<td >" + o.nombre + "</td>";
            fila += "<td >" + o.nombreProfesor + "</td>";
            fila += '<td ><button type="button" id="btn" class="btn btn-info" value="' + o.idRutinaEjercicio + "," + o.series + "," + o.repeticiones + '" ><i class="glyphicon glyphicon-pencil"></i></button>';
            $("#tbodyClases").append(fila);
        });
    });
}

function getControlSocio() {
    var id = $("#idUsuario").val();
    if (id == "") {
        $.notify({
            icon: "../lib/img/warning.png",
            message: "<strong>Ingrese los datos pedidos</strong> "
        }, {
            icon_type: 'image',
            type: "warning"
        });
    } else {
        $.ajax({
            url: 'http://127.0.0.1/SportHouse/index.php/getControlXSocio',
            type: 'POST',
            dataType: 'json',
            data: {"id": id}
        }).then(function (msg) {
            $("#tbodyControl").empty();
            $.each(msg, function (i, o) {
                var fila = "<tr><td style='display:none;'>" + o.idControl + "</td>";
                fila += "<td >" + o.fecha + "</td>";
                fila += "<td >" + o.peso + "</td>";
                fila += "<td >" + o.porcentajeGrasa + "</td>";
                fila += "<td >" + o.pecho + "</td>";
                fila += "<td >" + o.cintura + "</td>";
                fila += "<td >" + o.cadera + "</td>";
                fila += "<td >" + o.muslo + "</td>";
                fila += "<td >" + o.brazo + "</td>";
                fila += "<td >" + o.eBiolog + "</td>";
                fila += "<td >" + o.mMusc + "</td>";
                fila += "<td >" + o.gVicer + "</td>";
                fila += "<td >" + o.calorias + "</td>";
                fila += "<td >" + o.imc + "</td>";
                fila += "<td >" + o.nombreUsuario + "</td>";
                fila += '<td ><button type="button" id="btnEditarControl" class="btn btn-info" value="' + o.idControl + "," + o.fecha + "," + o.peso + "," + o.porcentajeGrasa + "," + o.pecho + "," + o.cintura + "," + o.cadera + "," + o.muslo + "," + o.brazo + "," + o.eBiolog + "," + o.mMusc + "," + o.gVicer + "," + o.calorias + "," + o.imc + "," + o.estado + '" data-toggle="modal" data-target="#modal-control"><i class="glyphicon glyphicon-pencil"></i></button>';
                $("#tbodyControl").append(fila);
            });
        });
    }
    //fila += '<td ><button type="button" id="btnEditarControl" class="btn btn-info" value="' + o.idControl + "," + o.fecha + "," + o.peso + "," + o.porcentajeGrasa + "," + o.pecho + "," + o.cintura + "," + o.cadera + "," + o.muslo + "," + o.brazo + "," + o.eBiolog + "," + o.mMusc + "," + o.gVicer + "," + o.calorias + "," + o.imc + "," + o.estado + '" data-toggle="modal" data-target="#modal-control"><i class="glyphicon glyphicon-pencil"></i></button><button type="button" value="' + o.idControl + '" id="btnEliminarControl" class="btn btn-danger" data-toggle="modal" data-target="#modal-eliminar"><i class="glyphicon glyphicon-trash"></i></button>';
}

function getSelectEstadoControl() {
    var hola = 'http://127.0.0.1/SportHouse/index.php/getEstado';
    $("#getEstado").empty();
    var fila = "<option disabled selected>Seleccione el Estado</option>";
    $.getJSON(hola, function (result) {
        $.each(result, function (i, o) {
            fila += "<option value='" + o.idEstado + "'>" + o.descripcion + "</option>";
        });
        $("#getEstado").append(fila);
    });
}

function getConsejosXsocio() {
    var id = $("#idUsuario").val();
    if (id == "") {
        $.notify({
            icon: "../lib/img/warning.png",
            message: "<strong>Ingrese los datos pedidos</strong> "
        }, {
            icon_type: 'image',
            type: "warning"
        });
    } else {
        $.ajax({
            url: 'http://127.0.0.1/SportHouse/index.php/getConsejosXSocio',
            type: 'POST',
            dataType: 'json',
            data: {"id": id}
        }).then(function (msg) {
            $("#tbodyConsejos").empty();
            $.each(msg, function (i, o) {
                var fila = "<tr><td style='display:none;'>" + o.idConsejo + "</td>";
                fila += "<td >" + o.titulo + "</td>";
                fila += "<td >" + o.descripcion + "</td>";
                fila += "<td ><img src='http://127.0.0.1/SportHouse/lib/img/Consejos/" + o.imagen + "'  class='img-responsive img-thumbnail' style=''></td>";
                fila += "<td >" + o.nombreUsuario + "</td></tr>";
                $("#tbodyConsejos").append(fila);
            });
        });
    }
}

function getRutinaSocio() {
    var id = $("#idUsuario").val();

    if (id == "") {
        $.notify({
            icon: "../lib/img/warning.png",
            message: "<strong>Ingrese los datos pedidos</strong> "
        }, {
            icon_type: 'image',
            type: "warning"
        });
    } else {
        $.ajax({
            url: 'http://127.0.0.1/SportHouse/index.php/getRutinaSocio',
            type: 'POST',
            dataType: 'json',
            data: {"id": id}
        }).then(function (msg) {
            $("#tbodyrutina").empty();
            $.each(msg, function (i, o) {
                var fila = "<tr><td>" + o.idRutina + "</td>";
                fila += "<td >" + o.fechaEvaluacion + "</td>";
                fila += "<td >" + o.observacion + "</td>";
                fila += "<td >" + o.fechaSiguienteEvaluacion + "</td>";
                fila += "<td >" + o.nombreUsuario + "</td>";
                fila += '<td ><button type="button" id="btnEditarRutina" class="btn btn-info" value="' + o.idRutina + '" data-toggle="modal" data-target="#modal-detalle"><i class="glyphicon glyphicon-search"></i></button>';
                $("#tbodyrutina").append(fila);
            });
        });
    }
}

function getDetalleRutinaSocio() {
    var id = $("#idRutina").val();
    if (id == "") {
        $.notify({
            icon: "../lib/img/warning.png",
            message: "<strong>Ingrese los datos pedidos</strong> "
        }, {
            icon_type: 'image',
            type: "warning"
        });
    } else {
        $.ajax({
            url: 'http://127.0.0.1/SportHouse/index.php/getDetalleRutinaSocio',
            type: 'POST',
            dataType: 'json',
            data: {"id": id}
        }).then(function (msg) {
            $("#tbodyDetalle").empty();
            $.each(msg, function (i, o) {
                var fila = "<tr><td>" + o.idRutinaEjercicio + "</td>";
                fila += "<td >" + o.descripcion + "</td>";
                fila += "<td >" + o.series + "</td>";
                fila += "<td >" + o.repeticiones + "</td>";
                fila += "<td ><img src='http://127.0.0.1/SportHouse/lib/img/Ejercicios/" + o.imagen + "'  class='img-responsive img-thumbnail' style=''></td></tr>";
                $("#tbodyDetalle").append(fila);
            });
        });
    }
}

function getClasesProfesor() {
    var id = $("#idUsuario").val();
    if (id == "") {
        $.notify({
            icon: "../lib/img/warning.png",
            message: "<strong>Ingrese los datos pedidos</strong> "
        }, {
            icon_type: 'image',
            type: "warning"
        });
    } else {
        $.ajax({
            url: 'http://127.0.0.1/SportHouse/index.php/getClaseProfesor',
            type: 'POST',
            dataType: 'json',
            data: {"id": id}
        }).then(function (msg) {
            $("#tbodyclases").empty();
            $.each(msg, function (i, o) {
                var fila = "<tr><td>" + o.idClase + "</td>";
                fila += "<td >" + o.nombreC + "</td>";
                fila += "<td >" + o.asistentes + "</td>";
                fila += "<td >" + o.dia + "</td>";
                fila += "<td >" + o.hora + "</td>";
                fila += "<td >" + o.nombre + "</td>";
                fila += '<td ><button type="button" id="btnVerAlumnos" class="btn btn-info" value="' + o.idClase + '" data-toggle="modal" data-target="#modal-detalle"><i class="glyphicon glyphicon-search"></i></button>';
                $("#tbodyclases").append(fila);
            });
        });
    }
}

function getDetalleClases() {
    var id = $("#idClase").val();
    if (id == "") {
        $.notify({
            icon: "../lib/img/warning.png",
            message: "<strong>Ingrese los datos pedidos</strong> "
        }, {
            icon_type: 'image',
            type: "warning"
        });
    } else {
        $.ajax({
            url: 'http://127.0.0.1/SportHouse/index.php/getDetalleClases',
            type: 'POST',
            dataType: 'json',
            data: {"id": id}
        }).then(function (msg) {
            $("#tbodydetalleclases").empty();
            $.each(msg, function (i, o) {
                var fila = "<tr><td>" + o.usuario + "</td>";
                fila += "<td >" + o.nombre + " " + o.apellido + "</td>";
                fila += "<td >" + o.descripcion + "</td>";
                $("#tbodydetalleclases").append(fila);
                $("#getAsistencia").val(o.idAsistencia);
            });
        });
    }
}

function getSelectAsistencia() {
    var hola = 'http://127.0.0.1/SportHouse/index.php/getAsistencia';
    $("#getAsistencia").empty();
    var fila = "<option disabled selected>Seleccione la Asistencia</option>";
    $.getJSON(hola, function (result) {
        $.each(result, function (i, o) {
            fila += "<option value='" + o.idAsistencia + "'>" + o.descripcion + "</option>";
        });
        $("#getAsistencia").append(fila);
    });
}

function getPublicidad() {
    var hola = 'http://127.0.0.1/SportHouse/index.php/verPublicidad';
    var cont = 1;
    var publi = "publicidad";
    var ancho = $(window).width();
    var largo = $(window).height();
    $("#publicidad").empty();
    $.getJSON(hola, function (result) {
        $.each(result, function (i, o) {
            if (cont == 1) {
                var fila = " <div class='item active' id='" + publi + cont + "'>";
                fila += "<img class='img-responsive'  alt='holaa' src='http://127.0.0.1/SportHouse/lib/img/Ofertas/" + o.imagen + "' >";
                fila += "<div class='carousel-caption '>";
                fila += "" + o.descripcion + "";
                fila += "</div>";
                fila += "</div>";
                cont++;
                $("#publicidad").append(fila);
            } else {
                var fila = " <div class='item' id='" + publi + cont + "'>";
                fila += "<img class='img-responsive'  alt='holaa' src='http://127.0.0.1/SportHouse/lib/img/Ofertas/" + o.imagen + "' >";
                fila += "<div class='carousel-caption '>";
                fila += "" + o.descripcion + "";
                fila += "</div>";
                fila += "</div>";
                $("#publicidad").append(fila);
                cont++;
            }
        });

    });
}

function checkList() {
    var rol1 = $('input:checkbox[name=rol3]:checked').val();

    if (rol1 == "") {
        alert("no seleccionado");
    } else {
        alert(rol1);
    }
}