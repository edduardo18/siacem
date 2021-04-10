@for ($i = 0; $i < 3; $i++)
    <div class="card my-4">
        <div class="card-body">
            @for ($j = 0; $j < 6; $j++)
                <div class="row form-group">
                    <label class="col-sm-6"></label>
                    <div class="col">
                        <input type="text" class="form-control form-control-sm" />
                    </div>
                </div>
            @endfor
        </div>
    </div>
@endfor

<div class="card my-4">
    <div class="card-body">
        @for ($i = 0; $i < 6; $i++)
            <div class="row">
                <div class="col-lg-6">
                    <div class="custom-control custom-switch">
                        <input type="checkbox" class="custom-control-input">
                        <label class="custom-control-label">Toggle this switch element</label>
                    </div>
                </div>

                <div class="form-group col">
                    <input type="text" class="form-control form-control-sm">
                </div>
                
                <div class="form-group col">
                    <input type="text" class="form-control form-control-sm">
                </div>
            </div>
        @endfor
    </div>
</div>

<div class="card my-4">
    <div class="card-body">
        <div class="row">
            @for ($i = 0; $i < 15; $i++)
                <div class="col-lg-4 row">
                    <div class="col-lg-6">
                        <p>Lorem ipsum dolor sit.</p>
                    </div>
                    <div class="form-group col">
                        <input type="number" min="0" class="form-control form-control-sm" value="0">
                    </div>
                    <div class="form-group col">
                        <input type="number" min="0" class="form-control form-control-sm" value="0">
                    </div>
                </div>
            @endfor
        </div>

        <div class="bg-primary"></div>
        @for ($i = 0; $i < 2; $i++)
            <div class="row form-group">
                <label class="col-sm-4"></label>
                <div class="col">
                    <input type="text" class="form-control form-control-sm" />
                </div>
            </div>
        @endfor
    </div>
</div>
