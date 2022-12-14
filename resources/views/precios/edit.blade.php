@extends('layouts.app')

@section("contenido")

    <h1>Editar</h1>
    <a href="{{route('precios.index')}}" class="btn btn-primary mb-5 mt-5">Volver</a>
    
    </form>
    <form action="{{route('precios.update',['id' => $precio->id])}}" method="POST">
        @csrf

        <div class="form-group">
            <label for="nombre">Nombre</label>
            <input type="text" name="nombre" id="nombre" required class="form-control" value="{{$precio->nombre}}">
        </div>
        <div class="form-group">
            <label for="precio">Precio</label>
            <input type="number" name="precio" id="precio" required class="form-control" value="{{$precio->precio}}" >
        </div>
        <div class="form-group">
            <label for="medida">Medida</label>
            <input type="text" name="medida" id="medida" required class="form-control" value="{{$precio->medida}}" >
        </div>
        

        <input type="submit" value="Guardar" class="btn btn-success mb-5 mt-5">
        <input type="reset" value="Limpiar formulario" class="btn btn-dark mb-5 mt-5">

</form>




@endsection





