@extends('layouts.public')

@section('title', 'Dipartimento - ' . $dipartimento->nome)

@section('navbar')
    @include('partials.navbar') {{-- Qui metti la navbar standard --}}
@endsection

@section('content')
<!-- Dipartimento Dettaglio Start -->
<div class="container-fluid py-5">
    <div class="container">
        <!-- Titolo del Dipartimento -->
        <div class="text-center mx-auto mb-5" style="max-width: 700px;">
            <h1 class="display-4">{{ $dipartimento->nome }}</h1>
        </div>

        <!-- Sezione a due colonne (invertita) -->
        <div class="row mb-5">
            <!-- Colonna sinistra: Descrizione -->
            <div class="col-md-6">
                <h3>Descrizione del Dipartimento</h3>
                <p>{{ $dipartimento->descrizione }}</p>
            </div>

            <!-- Colonna destra: Specialisti -->
            <div class="col-md-6">
                <h3>Specialisti del Dipartimento</h3>
                @if($dipartimento->specialisti->count())
                    <ul class="list-group">
                        @foreach($dipartimento->specialisti as $specialista)
                            <li>
                                {{ $specialista->nome }} {{ $specialista->cognome }}
                            </li>
                        @endforeach
                    </ul>
                @else
                    <p>Nessuno specialista disponibile per questo dipartimento.</p>
                @endif
            </div>
        </div>

        <!-- Elenco delle Prestazioni -->
        <div class="container">
            <h3 class="mb-4">Prestazioni disponibili:</h3>
            @if($dipartimento->prestazioni->count())
                <ul class="list-group">
                    @foreach($dipartimento->prestazioni as $prestazione)
                        <li>
                            <h5>
                                <a href="{{ route('prestazioni', $prestazione->idPrest) }}">
                                    {{ $prestazione->nome }}
                                </a>
                            </h5>
                        </li>
                    @endforeach
                </ul>
            @else
                <p>Nessuna prestazione disponibile per questo dipartimento.</p>
            @endif
        </div>
    </div>
</div>
<!-- Dipartimento Dettaglio End -->
@endsection
