<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="utf-8">
    <title>Login / Registrazione - Health Center</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <link href="{{ asset('img/favicon.ico') }}" rel="icon">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@400;700&family=Roboto:wght@400;700&display=swap" rel="stylesheet">  
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
    <link href="{{ asset('lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ asset('lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">

    <style>
        .form-container {
            background: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 2px 8px rgba(0,0,0,0.1);
            max-width: 500px;
            margin: 50px auto;
        }

        h2 {
            text-align: center;
            margin-bottom: 20px;
        }

        form {
            display: none;
        }

        form.active {
            display: block;
        }

        label {
            display: block;
            margin-top: 10px;
        }

        input, select {
            width: 100%;
            padding: 8px;
            margin-top: 5px;
            box-sizing: border-box;
        }

        input[type="submit"] {
            margin-top: 20px;
            background-color: #007BFF;
            color: white;
            border: none;
            cursor: pointer;
            border-radius: 5px;
        }

        .switch-btn {
            margin-top: 15px;
            text-align: center;
            color: #007BFF;
            cursor: pointer;
            text-decoration: underline;
        }

        .msg {
            margin-top: 10px;
            color: red;
            text-align: center;
        }
    </style>
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
                        <a href="homepage.html" class="nav-item nav-link">Homepage</a>
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
                                <a href="radiologia.html" class="dropdown-item">Radiologia</a>
                            </div>
                        </div>
                        <a href="login.html" class="nav-item nav-link active">Log in</a>
                    </div>
                </div>
            </nav>
        </div>
    </div>
    <!-- Navbar End -->

    <!-- Login / Register Form Start -->
    <div class="form-container">
        <h2 id="form-title">Login Ospedale</h2>

        <!-- Login Form -->
        <form id="login-form" class="active" action="login.php" method="post">
            <label for="login-user">Username:</label>
            <input type="text" id="login-user" name="user" required>

            <label for="login-pass">Password:</label>
            <input type="password" id="login-pass" name="pass" required>

            <input type="submit" value="Accedi">
        </form>

        <!-- Register Form -->
        <form id="register-form" action="register.php" method="post">
            <label for="nome">Nome:</label>
            <input type="text" id="nome" name="nome" required>

            <label for="cognome">Cognome:</label>
            <input type="text" id="cognome" name="cognome" required>

            <label for="ruolo">Ruolo:</label>
            <select id="ruolo" name="ruolo" required>
                <option value="paziente">Paziente</option>
                <option value="staff">Staff</option>
                <option value="admin">Amministratore</option>
            </select>

            <label for="user">Username:</label>
            <input type="text" id="user" name="user" required>

            <label for="pass">Password:</label>
            <input type="password" id="pass" name="pass" required>

            <label for="indirizzo">Indirizzo:</label>
            <input type="text" id="indirizzo" name="indirizzo" required>

            <label for="citta">Città:</label>
            <input type="text" id="citta" name="citta" required>

            <label for="data_nascita">Data di Nascita:</label>
            <input type="date" id="data_nascita" name="data_nascita" required>

            <input type="submit" value="Registrati">
        </form>

        <div class="msg">
            <?php
                if (isset($_GET['error'])) echo htmlspecialchars($_GET['error']);
                if (isset($_GET['msg'])) echo htmlspecialchars($_GET['msg']);
            ?>
        </div>

        <div class="switch-btn" onclick="toggleForms()">Passa a Registrazione</div>
    </div>
    <!-- Login / Register Form End -->

    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-light mt-5 py-5">
        <div class="container py-1">
            <div class="row g-5">
                <div class="col-lg-4 col-md-6 d-flex justify-content-center align-items-center">
                    <a href="homepage.html" class="navbar-brand">
                        <h1 class="m-0 text-uppercase text-primary"><i class="fa fa-clinic-medical me-2"></i>Health Center</h1>
                    </a>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-primary text-uppercase border-bottom border-5 border-secondary mb-4">Mettiti in contatto</h4>
                    <p><i class="fa fa-map-marker-alt text-primary me-3"></i>I Settembre, Ancona, Italia</p>
                    <p><i class="fa fa-envelope text-primary me-3"></i>health.center@gmail.com</p>
                    <p><i class="fa fa-phone-alt text-primary me-3"></i>+012 345 67890</p>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-primary text-uppercase border-bottom border-5 border-secondary mb-4">Link Utili</h4>
                    <div class="d-flex flex-column">
                        <a class="text-light mb-2" href="homepage.html"><i class="fa fa-angle-right me-2"></i>Homepage</a>
                        <a class="text-light mb-2" href="chisiamo.html"><i class="fa fa-angle-right me-2"></i>Chi siamo</a>
                        <a class="text-light mb-2" href="#"><i class="fa fa-angle-right me-2"></i>Dipartimenti</a>
                        <a class="text-light mb-2" href="specialisti.html"><i class="fa fa-angle-right me-2"></i>Specialisti</a>
                        <a class="text-light mb-2" href="login.html"><i class="fa fa-angle-right me-2"></i>Log in</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->

    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>

    <!-- JavaScript -->
    <script>
        function toggleForms() {
            const loginForm = document.getElementById('login-form');
            const registerForm = document.getElementById('register-form');
            const title = document.getElementById('form-title');
            const switchBtn = document.querySelector('.switch-btn');

            if (loginForm.classList.contains('active')) {
                loginForm.classList.remove('active');
                registerForm.classList.add('active');
                title.textContent = 'Registrazione Utente';
                switchBtn.textContent = 'Torna al Login';
            } else {
                registerForm.classList.remove('active');
                loginForm.classList.add('active');
                title.textContent = 'Login Ospedale';
                switchBtn.textContent = 'Passa a Registrazione';
            }
        }
    </script>

    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('lib/easing/easing.min.js') }}"></script>
    <script src="{{ asset('lib/waypoints/waypoints.min.js') }}"></script>
    <script src="{{ asset('lib/owlcarousel/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('lib/tempusdominus/js/moment.min.js') }}"></script>
    <script src="{{ asset('lib/tempusdominus/js/moment-timezone.min.js') }}"></script>
    <script src="{{ asset('lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js') }}"></script>
    <script src="{{ asset('js/main.js') }}"></script>
</body>
</html>
