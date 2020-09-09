<?php
$usuario = $this->session->userdata("administrador");
$rut_entidad = $usuario[0]->rut_entidad;
$rut_entidad = "'" . $rut_entidad . "'";

$mysqli_editar_entidad = new mysqli("localhost", "root", "", "maule_seguro_basica");
$query_editar_entidad = ("select * from entidad where entidad.rut_entidad = " . $rut_entidad);
$arreglo_editar_entidad = array();


if ($result = $mysqli_editar_entidad->query($query_editar_entidad)) {

    while ($row = $result->fetch_assoc()) {

        array_push($arreglo_editar_entidad, $row);
    }
}

$telefono_entidad = $arreglo_editar_entidad[0]['telefono_entidad'];
$email_entidad = $arreglo_editar_entidad[0]['email_entidad'];

$result->free();
$mysqli_editar_entidad->close();
?>
<main class="">
    <div class="row white-text">
        <div class="col s12 m12 l12 red darken-2">
            <div class="container">
                <h5 class="center"><b>¡EDITAR PERFIL!</b></h5>
            </div>
        </div>
    </div>
    <div class="container animated fadeInUp">
        <div class="section">
            <div class="row">
                <input id="perfil_usuario_equipo" type="hidden" value="1">
                <div class="row">
                    <div class="input-field col s12 m12 l6 offset-l3">
                        <input id="telefono_entidad" type="text" class="validar_numero" placeholder="983006194" maxlength="9" required="true" pattern="[0-9]+" value="<?php echo '' . $telefono_entidad; ?>">
                        <label for="telefono_entidad" class="black-text">TELEFÓNO:</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12 m12 l6 offset-l3">
                        <input id="email_entidad" type="text" placeholder="matias.montoya.poblete@gmail.com" maxlength="45" required="true" pattern="^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$" value="<?php echo '' . $email_entidad; ?>">
                        <label for="email_entidad" class="black-text">E-MAIL:</label>
                    </div>
                </div>
                <div class="input-field center-align">
                    <button id="boton_editar_perfil" type="submit" class="waves-effect waves-light btn red darken-2">
                        EDITAR
                    </button>
                </div>
            </div>
        </div>
    </div>
</main>
<script type="text/javascript">

    $('.validar_numero').on('input', function () {
        this.value = this.value.replace(/[^0-9]/g, '');
    });

    function validar_correo(correo) {

        var validacion = /[\w-\.]{2,}@([\w-]{2,}\.)*([\w-]{2,}\.)[\w-]{2,4}/;

        if (validacion.test(correo)) {
            return true;
        } else {
            return false;
        }
    }

    $("#boton_editar_perfil").click(function (excepcion) {
        excepcion.preventDefault();

        var rut_entidad = rut_entidad_php;
        var telefono_entidad = $("#telefono_entidad").val();
        var email_entidad = $("#email_entidad").val();

        if (telefono_entidad == "" || email_entidad == "" || rut_entidad == "") {
            Materialize.toast("¡Completar campos vacios!", "3500");
        } else {
            if (validar_correo(email_entidad)) {
                $.ajax({
                    url: base_url + "editar_usuario",
                    type: 'post',
                    dataType: 'json',
                    data: {rut_entidad: rut_entidad, telefono_entidad: telefono_entidad, email_entidad: email_entidad},
                    success: function (o) {
                        $("#telefono_entidad").val("");
                        $("#email_entidad").val("");
                        Materialize.toast(o.mensaje, "2000");
                        setTimeout(
                                function ()
                                {
                                    location.reload();
                                }, 2500);
                    },
                    error: function () {
                        Materialize.toast("¡Error 500!", "3500");
                    }
                });
            } else {
                Materialize.toast("¡Correo no valido!", "3500");
            }
        }
    });
</script>