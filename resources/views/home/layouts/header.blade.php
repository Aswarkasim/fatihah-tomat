<header>
  <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
    <div class="container">
      <a class="navbar-brand" href="/">
       <img src="/img/ktc_logo_line.png" alt="Logo" width="26px" class="" style="opacity: .8"> <b> SISTEM PAKAR</b>
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-end" id="navbarCollapse">
        <ul class="navbar-nav mr-auto">
           
          <li class="nav-item active">
            <a class="nav-link font-weight-bold text-secondary" href="/home/diagnosa">Diagnosa</a>
          </li>

          <li class="nav-item active">
            <a class="nav-link font-weight-bold text-secondary" href="/home/galeri">Galeri</a>
          </li>

          <li class="nav-item active">
            <a class="nav-link font-weight-bold text-secondary" href="/home/tentang">Tentang</a>
          </li>


         
        </ul>

        @auth
        <a href="/admin/dashboard" class="btn btn-success btn-sm mx-2">
          <i class="fas fa-user"></i> Profil
        </a>
       
        @else
          <a href="/admin/auth" class="btn btn-success btn-sm">
            <i class="fas fa-sign-in-alt"></i> Masuk
          </a>
        @endauth

      </div>
    </div>
  </nav>
</header> 