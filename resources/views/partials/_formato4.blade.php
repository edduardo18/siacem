<div class="card my-4">
    <div class="card-body">
        @for ($fila1 = 0; $fila1 < 6; $fila1++)
            <div class="form-group row">
                @if ($fila1 <5)
                    <label for="" class="col-lg-6">Lorem, ipsum dolor.</label>
                    @for ($columna1 = 0; $columna1 < 2; $columna1++)
                        <div class="col">
                            <input type="number" min="0" class="form-control form-control-sm">
                        </div>
                    @endfor
                @else
                    <label for="" class="col-lg-6">Lorem, ipsum dolor.</label>
                    <div class="col">
                        <input type="number" min="0" class="form-control form-control-sm">
                    </div>
                @endif
            </div>
        @endfor
    </div>
</div>

<div class="card my-4">
    <div class="card-body">
        @for ($fila1 = 0; $fila1 < 5; $fila1++)
            <div class="form-group row">
                <label for="" class="col-lg-6">Lorem, ipsum dolor.</label>
                @for ($columna1 = 0; $columna1 < 3; $columna1++)
                    <div class="col">
                        <input type="number" min="0" class="form-control form-control-sm">
                    </div>
                @endfor
            </div>
        @endfor
    </div>
</div>

<div class="card my-4">
    <div class="card-body">
        @for ($fila1 = 0; $fila1 < 5; $fila1++)
            <div class="form-group row">
                <label for="" class="col-lg-6">Lorem, ipsum dolor.</label>
                @for ($columna1 = 0; $columna1 < 5; $columna1++)
                    <div class="col">
                        <input type="number" min="0" class="form-control form-control-sm">
                    </div>
                @endfor
            </div>
        @endfor
    </div>
</div>

<div class="card my-4">
    <div class="card-body">
        @for ($fila1 = 0; $fila1 < 13; $fila1++)
            <div class="form-group row">
                <label for="" class="col-lg-6">Lorem, ipsum dolor.</label>
                @for ($columna1 = 0; $columna1 < 6; $columna1++)
                    <div class="col">
                        <input type="number" min="0" class="form-control form-control-sm">
                    </div>
                @endfor
            </div>
        @endfor
    </div>
</div>

<div class="card my-4">
    <div class="card-body">
        @for ($fila1 = 0; $fila1 < 12; $fila1++)
            <div class="form-group row">
                <label for="" class="col-lg-6">Lorem, ipsum dolor.</label>
                @for ($columna1 = 0; $columna1 < 6; $columna1++)
                    <div class="col">
                        <input type="number" min="0" class="form-control form-control-sm">
                    </div>
                @endfor
            </div>
        @endfor
    </div>
</div>