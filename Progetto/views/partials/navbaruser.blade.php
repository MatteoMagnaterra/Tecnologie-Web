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
                    <a href="{{ route('dipartimenti') }}" class="nav-link {{ in_array(Route::currentRouteName(), ['dipartimenti', 'dipartimenti1', 'prestazioni']) ? 'active' : '' }}"> Dipartimenti </a>
                    <a href="{{ route('areapersonale') }}" class="nav-item nav-link {{ Request::is('areapersonale') ? 'active' : '' }}">Area Personale</a>
                    <a href="{{ route('logout') }}" class="nav-item nav-link {{ Request::is('logout') ? 'active' : '' }}">Log in</a>
                </div>
            </div>
        </nav>
    </div>
</div>
