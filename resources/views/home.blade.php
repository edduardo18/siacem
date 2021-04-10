@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Dashboard</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        <form method="POST" action="{{ url('api/stage1') }}">
                            @csrf
                            @for ($i = 0; $i < 4; $i++)
                                <input type="text" class="form-control form-control-sm">
                            @endfor
                            
                            <button type="submit" class="btn btn-primary">guardar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection