<div class="card my-4">
    <div class="card-body">
        <div class="row">
            <div class="col">
                @for ($i = 0; $i < 6; $i++)
                    <div class="form-group row">
                        <label class="col-lg-6">Lorem, ipsum dolor.</label>
                        <div class="col">
                            <input type="text" class="form-control form-control-sm">
                        </div>
                    </div>
                @endfor
            </div>
            <div class="col">
                <div class="row">
                    @for ($i = 0; $i < 5; $i++)
                        <div class="form-group col-lg-4">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                <label class="form-check-label" for="defaultCheck1">
                                Default checkbox
                                </label>
                            </div>
                        </div>
                    @endfor
                </div>

                <div class="form-group">
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                    <label for="exampleFormControlTextarea1">Example textarea</label>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="card my-4">
    <div class="card-body">
        @for ($i = 0; $i < 11; $i++)
            @if ($i <2)
                <div class="form-group">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                        <label class="form-check-label" for="defaultCheck1">
                        Default checkbox
                        </label>
                    </div>
                </div>
            @else
                <div class="form-group row">
                    <label class="col-lg-6">Lorem, ipsum dolor.</label>
                    <div class="col">
                        <input type="text" class="form-control form-control-sm">
                    </div>
                </div>
            @endif
        @endfor
    </div>
</div>

<div class="card my-4">
    <div class="card-body">
        <div class="form-group">
            <label>Lorem, ipsum dolor.</label>
            <input type="text" class="form-control form-control-sm">
        </div>

        <div class="row">
            @for ($i = 0; $i < 7; $i++)
                <div class="form-group col-lg-4">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                        <label class="form-check-label" for="defaultCheck1">
                        Default checkbox
                        </label>
                    </div>
                </div>
            @endfor
        </div>

        <div class="form-group">
            <label>Lorem, ipsum dolor.</label>
            <input type="text" class="form-control form-control-sm">
        </div>
    </div>
</div>

<div class="card my-4">
    <div class="card-body">
        <div class="row">
            @for ($i = 0; $i < 12; $i++)
                @if ($i == 4 || $i == 8)
                    <div class="col-lg-3">
                        <p>lorem</p>
                    </div>
                @else
                    <div class="form-group col-lg-3">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                            <label class="form-check-label" for="defaultCheck1">
                            Default checkbox
                            </label>
                        </div>
                    </div>
                @endif
            @endfor
        </div>

        @for ($i = 0; $i < 2; $i++)
            <div class="form-group row">
                <label class="col-lg-6">Lorem, ipsum dolor.</label>
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
            @for ($i = 0; $i < 10; $i++)
                <div class="form-group col-lg-3">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                        <label class="form-check-label" for="defaultCheck1">
                        Default checkbox
                        </label>
                    </div>
                </div>
            @endfor
        </div>

        <div class="form-group row">
            <label class="col-lg-3">Lorem, ipsum dolor.</label>
            <div class="col">
                <input type="text" class="form-control form-control-sm">
            </div>
        </div>
    </div>
</div>

<div class="card my-4">
    <div class="card-body">
        @for ($i = 0; $i < 4; $i++)
            <div class="form-group row">
                <label class="col-lg-3"></label>
                <div class="col">
                    <input class="form-control form-control-sm">
                </div>
            </div>
        @endfor
    </div>
</div>

<div class="card my-4">
    <div class="card-body">
        @for ($i = 0; $i < 7 ; $i++)
            <div class="form-group row">
                <label class="col-lg-3">Lorem ipsum dolor sit amet.</label>
                @for ($j = 0; $j < 4; $j++)
                    <div class="col">
                        <input type="text" class="form-control form-control-sm">
                    </div>
                @endfor
            </div>
        @endfor
    </div>
</div>


<div class="card my-4">
    <div class="card-body">
        @for ($i = 0; $i < 10 ; $i++)
            <div class="form-group row">
                <label class="col-lg-3">Lorem ipsum dolor sit amet.</label>
                @for ($j = 0; $j < 4; $j++)
                    <div class="col">
                        <input type="text" class="form-control form-control-sm">
                    </div>
                @endfor
            </div>
        @endfor
    </div>
</div>

<div class="card my-4">
    <div class="card-body">
        @for ($i = 0; $i < 4; $i++)
            <div class="form-group row">
                <label class="col-lg-3"></label>
                <div class="col">
                    <input class="form-control form-control-sm">
                </div>
            </div>
        @endfor
    </div>
</div>

<div class="card my-4">
    <div class="card-body">
        @for ($i = 0; $i < 3; $i++)
            <div class="form-group row">
                <label class="col-lg-3"></label>
                <div class="col">
                    <input class="form-control form-control-sm">
                </div>
            </div>
        @endfor
    </div>
</div>