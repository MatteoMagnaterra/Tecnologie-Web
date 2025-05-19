@extends('layouts.public')

@section('title', 'Specialisti - Health Center')

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
                <div class="input-group">
                    <input type="text" class="form-control border-primary w-50" placeholder="Cerca specialista">
                    <button class="btn btn-dark border-0 w-25">Cerca</button>
                </div>
            </div>
            </div>
    <!--elenco specialisti-->
<div style="font-family: Arial, sans-serif; padding: 20px;">
    <h2 style="color: black; margin-top: 40px;">CARDIOLOGIA</h2>
    <p style="color: #00CFE8;"><i class="fas fa-user-md" style="margin-right: 6px;"></i>Dott. Luca Rinaldi</p>
    <p style="color: #00CFE8;"><i class="fas fa-user-md" style="margin-right: 6px;"></i>Dott. Elena Moretti</p>
    <p style="color: #00CFE8;"><i class="fas fa-user-md" style="margin-right: 6px;"></i>Dott. Giuseppe Conti</p>
    
    <h2 style="color: black;">NEUROLOGIA</h2>
    <p style="color: #00CFE8;"><i class="fas fa-user-md" style="margin-right: 6px;"></i>Dott. Marco Bianchi</p>
    <p style="color: #00CFE8;"><i class="fas fa-user-md" style="margin-right: 6px;"></i>Dott. Laura Ferri</p>
    <p style="color: #00CFE8;"><i class="fas fa-user-md" style="margin-right: 6px;"></i>Dott. Alessandro Greco</p>
    
    <h2 style="color: black; margin-top: 40px;">ORTOPEDIA</h2>
    <p style="color: #00CFE8;"><i class="fas fa-user-md" style="margin-right: 6px;"></i>Dott. Federica Galli</p>
    <p style="color: #00CFE8;"><i class="fas fa-user-md" style="margin-right: 6px;"></i>Dott. Matteo Colombo</p>
    <p style="color: #00CFE8;"><i class="fas fa-user-md" style="margin-right: 6px;"></i>Dott. Silvia Romano</p>
    
    <h2 style="color: black; margin-top: 40px;">PEDIATRIA</h2>
    <p style="color: #00CFE8;"><i class="fas fa-user-md" style="margin-right: 6px;"></i>Dott. Chiara Valentini</p>
    <p style="color: #00CFE8;"><i class="fas fa-user-md" style="margin-right: 6px;"></i>Dott. Lorenzo Marchetti</p>
    <p style="color: #00CFE8;"><i class="fas fa-user-md" style="margin-right: 6px;"></i>Dott. Martina Bellini</p>
    
    <h2 style="color: black; margin-top: 40px;">PNEUMOLOGIA</h2>
    <p style="color: #00CFE8;"><i class="fas fa-user-md" style="margin-right: 6px;"></i>Dott. Riccardo Fontana</p>
    <p style="color: #00CFE8;"><i class="fas fa-user-md" style="margin-right: 6px;"></i>Dott. Federica Pini</p>
    <p style="color: #00CFE8;"><i class="fas fa-user-md" style="margin-right: 6px;"></i>Dott. Gabriele Neri</p>

    <h2 style="color: black; margin-top: 40px;">RADIOLOGIA</h2>
    <p style="color: #00CFE8;"><i class="fas fa-user-md" style="margin-right: 6px;"></i>Dott. Alessia Mancini</p>
    <p style="color: #00CFE8;"><i class="fas fa-user-md" style="margin-right: 6px;"></i>Dott. Tommaso Barone</p>
    <p style="color: #00CFE8;"><i class="fas fa-user-md" style="margin-right: 6px;"></i>Dott. Elisa Ferretti</p>
</div>

@endsection
