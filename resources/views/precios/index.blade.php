@extends('layouts.app')

@section("contenido")

    <h1>Listado de precios</h1>
    <a href="{{route('precios.create')}}" class="btn btn-primary mb-5 mt-5">Crear</a>
    <a href="{{route('index')}}" class="btn btn-primary mb-5 mt-5">Volver</a>

        <table id="tabla" class="table table-striped table-bordered">
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Precio</th>
                    <th>Medida</th>
                    <th>Editar</th>
                    <th>Borrar</th>
                </tr>
                
                    
            </thead>
            <tbody>
            @foreach ($precios as $precio)
                <tr data-id='{{$precio->id}}'>
                    <td>{{$precio->nombre}}</td>
                    <td>{{$precio->precio}}</td>
                    <td>{{$precio->medida}}</td>
                    <td><a href="{{url('/precios')}}/{{$precio->id}}/editar"><svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-pencil" viewBox="0 0 16 16"><path d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z"/></svg></td>
                    <td><svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-trash-fill" viewBox="0 0 16 16"><path d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z"/></svg></td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>

<script>
     $(document).ready(function(){

        


$("#tabla").on("click",".bi-trash-fill",function(e){
    e.preventDefault();
    //confirmar con sweetalert
    Swal.fire({
        title: '¿Está seguro?',
        text: "No podras revertir esta accion",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Si, borrar!'
    }).then((result) => {
        if (result.isConfirmed) {
            //redireccionar a la url
            //borrar con ajax
            const tr=$(this).closest("tr"); //tr más cercano al botón, o sea el tr que contiene al botón
            const id=tr.data("id"); //obtener el id del tr
            $.ajax({
                url: "{{url('/precios')}}/"+id,
                method: "DELETE",
                data: {
                    "_token": "{{ csrf_token() }}"
                },
                success: function(){
                    tr.fadeOut();
                }
            })
        }
    })    
});
});

$(document).ready( function () {
    $('#tabla').DataTable({
        "columnDefs": [
            
          { "orderable": false, "targets": 2 },//ocultar para columna 0
          { "orderable": false, "targets": 3 },//ocultar para columna 1
          { "orderable": false, "targets": 4 },//ocultar para columna 1

          //`Asi para cada columna`...
        ],
    });
} );
</script>

    



@endsection






