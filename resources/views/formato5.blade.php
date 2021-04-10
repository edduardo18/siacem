@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <form method="POST" action="{{ url('api/stage5') }}">
        @csrf
            @include('partials._formato5')
            <div class="form-group text-center">
                <button type="submit" class="btn btn-primary">siguiente</button>
            </div>
        </form>
    </div>
@endsection

@section('scripts')
    <script>
        const dataDescription = [
            '1. Estado:',
            '2. Municipio:',
            '3. Localidad (es):',
            '4. Fecha del brote:',
            '5. Fecha de consumo:',
            '6. Domicilio del brote:',
            'ETA',
            'Hepatitis "A"',
            'Intoxicación',
            'Zoonótica',
            'Otra:',
            'Infección Nosocomial',
            'Institución Educativa',
            'Restaurante',
            'Domicilio particular',
            'Otro:',
            '9. Nombre o razón social del sitio donde se origino el brote:',
            '10. No. de personas en riesgo:',
            '11. Número de casos:',
            '12. Hospitalizados:',
            '12.1. Altas médicas:',
            '12.2.  Lugar de atención médica:',
            '13. Agente Causal:',
            '15.1. No. de casos confirmados por análisis de Laboratorio:',
            '15.2. No. de muestras humanas:',
            '15.3. Casos confirmados por diagnóstico clínico:',
            '15.4. Especificar el diagnóstico:',
            '16. Seguimiento de casos:',





            'Sin síntomas',
            'Nausea',
            'Vómito',
            'Fiebre',
            'Deshidratación',
            'Taquicardia',
            'Hipodinamia',
            'Visión borrosa',
            'Ictericia',
            'Diarrea',
            'Arritmia',
            'Calambres abdominales',
            'Temblor de extremidades',
            'Conjuntivas amarillentas',
            'Vértigo',
            'Cefalea',
            'Otros:',


            '21.  Observaciones:',
            '22. Nombre:',
            '23. Cargo:'
        ]
        const input = document.querySelectorAll('input')
        console.log(input)
        const label = document.querySelectorAll('label')
        for (let i = 0; i < label.length; i++) {
            label[i].textContent = dataDescription[i]
        }
    </script>
@endsection