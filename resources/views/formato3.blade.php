@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <form method="POST" action="{{ url('api/stage3') }}">
        @csrf
            @include('partials._formato3')
            <div class="form-group text-center">
                <button type="submit" class="btn btn-primary">siguiente</button>
            </div>
        </form>
    </div>
@endsection

@section('scripts')
    <script>
        const dataDescripcion = [
            '25.1 Saneamiento Básico:',
            'Trípticos:',
            'Dípticos:',
            'Cartel:',
            'H.I:',
            'Otros:',
            'Otros (descripción):',
            '25.2 Manejo Higiénico de Alimentos:',
            'Trípticos:',
            'Dípticos:',
            'Cartel:',
            'H.I:',
            'Otros:',
            'Otros (descripción):',
            '25.3 Otros (especifique):',

            '26.1. Dentro de Norma (0.2 - 1.5 ppm)',
            '26.2. Cloro residual   < 0.2 ppm',
            '26.3. Cloro residual   > 1.5 ppm',
            '26.4. Sin cloro (0.0 ppm)',
            'Total de monitoreos:',
            'Total (red + pipas+depósitos):',

            '27.a Muestras Totales de Alimentos:',
            'DN',
            'FN',
            'C.T.',
            'E.coli',
            'V.c.',
            'V. p.',
            'Salmonella',
            'S.aureus.',
            'Otro (s)',
            'Otro(s) Parámetro(s) Microbiológico(s):',

            'Muestras Pendientes de Resultados:',
            'DN',
            'FN',
            'Parámetro (s) analizado (s):',
            'Tipo de alimento:',
            'Punto de Muestreo:',

            '27.b Muestras totales de Agua de uso y consumo humano:',
            'DN',
            'FN',
            'C.T',
            'E.Coli',
            'V.c.',
            'Otro (s)',
            'Otro(s) Parámetro(s) Microbiológico(s):',
            'Muestras Pendientes de Resultado:',
            'DN',
            'FN',
            'Parámetro (s) analizado (s):',
            'Punto de Muestreo:',
        ]

        const input = document.querySelectorAll('input')
        // console.log(input)

        const label = document.querySelectorAll('label')

        for (let i = 0; i < label.length; i++) {
            label[i].textContent = dataDescripcion[i]
        }
        
        for (let i = 0; i < input.length; i++) {
            if(i>1){
                input[i].value = 0
                input[i].setAttribute('name','data'+(i-1))
                input[i].setAttribute('id','data'+(i-1))
                input[i].setAttribute('type','number')
                input[i].setAttribute('min',0)
            }

            if(i == 47  || i ==52 || i == 53 || i ==66 || i == 61){
                input[i].setAttribute('type','text')
                input[i].value = ''
            }
        }

        // const suma1 = (val1,val2,val3,val4) => {
        //     input[val2].addEventListener('keyup', () =>{
        //         let total1 = 
        //         parseInt(input[val2].value) +
        //         parseInt(input[val3].value) +
        //         parseInt(input[val4].value)
                
        //         input[val1].value = total1
        //     })
        // }

        // suma1(17,18,19,20)
        // suma1(21,22,23,24)

        let contador = [18]
        for (let i = 0; i < 4; i++) {
            input[contador].addEventListener('keyup',() =>{
                console.log('sad')
            })
        }
        
        
    </script>
@endsection