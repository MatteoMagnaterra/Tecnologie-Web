@extends('layouts.public')

@section('title', 'Homepage - Health Center')

@section('content')
    <!-- Hero Start -->
    <div class="container-fluid bg-primary py-5 mb-5 hero-header">
        <div class="container py-5">
            <div class="row justify-content-start">
                <div class="col-lg-8 text-center text-lg-start">
                    <h5 class="d-inline-block text-primary text-uppercase border-bottom border-5" style="border-color: rgba(256, 256, 256, .3) !important;">Benvenuti nel nostro centro medico</h5>
                    <h1 class="display-1 text-white mb-md-4">La migliore soluzione sanitaria nella tua città</h1>
                    <div class="pt-2" style="height: 70px;"></div>
                </div>
            </div>
        </div>
    </div>
    <!-- Hero End -->


    <!-- About Start -->
    <div class="container-fluid py-5">
        <div class="container">
            <div class="row gx-5">
                <div class="col-lg-5 mb-5 mb-lg-0" style="min-height: 500px;">
                    <div class="position-relative h-100">
                        <img class="position-absolute w-100 h-100 rounded" src="img/about.jpg" style="object-fit: cover;">
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="mb-4">
                        <h5 class="d-inline-block text-primary text-uppercase border-bottom border-5">Chi Siamo</h5>
                        <h1 class="display-4">La migliore assistenza medica per te e la tua famiglia</h1>
                    </div>
                    <p>Health Center in grado di offrire prestazioni medico specialistiche e strumentali per ogni esigenza, senza lista d'attesa.</p>
                    <div class="row g-3 pt-3 justify-content-center text-center">
                        <div class="col-sm-3 col-6">
                            <div class="bg-light text-center rounded-circle py-4">
                                <i class="fa fa-3x fa-user-md text-primary mb-3"></i>
                                <h6 class="mb-0">Dottori<small class="d-block text-primary">Qualificati</small></h6>
                            </div>
                        </div>
                        <div class="col-sm-3 col-6">
                            <div class="bg-light text-center rounded-circle py-4">
                                <i class="fa fa-3x fa-procedures text-primary mb-3"></i>
                                <h6 class="mb-0">Prestazioni<small class="d-block text-primary">Mediche</small></h6>
                            </div>
                        </div>
                        <div class="col-sm-3 col-6">
                            <div class="bg-light text-center rounded-circle py-4">
                                <i class="fa fa-3x fa-microscope text-primary mb-3"></i>
                                <h6 class="mb-0">Analisi<small class="d-block text-primary">Accurate</small></h6>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="pt-2">
                     <a href="{{ route('chisiamo') }}" class="btn rounded-pill py-md-3 px-md-5 mx-2" style="background-color: #00CFE8; color: white;">Chi siamo</a>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->
    

    <!-- Services Start -->
<div class="container-fluid py-5">
    <div class="container">
        <div class="text-center mx-auto mb-5" style="max-width: 500px;">
            <h5 class="d-inline-block text-primary text-uppercase border-bottom border-5">Servizi</h5>
            <h1 class="display-4">Prestazioni mediche eccellenti</h1>
        </div>

        <!-- Immagine tra titoli e pulsante -->
        <div class="text-center mb-5">
            <img src="img/dipartimentimedici2.jpg" alt="Servizi Centro Medico" class="img-fluid rounded" style="max-width: 100%; height: auto;">
        </div>

        <!-- Pulsante -->
        <div class="pt-2">
            <a href="{{ route('dipartimenti') }}" class="btn rounded-pill py-md-3 px-md-5 mx-2" style="background-color: #00CFE8; color: white;">
                Dipartimenti
            </a>
        </div>
    </div>
</div>
<!-- Services End -->

    <!-- Team Start -->
    <div class="container-fluid py-5">
        <div class="container">
            <div class="text-center mx-auto mb-5" style="max-width: 500px;">
                <h5 class="d-inline-block text-primary text-uppercase border-bottom border-5">I nostri specialisti</h5>
                <h1 class="display-4">Professionisti sanitari qualificati</h1>
            </div>
            <div class="owl-carousel team-carousel position-relative">
                <div class="team-item">
                    <div class="row g-0 bg-light rounded overflow-hidden">
                        <div class="col-12 col-sm-5 h-100">
                            <img class="img-fluid h-100" src="{{ asset('img/team-1.jpg') }}" style="object-fit: cover;">
                        </div>
                        <div class="col-12 col-sm-7 h-100 d-flex flex-column">
                            <div class="mt-auto p-4">
                                <h3>Dott. Scansani Elia</h3>
                                <h6 class="fw-normal fst-italic text-primary mb-4">Cardiologia</h6>
                            </div>
                            <div class="d-flex mt-auto border-top p-4">
                                <a class="btn btn-lg btn-primary btn-lg-square rounded-circle me-3" href="#"><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-lg btn-primary btn-lg-square rounded-circle me-3" href="#"><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-lg btn-primary btn-lg-square rounded-circle" href="#"><i class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="team-item">
                    <div class="row g-0 bg-light rounded overflow-hidden">
                        <div class="col-12 col-sm-5 h-100">
                            <img class="img-fluid h-100" src="{{ asset('img/team-2.jpg') }}" style="object-fit: cover;">
                        </div>
                        <div class="col-12 col-sm-7 h-100 d-flex flex-column">
                            <div class="mt-auto p-4">
                                <h3>Dott. Magnaterra Matteo</h3>
                                <h6 class="fw-normal fst-italic text-primary mb-4">Ortopedia</h6>
                            </div>
                            <div class="d-flex mt-auto border-top p-4">
                                <a class="btn btn-lg btn-primary btn-lg-square rounded-circle me-3" href="#"><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-lg btn-primary btn-lg-square rounded-circle me-3" href="#"><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-lg btn-primary btn-lg-square rounded-circle" href="#"><i class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="team-item">
                    <div class="row g-0 bg-light rounded overflow-hidden">
                        <div class="col-12 col-sm-5 h-100">
                            <img class="img-fluid h-100" src="{{ asset('img/team-3.jpg') }}" style="object-fit: cover;">
                        </div>
                        <div class="col-12 col-sm-7 h-100 d-flex flex-column">
                            <div class="mt-auto p-4">
                                <h3>Dott. Tribulini Benedetta</h3>
                                <h6 class="fw-normal fst-italic text-primary mb-4">Neurologia</h6>
                            </div>
                            <div class="d-flex mt-auto border-top p-4">
                                <a class="btn btn-lg btn-primary btn-lg-square rounded-circle me-3" href="#"><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-lg btn-primary btn-lg-square rounded-circle me-3" href="#"><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-lg btn-primary btn-lg-square rounded-circle" href="#"><i class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="pt-2">
                <a href="{{ route('specialisti') }}" class="btn rounded-pill py-md-3 px-md-5 mx-2" style="background-color: #00CFE8; color: white;">I nostri specialisti</a>
            </div>
        </div>
    </div>
    <!-- Team End -->
@endsection