@extends('layouts.app')

@section('content')
<div class="container white">
    <h1>Nuevo producto</h1>   
</div>

<div class="container white">
    {!!Form::open(['url'=>'/produts','method'=>'POST'])!!}
       <div class="form-group">
         {!!Form::label('title', 'titulo')!!}
         {!!Form::text('title', null,['class'=>'form-control',' placeholder'=>'Por favor introduzca titulo'])!!}
      </div>
    
       <div class="form-group">
         {!!Form::label('pricing', 'Precio')!!}
         {!!Form::number('pricing', null,['class'=>'form-control',' placeholder'=>'Inserte precio'])!!}
        </div>
    
        <div class="form-group">
        {!!Form::label('description', 'Descripcion')!!}
        {!!Form::textarea('description',null,['class'=>'form-control textarea-content'])!!}
       </div>
    
     <div class="form-group text-right">
         <a href="{{url('/products')}}">Regresar al listado de productos</a>
         <input type="submit" value="Enviar" class="btn btn-success">
       </div>
    
    {!!Form::close()!!}
</div>
@endsection