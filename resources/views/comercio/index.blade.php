@extends('layout/template')
@section('content')
 <h1>Listado</h1>
 <a href="{{route('inicio.create')}}" class="btn btn-success">Crear un nueva Persona</a>
 <table class="table table-bordered table-inverse bg-success">
     <thead>
     <tr class="bg-info">
         <th>Nombre</th>
         <th>Edad</th>
         <th colspan="3">Visitar Perfil</th>
     </tr>
     </thead>
     <tbody>
     @foreach ($listado as $l)
         <tr>
             <td>{{ $l->nombre }}</td>
             <td>{{ $l->edad }}</td>
             <td><a href="{{route('inicio.edit',$l->id)}}" class="btn btn-warning">Editar Persona</a></td>
             <td>
             {!! Form::open(['method' => 'DELETE', 'route'=>['inicio.destroy', $l->id]]) !!}
             {!! Form::submit('Borrar Persona', ['class' => 'btn btn-danger']) !!}
             {!! Form::close() !!}
             </td>
         </tr>
     @endforeach
     </tbody>
 </table>
 @stop