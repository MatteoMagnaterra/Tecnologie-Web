@extends('layouts.public')

@section('title', 'Specialisti - Health Center')

@section('navbar')
    @include('partials.navbar') {{-- Qui metti la navbar standard --}}
@endsection

@section('content')
<!-<!-- About Start -->
<div class="container-fluid py-5">
    <div class="container">
        <div class="row gx-5">
            <div class="col-lg-5 mb-5 mb-lg-0" style="min-height: 500px;">
                <div class="position-relative h-100">
                    <!-- Immagine aggiornata: team di dottori -->
                    <img class="position-absolute w-100 h-100 rounded" src="img/medici.jpg" style="object-fit: cover;" alt="Team di medici specialisti">
                </div>
            </div>
            <div class="col-lg-7">
                <div class="mb-4">
                    
                    <h1 class="display-4">La migliore assistenza medica per te e la tua famiglia</h1>
                </div>
                <p>Il nostro centro medico offre un servizio sanitario di eccellenza, basato sull’integrazione tra competenza professionale e attenzione alla persona. I nostri specialisti operano in sinergia per garantire diagnosi accurate, trattamenti efficaci e percorsi terapeutici personalizzati. 
                    Ogni medico è costantemente aggiornato sulle ultime novità cliniche, al fine di offrire un approccio moderno e multidisciplinare alle esigenze del paziente.</p>
                <p>Con reparti che spaziano dalla cardiologia alla dermatologia, dalla radiologia alla pediatria, il nostro centro mette al primo posto la salute, il benessere e la fiducia del paziente, accogliendolo in un ambiente professionale e umano, dove ogni visita è costruita su misura. 
                    Il nostro obiettivo è accompagnare ogni famiglia in un percorso di prevenzione, cura e salute a lungo termine.</p>
            </div>
        </div>
    </div>
</div>
<!-- About End -->

    

    <!-- Services Start -->
    <div class="container py-5">
            <div class="mx-auto" style="width: 100%; max-width: 600px;">
                <form method="GET" action="{{ route('specialisti') }}" class="container py-5">
                    <div class="mx-auto" style="width: 100%; max-width: 600px;">
                        <div class="input-group">
                            <input type="text" name="search" class="form-control border-primary w-50" placeholder="Cerca specialista" value="{{ request('search') }}">
                            <button type="submit" class="btn btn-dark border-0 w-25">Cerca</button>
                        </div>
                    </div>
                </form>
            </div>
    </div>
    
    <!--elenco specialisti dinamico-->
<div style="font-family: Arial, sans-serif; padding: 20px;">
    @php
        $gruppati = $specialisti->groupBy(fn($s) => $s->dipartimento->nome ?? 'Senza dipartimento');
    @endphp

    @foreach($gruppati as $nomeDipartimento => $medici)
        <h2 style="color: black; margin-top: 40px;">{{ strtoupper($nomeDipartimento) }}</h2>
        @foreach($medici as $medico)
            <p style="color: #00CFE8;">
                <i class="fas fa-user-md" style="margin-right: 6px;"></i>
                Dott. {{ $medico->nome }} {{ $medico->cognome }}
            </p>
        @endforeach
    @endforeach
</div>


@endsection
