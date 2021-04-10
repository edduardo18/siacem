@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <form method="POST" action="{{ url('api/stage6') }}">
            @csrf
            @include('partials._formato6')
            <div class="form-group text-center">
                <button type="submit" class="btn btn-primary">guardar</button>
            </div>
        </form>
    </div>
@endsection

@section('scripts')
    <script>
        const dataDescription = [
            'Fecha (Día/Mes/Año):',
            'Hora:',
            'Estado:',
            'Municipio:',
            'Localidad  y/o Colonia:',
            'Carretera o Autopista:',
            'Explosión',
            'Derrame',
            'Fuga',
            'Incendio',
            'Intoxicación',
            'Otros Especificar:',
            'Evacuación de Población:',
            'Refugios Temporales:',
            'Población en Riesgo:',
            'Número de Evacuados:',
            'Número de Refugios:',
            'Población Protegida:',
            'Número de personas expuestas en forma directa:',
            'Número de Intoxicados:',
            'Número de Fallecidos:',
            'Número de personas expuestas en forma indirecta:',
            'Número de Lesionados:',
            'Distancia de afectación:',
            'Pozo profundo',
            'Pozos Artesianos',
            'Manantiales',
            'Lagos',
            'Lagunas',
            'Ríos',
            'Drenaje',
            'Otros Especificar:',
            'Zona  rural',
            'Zona  urbana',
            'Zona Industrial',
            'Zona Escolar',
            'Domicilio particular',
            'Establecimiento o Local comercial',
            'Vial o carretero',
            'Arcilloso',
            'Arenoso',
            'Rocoso',
            'Distancia de la Zona afectada con la Población y Fuentes de Abastecimiento:',
            'Otra Especificar:',
            'Error Humano',
            'Falla  mecánica',
            'Mal Almacenamiento',
            'Falla estructural',
            'Condiciones de Operación',
            'Falta de mantenimiento',
            'Sabotaje',
            'Se desconoce',
            'Exceso de velocidad en el transporte',
            'Fenómeno Natural',
            'Fenómeno Natural  (Especificar):',
            'Nombre o razón social:',
            'Giro:',
            'Domicilio:',
            'Telefono:',
            'Nombre Químico o Común (C.A.S)',
            'Riesgo a la Salud (Azul)',
            'Inflamabilidad',
            'Reactividad',
            'Riesgo Especifico',
            'Gas / Liquido / Sólido',
            'Cantidad de sustancia Involucrada',
            'Bomberos',
            'C.L.A.M',
            'Cruz Roja',
            'P.G.R.',
            'Policía Federal de Caminos',
            'Policía y Tránsito',
            'Protección Civil',
            'Secretaría de Salud',
            'SEDENA',
            'Otra:',
            'Nombre y tipo de la Unidad Médica:',
            'Institución a la que pertenece:',
            'Número de personas hospitalizadas:',
            'Evolución de Pacientes Hospitalizados',
            'Nombre:',
            'Puesto:',
            'Fecha:'
        ]

        const input = document.querySelectorAll('input')
        const label = document.querySelectorAll('label')
        for (let i = 0; i < label.length; i++) {
            label[i].textContent = dataDescription[i]
        }


        for (let i = 0; i < input.length; i++) {
            input[i].setAttribute('name','data'+(i-1))
            input[i].setAttribute('id','data'+(i-1))
        }

    </script>
@endsection
