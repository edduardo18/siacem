<div class="card my-4">
    <div class="card-body">
        <div class="row">
            @for ($i = 0; $i < 2; $i++)
                <div class="col-lg-6">
                    @for ($j = 0; $j < 7; $j++)
                        <div class="form-group row">
                            <label for="" class="col-lg-6">Lorem ipsum dolor sit.</label>
                            <div class="col">
                                <input type="text" class="form-control form-control-sm">
                            </div>
                        </div>
                    @endfor
                </div>
            @endfor
        </div>
        
        <div class="form-group row">
            <label for="" class="col-lg-3">Lorem ipsum dolor sit.</label>
            <div class="col">
                <input type="text" class="form-control form-control-sm">
            </div>
        </div>
    </div>
</div>


<div class="card my-4">
    <div class="card-body">
        @for ($fila1 = 0; $fila1 < 6; $fila1++)
            <div class="form-group row">
                @if ($fila1 <4)
                    <label for="" class="col-lg-4">Lorem, ipsum dolor.</label>
                    @for ($columna1 = 0; $columna1 < 4; $columna1++)
                        <div class="col">
                            <input type="number" min="0" class="form-control form-control-sm">
                        </div>
                    @endfor
                @elseif($fila1 == 4)
                    <label for="" class="col-lg-6">Lorem, ipsum dolor.</label>
                    @for ($columna1 = 0; $columna1 < 3; $columna1++)
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
        <div class="row">
            <div class="col">
                <p class="text-muted">Pruebas Microbiológicas:</p>
                <hr class="bg-primary">
                @for ($i = 0; $i < 11; $i++)
                    <div class="form-group row">
                        <label for="" class="col-lg-6"></label>
                        <div class="col">
                            <input type="text" class="form-control form-control-sm">
                        </div>
                    </div>
                @endfor
            </div>
            <div class="col">
                <p class="text-muted">Pruebas Físico-químicas:</p>
                <hr class="bg-primary">
                @for ($i = 0; $i < 4; $i++)
                    <div class="form-group row">
                        <label for="" class="col-lg-6"></label>
                        <div class="col">
                            <input type="text" class="form-control form-control-sm">
                        </div>
                    </div>
                @endfor
            </div>
        </div>

        @for ($i = 0; $i < 2; $i++)
            <div class="form-group row">
                <label for="" class="col-lg-3"></label>
                <div class="col">
                    <input type="text" class="form-control form-control-sm">
                </div>
            </div>
        @endfor
    </div>
</div>

<div class="card my-4">
    <div class="card-body">
        <div class="row">
            <div class="col">
                <p class="text-muted">Pruebas Microbiológicas:</p>
                <hr class="bg-primary">
                @for ($i = 0; $i < 8; $i++)
                    <div class="form-group row">
                        <label for="" class="col-lg-6"></label>
                        <div class="col">
                            <input type="text" class="form-control form-control-sm">
                        </div>
                    </div>
                @endfor
            </div>
            <div class="col">
                <p class="text-muted">Pruebas Físico-químicas:</p>
                <hr class="bg-primary">
                @for ($i = 0; $i < 4; $i++)
                    <div class="form-group row">
                        <label for="" class="col-lg-6"></label>
                        <div class="col">
                            <input type="text" class="form-control form-control-sm">
                        </div>
                    </div>
                @endfor
            </div>
        </div>

        
        <div class="form-group row">
            <label for="" class="col-lg-3"></label>
            <div class="col">
                <input type="text" class="form-control form-control-sm">
            </div>
        </div>
    </div>
</div>