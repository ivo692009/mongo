 
@extends('layout.template')
@section('content')
    <h1>Editar Persona</h1>
    {!! Form::model($persona,['method' => 'PATCH','route'=>['inicio.update',$persona->id]]) !!}
    <div class="form-group">
        {!! Form::label('nombre', 'Nombre:') !!}
        {!! Form::text('nombre',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('edad', 'Edad:') !!}
        {!! Form::number('edad',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::submit('Editar', ['class' => 'btn btn-primary']) !!}
    </div>
    {!! Form::close() !!}
@stop