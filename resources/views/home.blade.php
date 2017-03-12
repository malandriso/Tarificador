@extends('layouts.app')
@section('contentheader_title')
    Tablero Administrativo
@endsection
@section('htmlheader_title')
	Inicio
@endsection


@section('main-content')
<div class="container spark-screen">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="box box-success">
                <div class="box-header with-border">
                    <h3 class="box-title">Bienvenido</h3>
                    <div class="box-tools pull-right">
                        <button class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>
                        <button class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove"><i class="fa fa-times"></i></button>
                    </div>
                </div>
                <div class="box-body">
                </div>
            </div>

				<!-- /.col (LEFT) -->
        <div class="col-lg-8">
          <!-- LINE CHART -->
          <div class="box box-success">
            <div class="box-header with-border">
              <h3 class="box-title">Gráfica</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
            </div>
            <div class="box-body chart-responsive">
              <div class="chart" id="chart" style="height: 300px;"></div>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
				<!-- /.col-md-6-->
    </div>
		<!-- /.col-md-10 col-md-offset-1 -->
</div>
<!-- /.row -->
@endsection
