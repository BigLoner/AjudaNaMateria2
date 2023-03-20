@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                   {{Auth::user()->name}}
                

                    <button type="button" class="btn btn-outline-primary"><a href="/">Clique aqui para voltar à pagina inicial!</a></button>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
