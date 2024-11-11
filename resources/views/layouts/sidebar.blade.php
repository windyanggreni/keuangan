<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-dark sidebar collapse">
    <div class="position-sticky pt-3">
      <ul class="nav flex-column">
        <li class="nav-item">
          <a class="nav-link " aria-current="page" href="{{ url('/dashboard') }}">
            <i class="bi bi-house"></i>
            <span data-feather="home"></span>
            Dashboard
          </a>
        </li>
        <li class="nav-item">
            <a class="nav-link " aria-current="page" href="{{ url('/pemasukan') }}">
                <i class="bi bi-file-earmark-arrow-down"></i>
              Pemasukan
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link " aria-current="page" href="{{ url('/pengeluaran') }}">
                <i class="bi bi-file-earmark-arrow-up"></i>
              pengeluaran
            </a>
        </li>

        <li class="nav-item dropdown ms-1">
            <button class="btn btn-dark dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                <i class="bi bi-file-earmark-arrow-down"></i>
                Kategori
            </button>
            <ul class="dropdown-menu dropdown-menu-dark">
                <li><a class="dropdown-item" href="{{ url('/kpemasukan') }}">Kategori Pemasukan</a></li>
                <li><a class="dropdown-item" href="{{ url('/kpengeluaran') }}">Kategori Pengeluaran</a></li>

            </ul>
        </li>
        <hr style="color: white">
        <li class="nav-item ml-2">
            <form action="/logout" method="POST">
                @csrf
                <button class="nav-link btn logout" type="submit" >
                    Logout
                </button>
                </form>
          </li>
      </ul>
    </div>
  </nav>
