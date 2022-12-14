@extends('layouts.app')

@section("contenido")

<h1>PRESUPUESTO</h1>

<a href="{{route('index')}}" class="btn btn-primary mb-5 mt-5">Volver</a>

<form action="{{route('presupuesto.ver')}}" method="get">
<!-- {{route('presupuesto.ver')}} -->
<div class="form-group">
    <label for='numero'>Inserta el número de presupuesto</label>
    <input type="text" id="numero" class="form-control" style="width : 323px;" name="numero">
</div>

<div class="form-group">
    <label for='nombrecliente'>Inserta el nombre del cliente</label>
    <input type="text" id="nombrecliente" class="form-control" style="width : 323px;" name="nombre">
</div>

<div class="form-group">
    <label for='direccion'>Inserta la dirección</label>
    <input type="text" id="direccion" class="form-control" style="width : 323px;" name="direccion" >
</div>

<div class="form-group">
    <label for='fecha'>Inserta la fecha</label>
    <input type="text" id="fecha" class="form-control" style="width : 323px;" name="fecha">
</div>

<hr size="8px" color="blue"/>
@foreach ($precios as $precio)
        <div class="form-group">
            <ul id="lista">                
                <label for='{{$precio->nombre}}'>{{$precio->nombre}} ({{$precio->precio}}€/{{$precio->medida}})</label>
                <input type="number"  style="width : 283px;" min="0" id='{{$precio->nombre}}' class="form-control" name='{{$precio->nombre}}' value="0" required>
                Suplemento: <input type="number" id="{{$precio->nombre}}'_suplemento" name="{{$precio->nombre}}'_suplemento" value="0" min="0" required>
            </ul> 
        </div>
    @endforeach

    <input type="submit" value="Guardar" class="btn btn-success mb-5 mt-5">
    <input type="reset" value="Limpiar formulario" class="btn btn-dark mb-5 mt-5">
</form>



@endsection