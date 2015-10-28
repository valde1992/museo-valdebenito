@extends('base')

@section('title')
    Editando a {{ $persona->apellido, $persona->nombre }}
@stop

@section('content')
<div class="col-md-10 col-md-offset-1">
    <ol class="breadcrumb">
        <li><a href="{{ route('bienvenido.index') }}">Inicio</a></li>
        <li><a href="{{ route('personas.index') }}">Personas</a></li>
        <li class="active">Editar</li>
    </ol>
    <div class="page-header text-center">
        <h1>Actualizar persona<small>.</small></h1>
    </div>
    <div class="col-xs-6 col-xs-offset-3">
        @if (count($errors) > 0)
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    </div>
    <div class="col-xs-4 col-xs-offset-4">
        <?php $fecha =  getdate(); ?>
        <?php $fecha = date("Y-m-d", strtotime($fecha["year"]. "/". $fecha["mon"]. "/". $fecha["mday"])); ?>
        {!! Form::model($persona,['method' => 'PATCH','route'=>['personas.update',$persona->id]]) !!}
        <div class="form-group">
            {!! Form::label('clasificacion', 'Clasificación:') !!}
            {!! Form::text('clasificacion', null, ['class'=>'form-control', 'required' => 'true', 'placeholder' => 'Clasificación', 'disabled' => 'true']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('descripcion', 'Descripción:') !!}
            {!! Form::text('descripcion', null, ['class'=>'form-control', 'required' => 'true', 'placeholder' => 'Descripción', 'maxlength' => '45']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('procedencia', 'Procedencia:') !!}
            {!! Form::text('procedencia', null, ['class'=>'form-control',  'placeholder' => 'Procedencia', 'required' => 'true', 'maxlength' => '45']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('autor', 'Autor:') !!}
            {!! Form::text('autor', null, ['class'=>'form-control',  'placeholder' => 'Autor', 'required' => 'true', 'maxlength' => '45']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('fecha_ejecutacion', 'Fecha de ejecutación:') !!}
            {!! Form::input('date', 'fecha_ejecutacion', $fecha,['class'=>'form-control', 'placeholder' => 'dd/mm/aaaa', 'pattern' => '([0-9]{4}-(0[1-9]|1[0-2])-(0[1-9]|[1-2][0-9]|3[0-1])|^(?:(?:31(\/|-|\.)(?:0?[13578]|1[02]))\1|(?:(?:29|30)(\/|-|\.)(?:0?[1,3-9]|1[0-2])\2))(?:(?:1[6-9]|[2-9]\d)?\d{2})$|^(?:29(\/|-|\.)0?2\3(?:(?:(?:1[6-9]|[2-9]\d)?(?:0[48]|[2468][048]|[13579][26])|(?:(?:16|[2468][048]|[3579][26])00))))$|^(?:0?[1-9]|1\d|2[0-8])(\/|-|\.)(?:(?:0?[1-9])|(?:1[0-2]))\4(?:(?:1[6-9]|[2-9]\d)?\d{2})$)', 'value' => $fecha, 'title' => 'dd/mm/aaaa', 'required' => 'true']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('tema', 'Tema:') !!}
            {!! Form::text('tema', null, ['class'=>'form-control', 'placeholder' => 'Tema', 'required' => 'true', 'maxlength' => '45']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('observacion', 'Observación:') !!}
            {!! Form::text('observacion', null, ['class'=>'form-control', 'placeholder' => 'Observación', 'required' => 'true', 'maxlength' => '45']) !!}
        </div>
        <div class="pull-right col-xs-offset-4">
            {!! Form::submit('Guardar', ['class' => 'btn btn-primary']) !!}
        </div>
        {!! Form::close() !!}
    </div>
</div>
@stop
