<!DOCTYPE html>
<html lang="en">
    @section('htmlheader')
    <!-- DataTables -->
    <link href="{{ asset('/plugins/datatables/dataTables.bootstrap.css') }}" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('/css/OctavioCSS.css') }}" rel="stylesheet" type="text/css"/>
    <script class="init" type="text/javascript">
        $(document).ready(function() {
            $('#example1').DataTable( {
                responsive: {
                    details: {
                        display: $.fn.dataTable.Responsive.display.modal( {
                            header: function ( row ) {
                                var data = row.data();
                                return 'Details for '+data[0]+' '+data[1];
                            }
                        }),
                        renderer: $.fn.dataTable.Responsive.renderer.tableAll( {
                        tableClass: 'table'
                        })
                    }
                }
            });
        });
    </script>
    @include('layouts.partials.htmlheader')
    @show
    <body class="skin-green sidebar-mini">
        <div class="wrapper">
            @include('layouts.partials.mainheader')
            @include('layouts.partials.sidebar')
            <!-- Content Wrapper. Contains page content -->
            <div class="content-wrapper">
                @include('layouts.partials.Callscontentheader')
                <!-- Main content -->
                <section class="content">
                    <!-- Your Page Content Here -->
                    @yield('main-content')
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="box box-success">
                                <!-- /.box-header -->
                                <div class="box-body octavio">
                                    <table class="table table-bordered table-striped" id="example1">
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>time</th>
                                                <th>duration</th>
                                                <th>cond_code</th>
                                                <th>code_dial</th>
                                                <th>code_used</th>
                                                <th>dialed_num</th>
                                                <th>calling_num</th>
                                                <th>clg_num_in_tac</th>
                                                <th>auth_code</th>
                                                <th>frl</th>
                                                <th>ixc_code</th>
                                                <th>in_crt_id</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($calls as $call)
                                            <tr>
                                                <td>{{$call->id}}</td>
                                                <td>{{$call->time}}</td>
                                                <td>{{$call->duration}}</td>
                                                <td>{{$call->cond_code}}</td>
                                                <td>{{$call->code_dial}}</td>
                                                <td>{{$call->code_used}}</td>
                                                <td>{{$call->dialed_num}}</td>
                                                <td>{{$call->calling_num}}</td>
                                                <td>{{$call->clg_num_in_tac}}</td>
                                                <td>{{$call->auth_code}}</td>
                                                <td>{{$call->frl}}</td>
                                                <td>{{$call->ixc_code}}</td>
                                                <td>{{$call->in_crt_id}}</td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th>ID</th>
                                                <th>time</th>
                                                <th>duration</th>
                                                <th>cond_code</th>
                                                <th>code_dial</th>
                                                <th>code_used</th>
                                                <th>dialed_num</th>
                                                <th>calling_num</th>
                                                <th>clg_num_in_tac</th>
                                                <th>auth_code</th>
                                                <th>frl</th>
                                                <th>ixc_code</th>
                                                <th>in_crt_id</th>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>
                                <!-- /.box-body octavio-->
                            </div>
                            <!-- /.box box-success-->
                        </div>
                        <!-- /.col-xs-12 -->
                    </div>
                    <!-- /.row -->
                    <!-- Modal -->
                    <div aria-labelledby="myModalLabel" class="modal fade" id="myModal" role="dialog" tabindex="-1">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button aria-label="Close" class="close" data-dismiss="modal" type="button">
                                        <span aria-hidden="true">×</span>
                                    </button>
                                    <h4 class="modal-title" id="myModalLabel">Modal title</h4>
                                </div>
                                <div class="modal-body">...</div>
                                <div class="modal-footer">
                                    <button class="btn btn-default" data-dismiss="modal" type="button">Close</button>
                                    <button class="btn btn-primary" type="button">Save changes</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- /.content -->
            </div>
            <!-- /.content-wrapper -->
        </div>
        <!-- /.wrapper -->
    </body>
</html>
<!-- /.content -->
{{-- @include('layouts.partials.controlsidebar') --}}
@include('layouts.partials.footer')
@section('scripts')
    @include('layouts.partials.scripts')
<!-- DataTables -->
<script src="{{ asset('/plugins/datatables/jquery.dataTables.min.js') }}" type="text/javascript"/>
<script src="{{ asset('/plugins/datatables/dataTables.bootstrap.min.js') }}" type="text/javascript"/>
<!-- SlimScroll -->
<script src="{{ asset('/plugins/slimScroll/jquery.slimscroll.min.js') }}" type="text/javascript"/>
<!-- page script -->
<script>
    $(function () {
        $('#example1').DataTable({
            "responsive": true,
            "paging": true,
            "lengthChange": true,
            "searching": true,
            "ordering": true,
            "info": true,
            "autoWidth": false,
            "scrollX": true
            });
            $('#example1').on('click', 'tr', function () {
                var name = $('td', this).eq(1).text();
                $('#DescModal').modal("show");
            });
        });
    $('#myModal').on('shown.bs.modal', function () {
  $('#myInput').focus()
})
</script>
@show
