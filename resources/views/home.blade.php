@extends('adminlte::page')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Codigo QR') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <button type="button" class="btn btn-info" data-toggle="modal" data-target="#exampleModal">
                        <i class="fas fa-mobile-alt"></i>
                      </button>
                      @include('Archivo.modal')
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
