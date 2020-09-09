<main class="">
    <div id="modal_comentario" class="modal z-depth-1 grey lighten-4">
        <div class="row white-text">
            <div class="col s12 m12 l12 red darken-2">
                <h5 class="center"><b>¡MENSAJE!</b></h5>
            </div>
        </div>
        <div class="modal-content">
            <div class="col s12 m12 l12">
                <input id="id_mensaje" type="hidden" readonly="true" placeholder="">
                <div class="input-field">
                    <textarea id="comentario_invitado_mensaje" class="materialize-textarea" readonly="true" placeholder=""></textarea>
                    <label for="comentario_invitado_mensaje">COMENTARIO:</label>
                </div>
            </div>
        </div>
    </div>
    <div class="row white-text">
        <div class="col s12 m12 l12 red darken-2">
            <div class="container">
                <h5 class="center"><b>¡LISTADO DE MENSAJES!</b></h5>
            </div>
        </div>
    </div>
    <div class="container animated fadeIn">
        <div class="section">
            <div class="row">
                <div class="col s12 m8 offset-m2 l6 offset-l3">
                    <table id="tabla_listado_mensaje_contacto" class="centered bordered highlight nowrap cell-border table-striped">
                        <thead class="red darken-2 white-text">
                            <tr>
                                <th>ID</th>
                                <th>NOMBRE</th>
                                <th>E-MAIL</th>
                                <th>TELÉFONO</th>
                                <th>COMENTARIO</th>
                                <th>FECHA</th>
                            </tr>
                        </thead>
                        <tbody>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</main>
<script type="text/javascript">
    $('#tabla_listado_mensaje_contacto').DataTable({
        scrollX: true,
        "language": {
            "url": "//cdn.datatables.net/plug-ins/1.10.15/i18n/Spanish.json"
        },
        "ajax": {
            url: base_url + "tabla_listado_mensaje_contacto",
            type: 'post'
        },
        "iDisplayLength": 5,
        "bJQueryUI": false,
        "dom": 'Bfrtip',
        "buttons": [
            {
                title: 'SofGem Talca - Buzón de Mensajes de Contactos',
                messageTop: 'Desarrollado por Matías Montoya P.',
                filename: 'proyecto_sofgem_talca',
                extend: 'pdfHtml5',
                download: 'open',
                pageSize: 'letter',
                orientation: 'landscape',
                customize: function (doc) {
                    doc.styles.tableBodyEven.alignment = 'center';
                    doc.styles.tableBodyOdd.alignment = 'center';
                    doc.content[2].margin = [130, 0, 130, 0];
                },
                exportOptions: {
                    columns: [1, 2, 3, 5]
                }
            }
        ],
        "order": [[0, "desc"]],
        "columnDefs": [
            {targets: [4], "render": function (data, type, row, meta) {
                    return '<button id="boton_comentario_mensaje" class="btn btn-floating waves-effect waves-light red darken-2" type="submit"><i class="material-icons">drafts</i></button>';
                }
            }
        ]
    });

    $("body").on("click", "#boton_comentario_mensaje", function (e) {
        e.preventDefault();
        var id_mensaje = $(this).parent().parent().children()[0];
        var mensaje = $(id_mensaje).text();
        $.ajax({
            url: base_url + "boton_comentario_mensaje",
            type: 'post',
            dataType: 'json',
            data: {id_mensaje: mensaje},
            success: function (result) {
                $.each(result, function (i, o) {
                    $("#id_mensaje").val(o.id_mensaje);
                    $("#comentario_invitado_mensaje").val(o.comentario_invitado_mensaje);
                    $("#modal_comentario").modal('open');
                });
            },
            error: function () {
                Materialize.toast("¡Error 500!", "3500");
            }
        });
    });
</script>