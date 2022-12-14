@extends('layouts.app')

@section("contenido")
    <h1>Crear</h1>
    <a href="{{route('precios.index')}}" class="btn btn-primary mb-5 mt-5">Volver</a>

    <form action="{{route('precios.store')}}" method="POST">
        @csrf

        <div class="form-group">
            <label for="nombre">Nombre</label>
            <input type="text" name="nombre" id="nombre" class="form-control" required>
        </div>
    
        <div class="form-group">
            <label for="precio">Precio</label>
            <input type="number" min="0" name="precio" id="precio" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="medida">Medida</label>
            <input type="text" name="medida" id="medida" class="form-control" placeholder="uds/m2/ml..." required>
        </div>
        
        

        <input type="submit" value="Crear" class="btn btn-success">
        <input type="reset" value="Limpiar formulario" class="btn btn-dark">

</form>






@endsection