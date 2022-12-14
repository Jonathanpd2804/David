@extends('layouts.app')

@section("contenido")

<?php
$datos = \App\Models\Precio::all();
$subtotal = 0;
$cliente = $_GET['nombre'];
$numero = $_GET['numero'];
$direccion = $_GET['direccion'];
$fecha = $_GET['fecha'];
echo("<h1>COMPROBAR PRESUPUESTO</h1>");
echo("</br>");
echo("<form action='download/presupuesto' method='get' id='formulario'>");

foreach($datos as $dato){
    $nombre = $dato->nombre;
    $precio = $dato->precio;
    $nombreconvertido = strtr($nombre, " ","_");
    $objeto = $_GET[$nombreconvertido];
    $suple= "$nombreconvertido'_suplemento";
    $suplemento = $_GET[$suple];
    $precioobjeto = $precio + $suplemento;
    $ototal = $precioobjeto * $objeto;
    $subtotal += $ototal;
    $igic = $subtotal * 0.07;
    $total = $subtotal +$igic;
    $nombreconvertido = strtr($nombre, "_"," ");
        
        
        echo("<input type='text' style='display:none;' value='{$nombreconvertido}' readonly>");
        
        echo("<input type='text' style='display:none; id='{$nombreconvertido}' name='{$nombreconvertido}' value='{$objeto}' readonly>");
        
        echo("<input type='text' style='display:none; id='{$nombreconvertido}(_suplemento)' name='{$nombreconvertido}(_suplemento)' value='{$suplemento}' readonly>");
        
        

    

    
}

echo("El número de presupuesto es: <input type='text' id='numero' name='numero' value='{$numero}'>");
echo("</br>");
echo("El nombre del cliente es: <input type='text' id='nombre' name='nombre' value='{$cliente}'>");
echo("</br>");
echo("La dirección es: <input type='text' id='direccion' name='direccion' value='{$direccion}'>");
echo("</br>");
echo("La fecha es: <input type='text' id='fecha' name='fecha' value='{$fecha}'>");
echo("</br>");
echo("<input type='text' style='display:none; id='subtotal' name='subtotal' value='{$subtotal}' readonly>");
echo("<input type='text' style='display:none; id='igic' name='igic' value='{$igic}' readonly>");
echo("<input type='text' style='display:none; id='total' name='total' value='{$total}' readonly>");
echo("<input type='submit' value='Crear' class='btn btn-primary mb-5 mt-5'>");
echo("</form>");

?>


@endsection