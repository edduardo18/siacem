<div class="card my-4">
    <div class="card-body">
        @for ($i = 0; $i < 7; $i++)
            <div class="row form-group">
                @if ($i == 2)
                    <label class="col-sm-6"></label>
                    <div class="col">
                        <input type="text" class="form-control form-control-sm" />
                    </div>
                    <div class="col">
                        <input type="text" class="form-control form-control-sm" />
                    </div>
                @else
                    <label class="col-sm-6"></label>
                    <div class="col">
                        <input type="text" class="form-control form-control-sm" />
                    </div>
                @endif
            </div>
        @endfor
    </div>
</div>

<div class="card my-4">
    <div class="card-body">
        @for ($i = 0; $i < 8; $i++)
            <div class="row form-group">
                @if ($i >= 6)
                    <label class="col-sm-6"></label>
                    <div class="col">
                        <input type="number" min="0" class="form-control form-control-sm" />
                    </div>
                    <div class="col">
                        <input type="number" min="0" class="form-control form-control-sm" />
                    </div>
                @else
                    <label class="col-sm-6"></label>
                    <div class="col">
                        <input type="number" min="0" class="form-control form-control-sm" />
                    </div>
                @endif
            </div>
        @endfor
    </div>
</div>

<div class="card my-4">
    <div class="card-body">
        @for ($i = 0; $i < 16; $i++)
            <div class="row form-group">
                <label class="col-sm-6"></label>
                <div class="col">
                    <input type="number" min="0" class="form-control form-control-sm"/>
                </div>
                <div class="col">
                    <input type="number" min="0" class="form-control form-control-sm" />
                </div>
            </div>
        @endfor
    </div>
</div>

<div class="card my-4">
    <div class="card-body">
        @for ($i = 0; $i < 8; $i++)
            <div class="row form-group">
                @if ($i == 3 || $i == 4 || $i == 5 )
                    <label class="col-sm-6"></label>
                    <div class="col">
                        <input type="number" min="0" class="form-control form-control-sm" />
                    </div>
                    <div class="col">
                        <input type="number" min="0" class="form-control form-control-sm" />
                    </div>
                
                @else
                    <label class="col-sm-6"></label>
                    <div class="col">
                        <input type="number" min="0" class="form-control form-control-sm" />
                    </div>
                @endif
            </div>
        @endfor
    </div>
</div>

<div class="card my-4">
    <div class="card-body">
        @for ($i = 0; $i < 2; $i++)
            <div class="row form-group">
                <label class="col-sm-6"></label>
                <div class="col">
                    <input type="number" min="0" class="form-control form-control-sm"/>
                </div>
                <div class="col">
                    <input type="number" min="0" class="form-control form-control-sm" />
                </div>
            </div>
        @endfor
    </div>
</div>