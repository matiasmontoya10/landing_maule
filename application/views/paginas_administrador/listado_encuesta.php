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
                <h5 class="center"><b>¡LISTADO DE ENCUESTAS!</b></h5>
            </div>
        </div>
    </div>
    <div class="container animated fadeIn">
        <div class="section">
            <div class="row">
                <div class="col s12 m8 offset-m2 l6 offset-l3">
                    <table id="tabla_listado_encuesta" class="centered bordered highlight nowrap cell-border table-striped">
                        <thead class="red darken-2 white-text">
                            <tr>
                                <th>ID</th>
                                <th>COM. SOP.</th>
                                <th>TIEM. USO</th>
                                <th>ATENCIÓN</th>
                                <th>SOLUCIÓN</th>
                                <th>SATIS.</th>
                                <th>RECOMIENDA PRO.</th>
                                <th>USO</th>
                                <th>SOFGEM</th>
                                <th>FALLAS</th>
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
    $('#tabla_listado_encuesta').DataTable({
        scrollX: true,
        "language": {
            "url": "//cdn.datatables.net/plug-ins/1.10.15/i18n/Spanish.json"
        },
        "ajax": {
            url: base_url + "tabla_listado_encuesta",
            type: 'post'
        },
        "iDisplayLength": 5,
        "bJQueryUI": false,
        "dom": 'Bfrtip',
        "buttons": [
            {
                title: 'SofGem Talca - Encuestas',
                messageTop: 'Desarrollado por Matías Montoya P.',
                filename: 'proyecto_sofgem_talca',
                extend: 'pdfHtml5',
                download: 'open',
                pageSize: 'letter',
                orientation: 'landscape',
                customize: function (doc) {
                    doc.styles.tableBodyEven.alignment = 'center';
                    doc.styles.tableBodyOdd.alignment = 'center';
                    doc.content[2].margin = [80, 0, 80, 0];
                },
                exportOptions: {
                    columns: [1, 2, 3, 4, 5, 6, 7, 8, 9]
                }
            }
        ],
        "order": [[0, "desc"]]
    });
</script>