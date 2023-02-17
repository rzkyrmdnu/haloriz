    <nav class="navbar navbar-expand-lg bg-white navbar-light shadow-sm px-5 py-3 py-lg-0 sticky-top">
        <a href="/" class="navbar-brand p-0">
            <h1 class="m-0 text-uppercase text-primary"><i class="fa fa-stethoscope text-primary me-2"></i>Haloriz</h1>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav ms-auto py-0 me-n3">
                    <li class="nav-item">
                      <a class="nav-link {{ ($active === "home") ? 'active' : '' }}" href="/home"><i class="fa-solid fa-house-chimney-medical"></i> Home</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link {{ ($active === "about") ? 'active' : '' }}" href="/about">About</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link {{ ($active === "service") ? 'active' : '' }}" href="/service">Service</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link {{ ($active === "contact") ? 'active' : '' }}" href="/contact">Contact</a>
                    </li>
                  </ul>
                  <div class="ms-3">
                    <form action="/logout" method="post">
                        @csrf
                        <button type="submit" class="btn btn-primary"><i class="bi bi-box-arrow-right"></i> Logout</button>
                      </form>
                  </div>
        </div>
    </nav>
