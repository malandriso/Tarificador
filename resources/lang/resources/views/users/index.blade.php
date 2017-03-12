@extends('layouts.app')
@section('htmlheader_title')
    ComWare
@endsection
@section('contentheader_title')
    Usuarios
@endsection

@section('main-content')
    <div class="row">
        <div class="col-xs-12">
            <div class="box box-success">
                <!-- /.box-header -->
                <div class="box-body octavio">
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped table-hover cellspacing="0">
                            <thead>
                                <tr>
                                    <th>Nombre</th>
                                    <th>Email</th>
                                    <th>Creado</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($data as $row)
                                <tr>
                                    <td>{{$row->name}}</td>
                                    <td>{{$row->email}}</td>
                                    <td>{{$row->created_at}}</td>
                                @endforeach
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>Nombre</th>
                                    <th>Email</th>
                                    <th>Creado</th>
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
