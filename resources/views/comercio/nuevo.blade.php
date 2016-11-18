@extends('layout.template')
@section('content')
    <h1>Crear Nueva Persona</h1>
    {!! Form::open(['method' => 'POST', 'route' => 'inicio.store']) !!}
    <div class="form-group">
        {!! Form::label('nombre', 'Nombre de la nueva Persona:') !!}
        {!! Form::text('nombre',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('edad', 'Edad de la persona:') !!}
        {!! Form::number('edad',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::submit('Crear', ['class' => 'btn btn-primary form-control']) !!}
    </div>
    {!! Form::close() !!}
@stop