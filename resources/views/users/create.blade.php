@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">Registro de nueva encuesta
                        <div class="box-tools pull-right">
                        </div>
                    </div>
                    <div class="panel-body">
                        {!! Form::open(['url' => 'members', 'role' => 'form']) !!}

                        <div>
                            <h3>Información personal</h3>
                        </div>
                        <!-- /.box-header -->
                        <div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        {!! Form::label('name', 'Nombre') !!}
                                        {!! Form::text('name', null, ['class' => 'form-control', 'required' => 'required', 'placeholder' => 'Nombre del miembro']) !!}
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        {!! Form::label('email', 'Email') !!}
                                        {!! Form::text('email', null, ['class' => 'form-control', 'required' => 'required', 'placeholder' => 'nombre@dominio.com']) !!}
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        {!! Form::label('ward', 'Email') !!}
                                        {!! Form::select('ward', [1,2], null, ['class' => 'form-control', 'required' => 'required', 'placeholder' => 'Seleccione un barrio']) !!}
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        {!! Form::label('rol', 'Rol') !!}
                                        {!! Form::select('rol', [1,2], null, ['class' => 'form-control', 'required' => 'required', 'placeholder' => 'Seleccione un rol']) !!}
                                    </div>
                                </div>

                                <!-- /.col -->
                            </div>
                            <!-- /.row -->
                        </div>
                        <!-- ./box-body -->

                        <div>
                            <ul class="pull-right">
                                {!! Form::submit('Guardar',['class' => 'btn btn-primary'])!!}
                                {{Html::link('members', 'Cancelar', ['class' => 'btn btn-danger'])}}
                            </ul>
                        </div>
                        <!-- /.box-footer -->

                        <!-- /.box -->
                        {!! Form::close() !!}


                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('custom_scripts')

@endsection
