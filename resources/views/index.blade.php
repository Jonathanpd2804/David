@extends('layouts.app')

@section("contenido")

<h1>DAVID PEREZ SUAREZ</h1>

<a href="{{route('precios.index')}}" class="btn btn-primary mb-5 mt-5">Ver listado de precios</a>
<a href="{{route('presupuesto.create')}}" class="btn btn-primary mb-5 mt-5">Hacer presupuesto</a>
<a href="{{route('factura.create')}}" class="btn btn-primary mb-5 mt-5">Hacer factura</a>


@endsection