@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <form method="POST" action="{{ url('api/stage4') }}">
        @csrf
            @include('partials._formato4')
            <div class="form-group text-center">
                <button type="submit" class="btn btn-primary">siguiente</button>
            </div>
        </form>
    </div>
@endsection

@section('scripts')
    <script>
        const dataDescripcion = [
            '28.1. Dentro de Norma',
            '28.2. Fuera de norma para Coliformes Totales',
            '28.3. Otros parámetros (Fuera de Norma)',
            'Muestras pendientes de resultado:',
            'T o t a l  de muestras tomadas:',
            'Punto de Muestreo:',
            '29.1. Dentro de Norma',
            '29.2. Positivos a Vibrio cholerae',
            '29.3. Otros parámetros (Fuera de Norma)',
            'Muestras pendientes de resultado',
            'T o t a l  de muestras tomadas:',
            '• Potable',
            '• Purificada',
            '• Otro',
            'T o t a l e s:',
            'Lácteos',
            'Cárnicos',
            'Pescados y Mariscos',
            'Abarrotes',
            'Vegetales',
            'Alimentos preparados',
            'Aguas frescas',
            'Agua Purificada',
            'Hielo Purificado',
            'Medicamentos',
            'Sustancias Tóxicas',
            'Tabaco',
            'Otros (especifique):',
            'T o t a l:',
            'Purificadoras de Agua',
            'Plantas de Hielo',
            'Tiendas de Autoservicio',
            'Restaurantes',
            'Vendedores Ambulantes',
            'S. Abastecimiento de agua',
            'Venta de productos carnicos y/o Pescados  y mariscos',
            'Servicios de Salud (Hospitales, Centro de Salud)',
            'Farmacias',
            'Sustancia Tóxicas',
            'Otros (especifique):',
            'T o t a l:',
        ]

        const label = document.querySelectorAll('label')
        for (let i = 0; i < label.length; i++) {
            label[i].textContent = dataDescripcion[i]
        }
    </script>
@endsection