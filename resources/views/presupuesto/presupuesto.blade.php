@extends('layouts.presupuesto')
<?php
$cliente = $_GET['nombre'];
$numero = $_GET['numero'];
$direccion = $_GET['direccion'];
$fecha = $_GET['fecha'];
$total = $_GET['total'];
$subtotal = $_GET['subtotal'];
$igic = $_GET['igic'];

$nombreImagen = "C:\Users\Jonathan\Desktop\Jonathan\DP\logo.jpg";
$imagenBase64 = "data:image/png;base64," . base64_encode(file_get_contents($nombreImagen));

?>

<img src="<?php echo($imagenBase64) ?>" />

<div id="cliente">
    <p>{{$cliente}}</p>
    <p>{{$direccion}}</p>
</div>

<div id="datos">
    <p>HÉCTOR DAVID PÉREZ SUAREZ</p>
    <p>45554423W</p>
    <p>C/ Tanganillo, Nº 32</p>
    <p>35500 ARRECIFE</p>
    <p>LAS PALMAS</p>
    <p>TFNO: 627.525.718</p>
</div>

<div id="presupuesto">
    <h3>PRESUPUESTO</h3>
</div>

<div id="datospresupuesto">
    <div id="datos1presupuesto">
    <h6>NUMERO</h6>
    </div>
    <div id="datos11presupuesto">
    <h6>{{$numero}}</h6>
    </div>

    <div id="datos2presupuesto">
    <h6>FECHA</h6>
    </div>
    <div id="datos22presupuesto">
    <h6>{{$fecha}}</h6>
    </div>

</div>


<div id="informacionpresupuesto">
    <div id="descripcion">
        <h6>DESCRIPCIÓN</h6>
    </div>
    <div id="unidad">
        <h6>€/ UNIDAD</h6>
    </div>
    <div id="cantidad">
        <h6>CANTIDAD</h6>
    </div>
    <div id="importe">
        <h6>IMPORTE</h6>
    </div>
</div>

<div id="contenido">
<?php
$datos = \App\Models\Precio::all();

foreach($datos as $dato){
    $nombre = $dato->nombre;
    $precio = $dato->precio;
    $nombreconvertido = strtr($nombre, " ","_");
    $objeto = $_GET[$nombreconvertido];
    $suplementonombre = "$nombreconvertido(_suplemento)";
    $suplemento = $_GET[$suplementonombre];
    $precioobjeto = $precio + $suplemento;
    $ototal = $precioobjeto * $objeto;

    $nombreconvertido = strtr($nombre, "_"," ");
    if($objeto != 0){
        echo("<div id='objetodescripcion'>{$nombreconvertido}</div>");
        echo("<div id='objetoprecio'>{$precioobjeto} €</div>");
        echo("<div id='objetocantidad'>{$objeto}</div>");
        echo("<div id='objetototal'>{$ototal} €</div>");
    }

    
}
?>
</div>

<div id="totales">
    <div id="subtotal">SUBTOTAL</div>
    <div id="igic">I.G.I.C. 7%</div>
    <div id="total">TOTAL</div>
    <div id="subtotalr">{{$subtotal}} €</div>
    <div id="igicr">{{$igic}} €</div>
    <div id="totalr">{{$total}} €</div>
</div>

<div id="pago">
    <p><b>VALIDEZ DE PRESUPUESTO: 30 DÍAS</b></p>
    <span><b>FORMA DE PAGO:</b><b id="pequeno"> 50% A LA ACEPTACIÓN DEL PRESUPUESTO.</b></span>
    <p id="espaciado"><b id="pequeno">50% A LA FINALIACIÓN DE LA OBRA.</b></p>
    <p><b>Nº DE CUENTA: ES03 2100 7214 1513 0067 7002</b></p>
</div>


