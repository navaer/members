@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">Listado de miembros

                        <div class="box-tools pull-right">
                            {{Html::link('users/create', 'Nuevo usuario', array('class' => 'btn btn-sm btn-primary'))}}

                            <button class="btn btn-sm btn-default" type="button" data-toggle="collapse"
                                    data-target="#collapseExample"
                                    aria-expanded="false" aria-controls="collapseExample">
                                Mostrar Filtros
                            </button>
                        </div>
                    </div>
                    <div class="collapse panel-heading" id="collapseExample">
                        {!! Form::open(array('url' => 'users', 'role' => 'form', 'method' => 'get')) !!}
                        <div class="row">
                            <div class="col-md-4">
                                <table class="table table-bordered">
                                    <thead>
                                    <tr class="active">
                                        <th>Campo</th>
                                        <th>Contenido</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <th scope=row>{!! Form::label('grade', 'Nivel de estudios') !!}</th>
                                        <td>{!! Form::select('grade', [
                                '' => 'Todos',
                                'Primaria' => 'Primaria',
                                'Secundaria' => 'Secundaria',
                                'Preparatoria' => 'Preparatoria/Bachillerato',
                                'Licenciatura' => 'Licenciatura',
                                'Maestría' => 'Maestría',
                                'Doctorado' => 'Doctorado',
                                'Otro' => 'Otro'
                                ],
                                '', ['class' => 'form-control', 'placeholder' => 'Seleccione una opción']) !!}
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope=row>{!! Form::label('language', 'Idiomas') !!}</th>
                                        <td>{!! Form::select('language', [1,2], null, ['class' => 'form-control']) !!}</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="col-md-4">
                                <table class="table table-bordered">
                                    <thead>
                                    <tr class="active">
                                        <th>Field</th>
                                        <th>Content</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <th scope=row>{!! Form::label('estado', 'Estado') !!}</th>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <th scope=row>{!! Form::label('proveedor', 'Proveedor') !!}</th>
                                        <td></td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="col-md-4">

                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                {!! Form::submit('Aplicar filtro', array('class' => 'btn btn-sm btn-primary pull-right')) !!}
                            </div>
                        </div>
                        {!! Form::close() !!}
                    </div>
                    <div class="panel-body">

                        <table class="table table-bordered">
                            <tr>
                                <th>Nombre</th>
                                <th>Email</th>
                                <th>Acciones</th>
                            </tr>
                            @foreach($users as $user)
                                <tr>
                                    <td>{{$user->name}}</td>
                                    <td>{{$user->email}}</td>
                                    <td>{{Html::link('users/'.$user->id, 'Ver detalle')}}</td>
                                </tr>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection


@section('custom_scripts')

@endsection