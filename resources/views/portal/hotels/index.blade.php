@extends('layouts.public')

@section('content')

@include('components.navbar')

<div class="container my-3" id="main-container">
    <div class="row">
        <div class="col">
            <h1 class="text-center">Hotéis e Pousadas</h1>
        </div>
    </div>
</div>
<div class="container">
    <div class="card mb-3">
        <div class="row no-gutters">
            <div class="col-md-4">
                <img src="/images/barrudada.jpg" title="Hotel Barrudada" class="img-fluid">
            </div>
            <div class="col-md-8">
                <div class="card-body">
                    <h5 class="card-title">Hotel Barrudada</h5>
                    <p class="card-text">Informações</p>
                    <p class="card-text">
                        <small class="text-muted">Um texto interessante</small>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>

@include('components.footer')

@endsection
