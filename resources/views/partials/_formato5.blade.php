<div class="card my-4">
    <div class="card-body">
        <div class="row">
            @for ($i = 0; $i < 2; $i++)
                <div class="col-lg-6">
                    @for ($j = 0; $j < 3; $j++)
                        <div class="form-group row">
                            <label class="col-lg-4"></label>
                            <div class="col">
                                <input type="text" class="form-control form-control-sm">
                            </div>
                        </div>
                    @endfor
                </div>
            @endfor
        </div>
    </div>
</div>

<div class="card my-4">
    <div class="card-body">
        <div class="row">
            @for ($i = 0; $i < 2; $i++)
                <div class="col">
                    @for ($j = 0; $j < 5; $j++)
                        <div class="form-group row">
                            <label class="col-lg-4"></label>
                            <div class="col">
                                <input type="text" class="form-control form-control-sm">
                            </div>
                        </div>
                    @endfor
                </div>
            @endfor
        </div>
    </div>
</div>

<div class="card my-4">
    <div class="card-body">
        @for ($i = 0; $i < 7; $i++)
            <div class="form-group row">
                @if ($i == 2)
                    <label class="col-lg-4"></label>
                    <div class="col">
                        <input type="text" class="form-control form-control-sm">
                        <small>a. Probables</small>
                    </div>
                    <div class="col">
                        <input type="text" class="form-control form-control-sm">
                        <small>b. Confirmados</small>
                    </div>
                @else
                    <label class="col-lg-4"></label>
                    <div class="col">
                        <input type="text" class="form-control form-control-sm">
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
                <table class="table table-sm">
                    <thead>
                        <tr>
                            <th>Edades</th>
                            <th>Masculino</th>
                            <th>Femenino</th>
                            <th>Total</th>
                        </tr>
                    </thead>
                    <tbody>
                        @for ($i = 0; $i < 4; $i++)
                            <tr>
                                <td>
                                    <input type="text" class="form-control form-control-sm">
                                </td>
                                <td>
                                    <input type="number" min="0" class="form-control form-control-sm" value="0">
                                </td>
                                <td>
                                    <input type="number" min="0" class="form-control form-control-sm" value="0">
                                </td>
                                <td>
                                    <input type="number" min="0" class="form-control form-control-sm" value="0">
                                </td>
                            </tr>
                        @endfor
                    </tbody>
                </table>
            </div>
            <div class="col">
                @for ($i = 0; $i < 3; $i++)
                    <div class="form-group row">
                        <label class="col-lg-8"></label>
                        <div class="col">
                            <input type="text" class="form-control form-control-sm">
                        </div>
                    </div>
                @endfor
                <div class="form-group">
                    <label></label>
                    <input type="text" class="form-control form-control-sm">
                </div>
            </div>
        </div>
        <div class="form-group row">
            <label class="col-lg-4"></label>
            <div class="col">
                <input type="text" class="form-control form-control-sm">
            </div>
        </div>
    </div>
</div>

<div class="card my-4">
    <div class="card-body">
        <div class="row">
            @for ($i = 0; $i < 16; $i++)
                <div class="col-lg-3 form-group">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                        <label class="form-check-label" for="defaultCheck1"></label>
                    </div>
                </div>
            @endfor
            <div class="form-group row col">
                <label class="col-lg-2"></label>
                <div class="col">
                    <input type="text" class="form-control form-control-sm">
                </div>
            </div>
        </div>
    </div>
</div>

<div class="card my-4">
    <div class="card-body">
        @for ($i = 0; $i < 3; $i++)
            <div class="form-group row">
                <label class="col-lg-4"></label>
                @if ($i == 0)
                    <div class="col">
                        <textarea class="form-control" rows="3"></textarea>
                    </div>
                @else
                    <div class="col">
                        <input type="text" class="form-control form-control-sm">
                    </div>
                @endif
            </div>
        @endfor
    </div>
</div>