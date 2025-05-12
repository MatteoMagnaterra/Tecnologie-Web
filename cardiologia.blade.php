<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>HEALTH CENTER - Hospital Website Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
   <link href="{{asset('img/favicon.ico') }}" rel="icon">
   
    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@400;700&family=Roboto:wght@400;700&display=swap" rel="stylesheet">  

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

     <!-- Libraries Stylesheet -->
    <link href="{{asset('lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{asset('lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css') }}" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{asset('css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{asset('css/style.css') }}" rel="stylesheet">
</head>

<body>
    
<!-- Navbar Start -->
    <div class="container-fluid sticky-top bg-white shadow-sm">
        <div class="container">
            <nav class="navbar navbar-expand-lg bg-white navbar-light py-3 py-lg-0">
                <a href="index.html" class="navbar-brand">
                    <h1 class="m-0 text-uppercase text-primary"><i class="fa fa-clinic-medical me-2"></i>HEALTH CENTER</h1>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav ms-auto py-0">
                        <a href="index.html" class="nav-item nav-link">Homepage</a>
                        <a href="about.html" class="nav-item nav-link">Chi siamo</a>
                        <a href="price.html" class="nav-item nav-link">Specialisti</a>
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link active dropdown-toggle" data-bs-toggle="dropdown">Dipartimenti</a>
                            <div class="dropdown-menu m-0">
                                <a href="blog.html" class="dropdown-item">Cardiologia</a>
                                <a href="detail.html" class="dropdown-item">Radiologia</a>
                                <a href="team.html" class="dropdown-item">Ortopedia</a>
                                <a href="testimonial.html" class="dropdown-item">Gastroenterologia</a>
                                <a href="appointment.html" class="dropdown-item">Pneumologia</a>
                                <a href="search.html" class="dropdown-item">Neurologia</a>
                            </div>
                        </div>
                        <a href="contact.html" class="nav-item nav-link">Log in</a>
                    </div>
                </div>
            </nav>
        </div>
    </div>
    <!-- Navbar End -->
    

    
    <!-- Services Start -->
    <div class="container-fluid py-5">
        <div class="container">
            <div class="text-center mx-auto mb-5" style="max-width: 500px;">
                <h1 class="display-4">Cardiologia</h1>
            </div>
            
            <div class="container py-5">
  <div class="row g-5">
    
    <!-- Colonna sinistra: Descrizione Dipartimento -->
    <div class="col-lg-8">
      <h2 class="mb-4">Dipartimento di Cardiologia</h2>
      <p>
        Il Dipartimento di Cardiologia è un centro di riferimento per la prevenzione, diagnosi e trattamento delle patologie cardiovascolari. La nostra missione è offrire un’assistenza medica di alta qualità attraverso un approccio multidisciplinare e personalizzato, centrato sul paziente. Operiamo in stretta collaborazione con altri reparti ospedalieri per garantire continuità assistenziale, dalla fase diagnostica fino alla riabilitazione.
      </p>
      <h5 class="mt-4">Prestazioni e visite disponibili:</h5>
      <ul>
        <li>Visita cardiologica con elettrocardiogramma (ECG)</li>
        <li>Visita cardiologica di controllo</li>
        <li>Elettrocardiogramma (ECG) a riposo</li>
        <li>Holter cardiaco 24/48 ore</li>
        <li>Holter pressorio (monitoraggio pressione arteriosa)</li>
      </ul>
    </div>

    <!-- Colonna destra: Medici Specialisti -->
    <div class="col-lg-4 ms-auto">
      <div class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center h-100 p-4">
        <h4 class="mb-3">Medici Specialisti</h4>
        <p class="m-0">Scansani Elia</p>
        <p class="m-0">Magnaterra Matteo</p>
        <p class="m-0">Tribulini Benedetta</p>
      </div>
    </div>
    
  </div>
</div>

        </div>
    </div>
    <!-- Services End -->


    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-light mt-5 py-5">
        <div class="container py-5">
            <div class="row g-5">
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
    <script src="{{asset('lib/easing/easing.min.js') }}"></script>
    <script src="{{asset('lib/waypoints/waypoints.min.js') }}"></script>
    <script src="{{asset('lib/owlcarousel/owl.carousel.min.js') }}"></script>
    <script src="{{asset('lib/tempusdominus/js/moment.min.js') }}"></script>
    <script src="{{asset('lib/tempusdominus/js/moment-timezone.min.js') }}"></script>
    <script src="{{asset('lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js') }}"></script>

    <!-- Template Javascript -->
    <script src="{{asset('js/main.js') }}"></script>
</body>

</html>