<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]>      <html class="no-js"> <!--<![endif]-->
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>DAVID</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="">
        <!-- bootstrap 4 -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <!-- jquery  -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <!-- popper  -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <!-- bootstrap 4 js  -->
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">
        <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
        <!-- sweetalert  -->     
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <style>

            img{
                float:top;
                width:180px;
                margin-left:70px;
            }
            
            #datos{
                float:left;
                margin-top:180px;
                line-height : 5px;
            }

            #cliente{
                float:right;
                padding-top:20px;
                width:300px;
                height: 100px;
                border-style: solid;
            }
            #cliente p{
                text-align:center;
            }

            #factura{
                float:right;
                margin-right:-190px;
                margin-top:300px;
                border-style: solid;
                width:300px;
            }
            #factura h3{
                text-align:center;
            }

            #datosfactura{
                float:right;
                margin-top:360px;
                margin-right:-440px;

            }

            #datos1factura{ /*numero*/
                float:right;
                border-style: solid;
                width:115px;
                margin-right:135px;
                text-align:center;

            }
            #datos11factura{ /*numero2*/
                float:right;
                border-style: solid;
                width:115px;
                margin-top:30px;
                margin-right:135px;
                text-align:center;

            }

            #datos2factura{ /*fecha2*/
                float:left;
                border-style: solid;
                width:115px;
                margin-right:320px;
                text-align:center;


            }

            #datos22factura{ /*fecha2*/
                float:left;
                border-style: solid;
                width:115px;
                margin-top:30px;
                margin-right:135px;
                text-align:center;

            }

            #informacionfactura{
                margin-top: 440px;
                height:25px;
                border-style: solid;
            }

            #informacionfactura div{
                float:left;
            }

            #descripcion{
                text-align:center;
                border-right: solid;
                width:345px;
            }

            #unidad{
                text-align:center;
                border-right: solid;
                width:120px;
            }
            #cantidad{
                text-align:center;
                border-right: solid;
                width:115px;
            }
            #importe{
                text-align:center;
                width:113px;
            }

            #contenido{
                margin-top:20px;
                height:350px;
                border-style: solid;
                padding:10px;

            }

            #totales{
                margin-top:20px;
                height:92px;
                width:228px;
                border-style: solid;
                float:right;
            }

            #subtotal{
                text-align:center;
                border-right: solid;
                border-bottom: solid;
                width:115px;
                height:30px;
            }

            #igic{
                text-align:center;
                border-right: solid;
                width:115px;
                height:30px;
            }

            #total{
                text-align:center;
                border-right: solid;
                border-top: solid;
                width:115px;
                height:30px;
            }
            #subtotalr{
                float:right;
                text-align:center;
                border-bottom: solid;
                width:113px;
                height:30px;
                margin-top:-94px
            }

            #igicr{
                float:right;
                text-align:center;
                width:113px;
                height:30px;
                margin-top:-63px
            }

            #totalr{
                float:right;
                text-align:center;
                border-top: solid;
                width:113px;
                height:30px;
                margin-top:-32px
            }

            #pago{
                line-height : 15px;
                margin-top:110px;
                float:left;
            }

            #pequeno{
                font-size:12px;
            }

            #espaciado{
                margin-left:145px;
            }
            
            #objetodescripcion{
                width: 345px;
            }
            #objetoprecio{
                float:right;
                margin-top:-25px;
                margin-right:220px;
                text-align:center;
                width: 120px;
            }
            #objetocantidad{
                float:right;
                margin-top:-25px;
                margin-right:105px;
                text-align:center;
                width: 115px;
            }
            #objetototal{
                float:right;
                margin-top:-25px;
                text-align:center;
                width: 113px;
            }
                       
        </style>


    </head>
    <body>
        <div class="panel">
            @yield('contenido')
        </div>


    </body>
</html>