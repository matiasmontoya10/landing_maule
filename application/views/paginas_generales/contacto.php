<main class="">
    <div class="row white-text">
        <div class="col s12 m12 l12 fondo_barra">
            <div class="container">
                <h5 class="center"><b>¡ENVÍANOS UN MENSAJE!</b></h5>
            </div>
        </div>
    </div>
    <div class="container animated fadeInUp">
        <div class="section">
            <div class="row">
                <div class="row">
                    <div class="input-field col s12 m12 l12">
                        <input id="nombre_invitado" type="text" placeholder="Empresa o Pers. Natural" maxlength="50">
                        <label for="nombre_invitado" class="black-text">NOMBRE:</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12 m12 l6">
                        <input id="correo_invitado" type="text" maxlength="100" placeholder="sofgem@sofgem.cl">
                        <label for="correo_invitado" class="black-text">E-MAIL:</label>
                    </div>
                    <div class="input-field col s12 m12 l6">
                        <input id="repetir_correo_invitado" type="text" maxlength="100" placeholder="sofgem@sofgem.cl">
                        <label for="repetir_correo_invitado" class="black-text">REPETIR E-MAIL:</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12 m12 l12">
                        <input id="telefono_invitado" type="text" class="validar_numero" placeholder="956874521" maxlength="9">
                        <label for="telefono_invitado" class="black-text">TELEFÓNO:</label>
                    </div>
                </div>
                <div class="input-field">
                    <textarea id="mensaje_invitado" class="materialize-textarea" data-length="250" maxlength="250"></textarea>
                    <label for="mensaje_invitado" class="black-text">MENSAJE:</label>
                </div>
                <div class="input-field center-align">
                    <button id="boton_invitado" type="submit" class="waves-effect waves-light btn green darken-2">
                        ENVIAR
                    </button>
                </div>
            </div>
        </div>
    </div>
    <div class="row white-text">
        <div class="col s12 m12 l12 fondo_barra">
            <div class="container">
                <h5 class="center"><b>¡NUESTRA UBICACIÓN!</b></h5>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="video-container">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2733.7867775752657!2d-71.68010294753641!3d-35.42907165639858!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9665c6ba88b2659d%3A0x21b12d389d9da2d8!2sSofGem!5e0!3m2!1ses!2scl!4v1582814401684!5m2!1ses!2scl" width="600" height="450" frameborder="" style="border:0;" allowfullscreen=""></iframe>
        </div>
    </div>
    <br>
</main>
<script type="text/javascript">
    $('.validar_numero').on('input', function () {
        this.value = this.value.replace(/[^0-9]/g, '');
    });
</script>