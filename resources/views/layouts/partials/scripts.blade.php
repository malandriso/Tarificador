<!-- REQUIRED JS SCRIPTS -->
<!-- jQuery 2.2.4 -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js">
</script>
<!-- Bootstrap 3.3.7 JS -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" type="text/javascript">
</script>
<!-- AdminLTE App -->
<script src="{{ asset('/js/app.min.js') }}" type="text/javascript">
</script>
<!-- Optionally, you can add Slimscroll and FastClick plugins.
      Both of these plugins are recommended to enhance the
      user experience. Slimscroll is required when using the
      fixed layout. -->
<!-- DataTables jQuery-->
<script src="https://cdn.datatables.net/1.10.13/js/jquery.dataTables.min.js" type="text/javascript">
</script>
{{-- DataTables Bootstrap --}}
<script src="https://cdn.datatables.net/1.10.13/js/dataTables.bootstrap.min.js" type="text/javascript">
</script>
<!-- DataTables Responsive-->
<script src="https://cdn.datatables.net/responsive/2.1.1/js/dataTables.responsive.min.js" type="text/javascript">
</script>
<!-- DataTables Buttons-->
<script src="https://cdn.datatables.net/buttons/1.2.4/js/dataTables.buttons.min.js" type="text/javascript">
</script>
<script src="https://cdn.datatables.net/buttons/1.2.4/js/buttons.flash.min.js" type="text/javascript">
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/2.5.0/jszip.min.js" type="text/javascript">
</script>
<script src="https://cdn.rawgit.com/bpampuch/pdfmake/0.1.24/build/pdfmake.min.js" type="text/javascript">
</script>
<script src="https://cdn.rawgit.com/bpampuch/pdfmake/0.1.24/build/vfs_fonts.js" type="text/javascript">
</script>
<script src="https://cdn.datatables.net/buttons/1.2.4/js/buttons.html5.min.js" type="text/javascript">
</script>
<script src="https://cdn.datatables.net/buttons/1.2.4/js/buttons.print.min.js" type="text/javascript">
</script>
<!-- Morris.js charts -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
<script src="plugins/morris/morris.min.js"></script>
<!-- SlimScroll -->
<script src="{{ asset('/plugins/slimScroll/jquery.slimscroll.min.js') }}" type="text/javascript">
</script>
<!-- page script -->
<script>
$(document).ready(function() {
    $('#example1').DataTable({
        dom: 'Bfrtip',
        buttons: [{
                extend: 'copy',
                text: 'Copiar'
            },
            'csv', 'excel', 'pdf', {
                extend: 'print',
                text: 'Imprimir'
            }
        ],
        paging: true,
        lengthChange: false,
        searching: true,
        ordering: true,
        info: true,
        autoWidth: false,
        responsive: {
            details: true
        },
        language: {
            url: "https://cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/Spanish.json",
            buttons: {
                copyTitle: 'Añadido al portapapeles',
                copyKeys: 'Pulse <i>ctrl</i> o <i>\u2318</i> + <i>C</i> para copiar los datos de la tabla al porta-papeles. <br><br>Para cancelar, haga clic en este mensaje o pulse Esc.',
                copySuccess: {
                    _: '%d lineas copiadas',
                    1: '1 linea copiada'
                }
            }
        }
    });
});
</script>
<script>
Morris.Bar({
  element: 'chart',
  resize: true,
  data: [
    { y: 'Servicio Tecnico', a: 100},
    { y: 'Administracion', a: 75},
    { y: 'Infraestructura', a: 50},
  ],
  xkey: 'y',
  ykeys: ['a'],
  labels: ['Llamadas']
});
</script>