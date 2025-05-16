@extends('layouts.public')

@section('title', 'Specialisti - Health Center')

@section('content')
<!-- About Start -->
<div class="container-fluid py-5">
    <div class="container">
        <div class="row gx-5">
            <div class="col-lg-5 mb-5 mb-lg-0" style="min-height: 500px;">
                <div class="position-relative h-100">
                    <img class="position-absolute w-100 h-100 rounded" src="{{ asset('img/medici.png') }}" style="object-fit: cover;" alt="Team di medici specialisti">
                </div>
            </div>
            <div class="col-lg-7">
                <div class="mb-4">
                    <h1 class="display-4">La migliore assistenza medica per te e la tua famiglia</h1>
                </div>
                <p>Il nostro centro medico si avvale di un team di medici specialisti altamente qualificati, con esperienza in diverse aree della medicina moderna.</p>
            </div>
        </div>
    </div>
</div>
<!-- About End -->

<!-- Elenco Specialisti -->
<div style="font-family: Arial, sans-serif; padding: 20px;">
    <h2 style="color: black;">I nostri specialisti</h2>
    @forelse ($specialisti as $specialista)
        <p style="color: #00CFE8;">Dott. {{ $specialista->nome }} {{ $specialista->cognome }}</p>
    @empty
        <p>Nessuno specialista trovato.</p>
    @endforelse
</div>
@endsection
