@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <form method="POST" action="{{ url('api/stage2') }}">
        @csrf
            @include('partials._formato2')
            <div class="form-group text-center">
                <button type="submit" class="btn btn-primary">siguiente</button>
            </div>
        </form>
    </div>
@endsection

@section('scripts')
    <script>
        const dataDescription = [
            '1. Evento (nombre):',
            '2. Tipo de Reporte (Diario):',
            'Concentrado Total (Período):  del',
            '3. Estado:',
            '4. Jurisdicción (es):',
            '5. Município (s):',
            '6. Localidad (es) y/o Colonia (s):',
            '7. Municipios afectados',
            '8. Localidades / Colonias afectadas',
            '9. Población en Riesgo',
            '10. Población Afectada',
            '11. Localidades / Colonias Trabajadas',
            '12. Población Protegida',
            '13. Refugios Temporales habilitados (H) / ocupados (O)',
            '14. Número de Personas alojadas',
            '• Plantas Purificadoras de Agua',
            '• Plantas de Hielo',
            '• Mercados Públicos',
            '• Tiendas de Autoservicio',
            '• Vendedores Ambulantes',
            '• Restaurantes',
            '• Centro de Preparación de Alimentos',
            '• Refugios Temporales',
            '• Disposición de Residuos Sólidos',
            '• Escuelas',
            '• Sistemas de Abastecimiento de Agua',
            '• Servicios de Salud (Hospitales, Centro de Salud)',
            '• Farmacias',
            '• Venta o distribución de Sustancias Tóxicas',
            '• Otros (especifique):',
            'Total:',
            '16. Plantas Potabilizadoras móviles instaladas',
            '17. Equipos de desinfección de agua instalados',
            '18. Distribución de Plata Coloidal (No. de frascos)',
            '19. Distribución de Hipoclorito de Calcio (Kg)',
            '20. Otros productos para la desinfección (especifique-lts o kg):',
            '21. Cloración de depósitos de agua (No. / L)',
            '22. Distribución de Cal (Kg)',
            '23. Encalamiento de focos infecciosos',
            '24.1. Pláticas de Manejo Higiénico de Alimentos',
            '24.2. Pláticas de Saneamiento Básico',
        ]

        const input = document.querySelectorAll('input')
        for (let i = 2; i < input.length; i++) {
            input[i].setAttribute('name','data'+(i-1))
            input[i].setAttribute('id','data'+(i-1))
            if(i>= 10) input[i].value = 0
            if(i == 56) input[i].setAttribute('step','0.007')
            if(i == 57) {
                input[i].setAttribute('type','text')
                input[i].removeAttribute('min')
                input[i].value = 'lts'
            }
        }
        
        const label = document.querySelectorAll('label')
        for (let i = 0; i < label.length; i++) {
            label[i].textContent = dataDescription[i]
            
        }

        let fecha = new Date()
        let options = { year: 'numeric', month: 'long', day: 'numeric' }

        input[4].value = fecha.toLocaleDateString('es-ES', options)
        input[5].value = fecha.toLocaleDateString('es-ES', options)
        input[6].value = 'chiapas'


        for (let contador1 = 20; contador1 < 52; contador1++) {
            if (contador1 % 2 == 0) {
                input[contador1].addEventListener('keyup', () => {
                    let total1 =
                        parseInt(input[20].value) +
                        parseInt(input[22].value) +
                        parseInt(input[24].value) +
                        parseInt(input[26].value) +
                        parseInt(input[28].value) +
                        parseInt(input[30].value) +
                        parseInt(input[32].value) +
                        parseInt(input[34].value) +
                        parseInt(input[36].value) +
                        parseInt(input[38].value) +
                        parseInt(input[40].value) +
                        parseInt(input[42].value) +
                        parseInt(input[44].value) +
                        parseInt(input[46].value) +
                        parseInt(input[48].value)
                    input[50].value = total1
                })
            } else {
                input[contador1].addEventListener('keyup', () => {
                    let total1 =
                        parseInt(input[21].value) +
                        parseInt(input[23].value) +
                        parseInt(input[25].value) +
                        parseInt(input[27].value) +
                        parseInt(input[29].value) +
                        parseInt(input[31].value) +
                        parseInt(input[33].value) +
                        parseInt(input[35].value) +
                        parseInt(input[37].value) +
                        parseInt(input[39].value) +
                        parseInt(input[41].value) +
                        parseInt(input[43].value) +
                        parseInt(input[45].value) +
                        parseInt(input[47].value) +
                        parseInt(input[49].value)
                    input[51].value = total1
                })
            }
        }

        input[55].addEventListener('keyup', () => {
            input[56].value = parseInt(input[55].value) * .007
        })
    </script>
@endsection