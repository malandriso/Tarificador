@extends('layouts.app')
@section('htmlheader_title')
    ComWare
@endsection
@section('contentheader_title')
    Llamadas
@endsection

@section('main-content')
    <div class="row">
        <div class="col-xs-12">
            <div class="box box-success">
                <!-- /.box-header -->
                <div class="box-body octavio">
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped table-hover cellspacing=0" id="example1">
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
                </div>
                <!-- /.box-body octavio-->
            </div>
            <!-- /.box box-success-->
        </div>
        <!-- /.col-xs-12 -->
    </div>
    <!-- /.row -->
@endsection



