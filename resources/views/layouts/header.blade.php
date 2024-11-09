<!-- Meta Tags Generated with https://metatags.io --> 
  <!-- ======= start Header ======= -->
  <header class="header">
    <nav class="navbar navbar-expand-lg navbar-light fixed-top">
      <div class="container">
        <a class="navbar-brand " href="{{ route('index') }}"><img src="{{asset('web/images/it_mingo.png')}}" class="logo" alt="LOGO"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
          aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <i class="bi bi-list" id="menu"></i>
        </button>
        <div class="collapse navbar-collapse justify-content-between" id="navbarNav">
          <ul class="navbar-nav ms-auto" id="navbar">
            <li class="nav-item">
              <a class="nav-link {{ request()->routeIs('index') ? 'active' : '' }}" href="{{ route('index') }}">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link {{ request()->routeIs('about') ? 'active' : '' }}" href="{{ route('about') }}">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link {{ request()->routeIs('product') ? 'active' : '' }}" href="{{ route('product') }}">Product</a>
            </li>
            <li class="nav-item">
              <a class="nav-link {{ request()->routeIs('service') ? 'active' : '' }}" href="{{ route('service') }}">Services</a>
            </li>
            <li class="nav-item">
              <a class="nav-link {{ request()->routeIs('client') ? 'active' : '' }}" href="{{ route('client') }}">Client</a>
            </li>
            <!-- <li class="nav-item">
              <a class="nav-link {{ request()->routeIs('pricing') ? 'active' : '' }}" href="{{ route('pricing') }}">Pricing</a>
            </li -->
            <li class="nav-item">
              <a class="nav-link {{ request()->routeIs('career') ? 'active' : '' }}" href="{{ route('career') }}">Career</a>
            </li>
            <li class="nav-item">
              <a class="nav-link {{ request()->routeIs('contact') ? 'active' : '' }}" href="{{ route('contact') }}">Contact us</a>
            </li>
            
          </ul>
          <div class="d-flex ms-auto">
            <a class="btn" href="{{ route('contact') }}">Get Free Quote</a>
            <button id="mode-toggle" class="btn-light-mode switch-button"><i id="mode-icon"
                class="bi bi-moon-fill"></i></button>
          </div>
        </div>
      </div>
    </nav>
  </header>
  <!-- ======= end Header ======= -->