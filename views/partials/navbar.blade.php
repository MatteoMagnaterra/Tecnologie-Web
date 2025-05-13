<div class="container-fluid sticky-top bg-white shadow-sm">
    <div class="container">
        <nav class="navbar navbar-expand-lg bg-white navbar-light py-3 py-lg-0">
            <a href="{{ route('homepage') }}" class="navbar-brand">
                <h1 class="m-0 text-uppercase text-primary">
                    <i class="fa fa-clinic-medical me-2"></i>Health Center
                </h1>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav ms-auto py-0">
                    <a href="{{ route('homepage') }}" class="nav-item nav-link {{ Request::is('/') ? 'active' : '' }}">Homepage</a>
                    <a href="{{ route('chisiamo') }}" class="nav-item nav-link {{ Request::is('chisiamo') ? 'active' : '' }}">Chi siamo</a>
                    <a href="{{ route('specialisti') }}" class="nav-item nav-link {{ Request::is('specialisti') ? 'active' : '' }}">Specialisti</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle {{ Request::is('cardiologia', 'neurologia', 'ortopedia', 'pediatria', 'pneumologia', 'radiologia') ? 'active' : '' }}" data-bs-toggle="dropdown">Dipartimenti</a>
                        <div class="dropdown-menu m-0">
                            <a href="{{ route('cardiologia') }}" class="dropdown-item">Cardiologia</a>
                            <a href="{{ route('neurologia') }}" class="dropdown-item">Neurologia</a>
                            <a href="{{ route('ortopedia') }}" class="dropdown-item">Ortopedia</a>
                            <a href="{{ route('pediatria') }}" class="dropdown-item">Pediatria</a>
                            <a href="{{ route('pneumologia') }}" class="dropdown-item">Pneumologia</a>
                            <a href="{{ route('radiologia') }}" class="dropdown-item">Radiologia</a>
                        </div>
                    </div>
                    <a href="{{ route('login') }}" class="nav-item nav-link {{ Request::is('login') ? 'active' : '' }}">Log in</a>
                </div>
            </div>
        </nav>
    </div>
</div>
