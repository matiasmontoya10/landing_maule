<main class="">
    <div class="row white-text">
        <div class="col s12 m12 l12 red darken-2">
            <div class="container">
                <h5 class="center"><b>¡CAMBIAR CONTRASEÑA!</b></h5>
            </div>
        </div>
    </div>
    <div class="container animated fadeInUp">
        <div class="section">
            <div class="row">
                <div class="col s12 m6 l6 offset-l3 offset-m3">
                    <div class="input-field">
                        <input id="clave_usuario_actual" type="password" maxlength="15" placeholder="">
                        <label for="clave_usuario_actual" class="black-text">INGRESA TU CONTRASEÑA ACTUAL:</label>
                    </div>
                    <div class="input-field">
                        <input id="clave_usuario_nueva" type="password" maxlength="15" placeholder="">
                        <label for="clave_usuario_nueva" class="black-text">INGRESA TU NUEVA CONTRASEÑA:</label>
                    </div>
                    <div class="input-field">
                        <input id="clave_usuario_nueva_repetir" type="password" maxlength="15" placeholder="">
                        <label for="clave_usuario_nueva_repetir" class="black-text">REPITE TU NUEVA CONTRASEÑA:</label>
                    </div>
                    <div class="input-field center-align">
                        <button id="boton_cambiar_clave" class="btn waves-effect waves-light red darken-2" type="submit" name="action">
                            CAMBIAR
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
<script src="https://cdnjs.cloudflare.com/ajax/libs/crypto-js/3.1.2/rollups/md5.js"></script>
<script type="text/javascript">
    $("#boton_cambiar_clave").click(function (excepcion) {
        excepcion.preventDefault();

        var rut_entidad = rut_entidad_php;
        //PARA CLAVES ACTUALES.
        var clave_entidad = clave_entidad_php;
        var clave_usuario_actual = $("#clave_usuario_actual").val();
        var md5_clave_usuario_actual = CryptoJS.MD5(clave_usuario_actual).toString();

        //CLAVES NUEVAS.
        var clave_usuario_nueva = $("#clave_usuario_nueva").val();
        var clave_usuario_nueva_repetir = $("#clave_usuario_nueva_repetir").val();
        var md5_clave_usuario_nueva = CryptoJS.MD5(clave_usuario_nueva).toString();


        if (clave_usuario_actual == "" || clave_usuario_nueva == "" || clave_usuario_nueva_repetir == "") {
            Materialize.toast("¡Completar campos vacios!", 3500);
        } else {
            if (clave_entidad === md5_clave_usuario_actual) {
                if (clave_usuario_nueva === clave_usuario_nueva_repetir) {
                    if (clave_usuario_nueva.length >= 8) {
                        $.ajax({
                            url: base_url + "cambiar_clave",
                            type: 'post',
                            dataType: 'json',
                            data: {rut_entidad: rut_entidad, clave_entidad: md5_clave_usuario_nueva},
                            success: function (o) {
                                clave_entidad_php = md5_clave_usuario_nueva;
                                $("#clave_usuario_actual").val("");
                                $("#clave_usuario_nueva").val("");
                                $("#clave_usuario_nueva_repetir").val("");
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
                        Materialize.toast("¡Contraseña con un mínimo 8 caracteres!", 3500);
                    }
                } else {
                    Materialize.toast("¡Claves nuevas no coinciden!", 3500);
                }
            } else {
                Materialize.toast("¡Clave actual no coincide!", 3500);

            }
        }
    });
</script>