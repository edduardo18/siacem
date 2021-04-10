@extends('layouts.template')

@section('scripts')
    <script>
        $(document).ready(function() {
                $('#stage1').DataTable({
                "serverSide": true,
                "ajax": "{{ url('api/stage1') }}",
                "columns": [
                    {data: 'id'},
                    {data: 'data1'},
                    {data: 'btn'}
                ],
                "language":{
                    "info":"_TOTAL_ registros",
                    "search": "Buscar",
                    "paginate":{
                        "next":"siguiente",
                        "previous":"anterior",
                    },
                    "lengthMenu": 'Registros <select class="form-control form-control-sm">'+
                        '<option value="10">10</option>'+
                        '<option value="20">20</option>'+
                        '<option value="30">30</option>'+
                        '<option value="-1">todos</option>'+
                        '</select>',
                    "loadingRecords": "Cargando...",
                    "processing": "Procesando...",
                    "zeroRecords": "No se encontraron resultados",
                    "infoEmpty": "Mostrando registros del 0 al 0 de un total de 0 registros",
                    "infoFiltered": "(filtrado de un total de _MAX_ registros)",
                    "paginate": {
                        "first": "Primero",
                        "last": "Último",
                        "next": "Siguiente",
                        "previous": "Anterior"
                    },
                }
            });
        });
    </script>
@endsection