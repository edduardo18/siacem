@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <form method="POST" action="{{ url('api/stage1') }}">
            @csrf
            @include('partials._formato1')
            <input type="text"  value="{{ uniqid() }}">
            <div class="form-group text-center">
                <button type="submit" class="btn btn-primary">siguiente</button>
            </div>
        </form>
    </div>
@endsection

@section('scripts')
    <script>
        const infoLabel = [
                "Estado:",
                "Evento:",
                "Tipo de Evento:",
                "No. de población afectada:",
                "Fecha de ocurrencia:",
                "Fecha de Informe:",
                "Nombre de los Municipios Afectados y la Jurisdicción Sanitaria en la que se incluyen",
                "Número de Habitantes Afectados por Municipio",
                "Nombre de las Localidades afectadas por Municipio",
                "Número de Habitantes Afectados por Localidad",
                "Nombre y ubicación de los RefugiosTemporales  que entraron en Operación",
                "Localidad Afectada",
                "Establecimientos de Productos y Servicios",
                "Establecimientos de Servicios de Salud y distribucion de insumos para la Salud",
                "Establecimientos que Manipulan Sustancias Tóxicas o Peligrosas",
                "Escuelas",
                "Otros giros no considerados en los anteriores",
                "Población Alojada por Refugio Instalado",
                "· Afectación de la red de abastecimiento de agua",
                "· Inundación de pozos y/o fuentes de abastecimiento de agua (indicar cuantos)",
                '· Afectación al suministro de energía eléctrica (horas) que pudo originar la alteración de alimentos perecederos  o productos biológicos"',
                "· Derrame de aguas negras",
                "· Animales muertos",
                "· Otros: inundaciones, lodos, afectaciones a hospitales y/o escuelas, etc.",
                "Otro equipo",
                "Nombre y Cargo:"
        ]

        const parrafo = [
            "Hipoclorito de calcio",
            "Lámpara U.V.",
            "Generador de electricidad",
            "Plata coloidal",
            "Incubadora bacteriológica",
            "Cámara",
            "Colilert",
            "Bombas para desalojo de lodos y agua",
            "Teléfonos/ Radio de comunicación",
            "Cal",
            "Vehículos (indicar de que tipo y número)",
            "Plantas potabilizadoras de agua",
            "Kit para determinar cloro",
            "Equipos para cloración",
            "Otro equipo (especifique)"
        ];

        const label = document.querySelectorAll("label");
        const input = document.querySelectorAll("input");
        const p = document.querySelectorAll("p");

        for (let i = 0; i < label.length; i++) {
            label[i].textContent = infoLabel[i];
        }

        for (let i = 0; i < p.length; i++) {
            p[i].textContent = parrafo[i];
        }

        for (let i = 3; i < input.length; i++) {
            input[i].setAttribute("name", "data" + (i - 2));
            input[i].setAttribute("id", "data" + (i - 2));
        }

        input[3].addEventListener("keyup", () => {
            if (input[3].value == "Acciones Preventivas") {
                input[4].value = "AP";
            } else if (input[3].value == "Brotes Hospitalarios") {
                input[4].value = "BH";
            } else if (input[3].value == "Brotes Infecciosos") {
                input[4].value = "BI";
            } else if (input[3].value == "Desastres Naturales") {
                input[4].value = "DN";
            } else if (input[3].value == "Exposición a otros agentes") {
                input[4].value = "EOA";
            }
        });
        // switch
        label[18].setAttribute("for", "data18");
        label[19].setAttribute("for", "data21");
        label[20].setAttribute("for", "data24");
        label[21].setAttribute("for", "data27");
        label[22].setAttribute("for", "data30");
        label[23].setAttribute("for", "data33");

        input[5].setAttribute("type", "number");
        input[5].setAttribute("min", "0");
        // settings value
        input[2].value ='Chiapas'
        input[5].value = 0

        let fecha = new Date()
        let options = { year: 'numeric', month: 'long', day: 'numeric' }

        input[6].value = fecha.toLocaleDateString('es-ES', options)
        input[7].value = fecha.toLocaleDateString('es-ES', options)

        input[3].value = 'Acciones Preventivas'
        input[4].value = 'AP'

        input[70].setAttribute('name','user_id')
        input[70].setAttribute('id','user_id')
    </script>
@endsection