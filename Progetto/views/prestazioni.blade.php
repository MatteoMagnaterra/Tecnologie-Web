@extends('layouts.public')

@section('title', 'Prestazione - ' . $prestazione->nome)

@section('navbar')
    @include('partials.navbar') {{-- Qui metti la navbar standard --}}
@endsection

@section('content')
<div class="container py-5">
    <h1 class="mb-4">{{ $prestazione->nome }}</h1>

    <div class="mb-3">
        <strong>Descrizione:</strong>
        <p>{{ $prestazione->descrizione }}</p>
    </div>

    @if ($prestazione->prescrizioni)
    <div class="mb-3">
        <strong>Prescrizioni:</strong>
        <p>{{ $prestazione->prescrizioni }}</p>
    </div>
    @endif

    <div class="mb-3">
        <strong>Giorni di erogazione:</strong>
        <ul>
            @foreach(explode(',', $prestazione->giorni_settimana) as $giorno)
                <li>{{ $giorno }}</li>
            @endforeach
        </ul>
    </div>

    <div class="mb-3">
        <strong>Orari disponibili:</strong>
        <ul>
            @foreach($prestazione->getSlotOrari() as $slot)
                <li>{{ $slot->start_time }} - {{ $slot->end_time }}</li>
            @endforeach
        </ul>
        {{-- Se hai i dati dei time_slots, puoi usare quelli per mostrare start-end time --}}
    </div>

    @if($prestazione->specialista)
    <div class="mb-3">
        <strong>Specialista:</strong>
        <p>{{ $prestazione->specialista->nome }} {{ $prestazione->specialista->cognome }}</p>
    </div>
    @endif
</div>
@endsection
