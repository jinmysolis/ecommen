{!!Form::open(['url'=>$url,'method'=>$method])!!}
       <div class="form-group">
         {!!Form::label('title', 'titulo')!!}
         {!!Form::text('title', $product->title,['class'=>'form-control',' placeholder'=>'Por favor introduzca titulo'])!!}
      </div>
    
       <div class="form-group">
         {!!Form::label('pricing', 'Precio')!!}
         {!!Form::number('pricing', $product->pricing,['class'=>'form-control',' placeholder'=>'Inserte precio'])!!}
        </div>
    
        <div class="form-group">
        {!!Form::label('description', 'Descripcion')!!}
        {!!Form::textarea('description',$product->description,['class'=>'form-control textarea-content'])!!}
       </div>
    
     <div class="form-group text-right">
         <a href="{{url('/products')}}">Regresar al listado de productos</a>
         <input type="submit" value="Enviar" class="btn btn-success">
       </div>
    
    {!!Form::close()!!}
