<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover"/>
  <meta http-equiv="X-UA-Compatible" content="ie=edge"/>
  <title>Daftar Genre</title>
  <!-- CSS files -->
  <link href="{{ asset('dist/css/tabler.min.css') }}" rel="stylesheet"/>
  <style>
    body {
      background-color: #f0f8ff;
    }
    .navbar {
      background-color: #007bff;
    }
    .navbar .navbar-brand {
      color: white;
    }
    .page-title {
      color: #007bff;
      font-weight: bold;
    }
    .btn {
      border-radius: 20px;
    }
    .btn-primary {
      background-color: #007bff;
      border-color: #007bff;
    }
    .btn-primary:hover {
      background-color: #0056b3;
    }
    .card {
      border-radius: 15px;
      background-color: #ffffff;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
      transition: transform 0.2s;
    }
    .card:hover {
      transform: scale(1.02);
    }
    .table th {
      background-color: #007bff;
      color: white;
      text-align: center;
    }
    .table td {
      text-align: center;
    }
    .table-striped tbody tr:nth-of-type(odd) {
      background-color: #e3f2fd;
    }
    .table-hover tbody tr:hover {
      background-color: #bbdefb;
    }
    .table .action-buttons {
      display: flex;
      justify-content: center;
      gap: 10px;
    }
  </style>
</head>

<body class="layout-boxed">
<div class="page">
  <!-- Navbar -->
  <header class="navbar navbar-expand-md d-print-none">
    <div class="container-xl">
      <h1 class="navbar-brand navbar-brand-autodark d-none-navbar-horizontal pe-0 pe-md-3">
        <a href=".">Genre Management</a>
      </h1>
      <div class="navbar-nav flex-row order-md-last">
        <div class="nav-item dropdown">
          <a href="#" class="nav-link d-flex lh-1 text-reset p-0" data-bs-toggle="dropdown"
             aria-label="Open user menu">
            <span class="avatar avatar-sm" style="background-image: url(./static/avatars/000m.jpg)"></span>
            <div class="d-none d-xl-block ps-2">
              <div>Raditya Saputra</div>
              <div class="mt-1 small text-secondary">UI Designer</div>
            </div>
          </a>
          <div class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
            <a href="#" class="dropdown-item">Status</a>
            <a href="./profile.html" class="dropdown-item">Profile</a>
            <a href="#" class="dropdown-item">Feedback</a>
            <div class="dropdown-divider"></div>
            <a href="./settings.html" class="dropdown-item">Settings</a>
            <a href="./sign-in.html" class="dropdown-item">Logout</a>
          </div>
        </div>
      </div>
    </div>
  </header>

  <div class="navbar-expand-md">
    <div class="collapse navbar-collapse" id="navbar-menu">
      <div class="navbar">
        <div class="container-xl">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" href="/roles">
                <span class="nav-link-icon d-md-none d-lg-inline-block">
                  <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-user-check" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                    <circle cx="9" cy="7" r="4"/>
                    <path d="M9 14a6 6 0 0 0 6 6"/>
                    <path d="M15 19l2 2l4 -4"/>
                  </svg>
                </span>
                <span class="nav-link-title">Peran</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/users">
                <span class="nav-link-icon d-md-none d-lg-inline-block">
                  <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-user" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                    <circle cx="12" cy="7" r="4"/>
                    <path d="M5.5 21h13a1.5 1.5 0 0 0 1.5 -1.5v-2a5.5 5.5 0 0 0 -5.5 -5.5h-5a5.5 5.5 0 0 0 -5.5 5.5v2a1.5 1.5 0 0 0 1.5 1.5z"/>
                  </svg>
                </span>
                <span class="nav-link-title">Pengguna</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/casts">
                <span class="nav-link-icon d-md-none d-lg-inline-block">
                  <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-users" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                    <circle cx="9" cy="7" r="4"/>
                    <circle cx="15" cy="7" r="4"/>
                    <path d="M5.5 21h13a1.5 1.5 0 0 0 1.5 -1.5v-2a5.5 5.5 0 0 0 -5.5 -5.5h-5a5.5 5.5 0 0 0 -5.5 5.5v2a1.5 1.5 0 0 0 1.5 1.5z"/>
                  </svg>
                </span>
                <span class="nav-link-title">Pemeran</span>
              </a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="/genres">
                <span class="nav-link-icon d-md-none d-lg-inline-block">
                  <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-category" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                    <path d="M4 4h6v6h-6z"/>
                    <path d="M14 4h6v6h-6z"/>
                    <path d="M4 14h6v6h-6z"/>
                    <circle cx="17" cx="17" r="3"/>
                  </svg>
                </span>
                <span class="nav-link-title">Genre</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/movies">
                <span class="nav-link-icon d-md-none d-lg-inline-block">
                  <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-film" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                    <rect x="3" y="3" width="18" height="18" rx="2"/>
                    <line x1="7" y1="3" x2="7" y2="21"/>
                    <line x1="17" y1="3" x2="17" y2="21"/>
                    <line x1="3" y1="7" x2="21" y2="7"/>
                    <line x1="3" y1="17" x2="21" y2="17"/>
                  </svg>
                </span>
                <span class="nav-link-title">Film</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/reviews">
                <span class="nav-link-icon d-md-none d-lg-inline-block">
                  <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-message-circle" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                    <circle cx="12" cx="12" r="9"/>
                    <path d="M12 17l-3.5 -3.5l-1.5 1.5"/>
                    <path d="M15 7h-6"/>
                  </svg>
                </span>
                <span class="nav-link-title">Ulasan</span>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>

  <div class="page-wrapper">
    @if(session('success'))
      <div class="alert alert-success">
        {{ session('success') }}
      </div>
    @endif

    @if(session('error'))
      <div class="alert alert-danger">
        {{ session('error') }}
      </div>
    @endif

    <!-- Page header -->
    <div class="page-header d-print-none">
      <div class="container-xl">
        <div class="row g-2 align-items-center">
          <div class="col">
            <h2 class="page-title">
              Daftar Genre
            </h2>
          </div>
          <div class="col-auto ms-auto d-print-none">
            <div class="btn-list">
              <a href="{{ route('genres.create') }}" class="btn btn-primary">
                Tambah Genre
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Page body -->
    <div class="page-body">
      <div class="container-xl">
        <div class="card">
          <div class="card-body">
            <div id="table-default" class="table-responsive">
              <table class="table table-striped table-hover" id="genre-table">
                <thead>
                <tr>
                  <th>Nama</th>
                  <th>Aksi</th>
                </tr>
                </thead>
                <tbody>
                @forelse ($genres as $genre)
                  <tr>
                    <td>{{ $genre->name }}</td>
                    <td class="action-buttons">
                      <a href="{{ route('genres.show', $genre->id) }}" class="btn btn-info btn-sm">Lihat</a>
                      <a href="{{ route('genres.edit', $genre->id) }}" class="btn btn-warning btn-sm">Ubah</a>
                      <form action="{{ route('genres.destroy', $genre->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Yakin ingin menghapus genre ini?')">Hapus</button>
                      </form>
                    </td>
                  </tr>
                @empty
                  <tr>
                    <td colspan="2" class="text-center text-muted">Tidak ada genre yang ditemukan.</td>
                  </tr>
                @endforelse
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<script src="{{ asset('dist/js/tabler.min.js') }}" defer></script>
<script src="{{ asset('dist/js/demo.min.js') }}" defer></script>
</body>
</html>
