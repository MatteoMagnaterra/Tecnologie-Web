@extends('layouts.public')

@section('title', 'Dipartimenti - Health Center')

@section('navbar')
    @include('partials.navbar') {{-- Qui metti la navbar standard --}}
@endsection

@section('content')
<!-- Services Start -->
<div class="container-fluid py-5">
    <div class="container">
        <div class="text-center mx-auto mb-5" style="max-width: 500px;">
            <h1 class="display-4">I nostri dipartimenti</h1>
        </div>
        
        <div class="container py-5">
            <div class="mx-auto" style="width: 100%; max-width: 600px;">
                <form method="GET" action="{{ route('dipartimenti') }}">
                    <div class="input-group">
                        <input type="text" name="search" class="form-control border-primary w-50" placeholder="Cerca dipartimento" value="{{ request('search') }}">
                        <button type="submit" class="btn btn-dark border-0 w-25">Cerca</button>
                    </div>
                </form>
            </div>
        </div>


        <div class="row g-5">
            @foreach($dipartimenti as $dip)
                <div class="col-lg-4 col-md-6">
                    <div class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
                        <h4 class="mb-3">{{ $dip->nome }}</h4>
                        <a class="btn btn-lg btn-primary rounded-pill" href="{{ route('dipartimenti1', ['id' => $dip->idDip]) }}">
                            <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
    <!-- Services End -->
@endsection
