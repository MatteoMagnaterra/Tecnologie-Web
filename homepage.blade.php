<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>HEALTH CENTER - homapage</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="{{ asset('img/favicon.ico') }}" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@400;700&family=Roboto:wght@400;700&display=swap" rel="stylesheet">  

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{ asset('lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ asset('lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css') }}" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
</head>

<body>
    


    <!-- Navbar Start -->
    <div class="container-fluid sticky-top bg-white shadow-sm">
        <div class="container">
            <nav class="navbar navbar-expand-lg bg-white navbar-light py-3 py-lg-0">
                <a href="homepage.html" class="navbar-brand">
                    <h1 class="m-0 text-uppercase text-primary"><i class="fa fa-clinic-medical me-2"></i>Health Center</h1>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav ms-auto py-0">
                        <a href="homepage.html" class="nav-item nav-link active">Homepage</a>
                        <a href="chisiamo.html" class="nav-item nav-link">Chi siamo</a>
                        <a href="specialisti.html" class="nav-item nav-link">Specialisti</a>
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Dipartimenti</a>
                            <div class="dropdown-menu m-0">
                                <a href="cardiologia.html" class="dropdown-item">Cardiologia</a>
                                <a href="neurologia.html" class="dropdown-item">Neurologia</a>
                                <a href="ortopedia.html" class="dropdown-item">Ortopedia</a>
                                <a href="pediatria.html" class="dropdown-item">Pediatria</a>
                                <a href="pneumologia.html" class="dropdown-item">Pneumologia</a>
                                <a href="radiologia.html" class="dropdown-item">radiologia</a>
                            </div>
                        </div>
                        <a href="login.html" class="nav-item nav-link">Log in</a>
                    </div>
                </div>
            </nav>
        </div>
    </div>
    <!-- Navbar End -->


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
                     <a href="" class="btn rounded-pill py-md-3 px-md-5 mx-2" style="background-color: #00CFE8; color: white;">Chi siamo</a>
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
            <img src="img/dipartimentimedici.jpg" alt="Servizi Centro Medico" class="img-fluid rounded" style="max-width: 100%; height: auto;">
        </div>

        <!-- Pulsante -->
        <div class="pt-2 text-center">
            <a href="" class="btn rounded-pill py-md-3 px-md-5 mx-2" style="background-color: #00CFE8; color: white;">
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
                <a href="" class="btn rounded-pill py-md-3 px-md-5 mx-2" style="background-color: #00CFE8; color: white;">I nostri specialisti</a>
            </div>
        </div>
    </div>
    <!-- Team End -->
    

    <!-- Footer Start -->
<div class="container-fluid bg-dark text-light mt-5 py-5 footer-custom">
    <div class="container py-1">
        <div class="row g-5">
            <div class="col-lg-4 col-md-6 d-flex justify-content-center align-items-center">
                <a href="homepage.html" class="navbar-brand">
                    <h1 class="m-0 text-uppercase text-primary"><i class="fa fa-clinic-medical me-2"></i>Health Center</h1>
                </a>
            </div>
            <div class="col-lg-3 col-md-6">
                <h4 class="d-inline-block text-primary text-uppercase border-bottom border-5 border-secondary mb-4">Mettiti in contatto</h4>
                <p class="mb-2"><i class="fa fa-map-marker-alt text-primary me-3"></i>I Settembre, Ancona, Italia</p>
                <p class="mb-2"><i class="fa fa-envelope text-primary me-3"></i>health.center@gmail.com</p>
                <p class="mb-0"><i class="fa fa-phone-alt text-primary me-3"></i>+012 345 67890</p>
            </div>
            <div class="col-lg-3 col-md-6">
                <h4 class="d-inline-block text-primary text-uppercase border-bottom border-5 border-secondary mb-4">Popular Links</h4>
                <div class="d-flex flex-column justify-content-start">
                    <a class="text-light mb-2" href="#"><i class="fa fa-angle-right me-2"></i>Homepage</a>
                    <a class="text-light mb-2" href="#"><i class="fa fa-angle-right me-2"></i>Chi siamo</a>
                    <a class="text-light mb-2" href="#"><i class="fa fa-angle-right me-2"></i>Dipartimenti</a>
                    <a class="text-light mb-2" href="#"><i class="fa fa-angle-right me-2"></i>Specialisti</a>
                    <a class="text-light mb-2" href="#"><i class="fa fa-angle-right me-2"></i>Log in</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Footer End -->


    <!-- Back to Top -->
<a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>

<!-- JavaScript Libraries -->
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="{{ asset('lib/easing/easing.min.js') }}"></script>
<script src="{{ asset('lib/waypoints/waypoints.min.js') }}"></script>
<script src="{{ asset('lib/owlcarousel/owl.carousel.min.js') }}"></script>
<script src="{{ asset('lib/tempusdominus/js/moment.min.js') }}"></script>
<script src="{{ asset('lib/tempusdominus/js/moment-timezone.min.js') }}"></script>
<script src="{{ asset('lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js') }}"></script>

<!-- Template Javascript -->
<script src="{{ asset('js/main.js') }}"></script>
</body>

</html>
