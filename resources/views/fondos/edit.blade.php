@extends('base')

@section('title')
    Editando a {{ $fondo->id }}
@stop

@section('content')
<div class="col-md-10 col-md-offset-1">
    <ol class="breadcrumb">
        <li><a href="{{ route('bienvenido.index') }}">Inicio</a></li>
        <li><a href="{{ route('fondos.index') }}">Fondos</a></li>
        <li class="active">Editar</li>
    </ol>
    <div class="page-header text-center">
        <h2>Editar datos de {{ $fondo->id }}<small>.</small></h2>
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
    <div class="col-xs-8 col-xs-offset-2">
        <?php $fecha =  getdate(); ?>
        <?php $fecha = date("Y-m-d", strtotime($fecha["year"]. "/". $fecha["mon"]. "/". $fecha["mday"])); ?>
        {!! Form::model($fondo,['method' => 'PATCH', 'class' => 'form-horizontal responsive', 'route'=>['fondos.update',$fondo->id]]) !!}
        <div class="form-group">
            {!! Form::label('usuario_id_carga', 'Usuario:', array('class' => 'control-label col-xs-4')) !!}
            <div class='col-xs-8'>
                {!! Form::text('usuario_id_carga', null, ['class'=>'form-control', 'required' => 'true', 'placeholder' => 'Usuario', 'maxlength' => '45']) !!}
            </div>
        </div>
        <div class="form-group">
            {!! Form::label('fecha_carga', 'Fecha de carga:', array('class' => 'control-label col-xs-4')) !!}
            <div class='col-xs-8'>
                {!! Form::input('date', 'fecha_carga', $fecha,['class'=>'form-control', 'placeholder' => 'dd/mm/aaaa', 'pattern' => '([0-9]{4}-(0[1-9]|1[0-2])-(0[1-9]|[1-2][0-9]|3[0-1])|^(?:(?:31(\/|-|\.)(?:0?[13578]|1[02]))\1|(?:(?:29|30)(\/|-|\.)(?:0?[1,3-9]|1[0-2])\2))(?:(?:1[6-9]|[2-9]\d)?\d{2})$|^(?:29(\/|-|\.)0?2\3(?:(?:(?:1[6-9]|[2-9]\d)?(?:0[48]|[2468][048]|[13579][26])|(?:(?:16|[2468][048]|[3579][26])00))))$|^(?:0?[1-9]|1\d|2[0-8])(\/|-|\.)(?:(?:0?[1-9])|(?:1[0-2]))\4(?:(?:1[6-9]|[2-9]\d)?\d{2})$)', 'title' => 'dd/mm/aaaa', 'required' => 'true']) !!}
            </div>
        </div>
        <div class="form-group">
            {!! Form::label('descripcion', 'Descripción:', array('class' => 'control-label col-xs-4')) !!}
            <div class='col-xs-8'>
                {!! Form::textarea('descripcion', null, ['class'=>'form-control', 'required' => 'true', 'placeholder' => 'Descripción', 'maxlength' => '45', 'rows' => '5']) !!}
            </div>
        </div>
        <div class="form-group">
            <div class="col-xs-8 col-xs-offset-4">
                <a href="{{ route('fondos.index') }}" class="btn btn-default">
                    <i class="glyphicon glyphicon-chevron-left"></i>Volver
                </a>
                <button type="submit" class="btn btn-primary pull-right">
                    <i class="glyphicon glyphicon-floppy-save"></i> Guardar
                </button>
            </div>
        </div>
        {!! Form::close() !!}
    </div>
</div>
@stop
