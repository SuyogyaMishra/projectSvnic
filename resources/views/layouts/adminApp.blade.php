<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'SVNIC - Excellence in Education')</title>

    <!-- Bootstrap CSS -->
    <link href="{{ asset('assets/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">

    <style>
        .sidebar {
            position: fixed;
            top: 56px;
            bottom: 0;
            left: 0;
            z-index: 100;
            padding: 48px 0 0;
            box-shadow: inset -1px 0 0 rgba(0, 0, 0, .1);
        }

        .sidebar-heading {
            font-size: .75rem;
            text-transform: uppercase;
        }

        .sidebar .nav-link {
            font-weight: 500;
            color: #333;
            padding: 0.75rem 1rem;
        }

        .sidebar .nav-link:hover {
            color: #0d6efd;
            background-color: rgba(13, 110, 253, 0.1);
        }

        .sidebar .nav-link.active {
            color: #0d6efd;
            background-color: rgba(13, 110, 253, 0.1);
        }

        .sidebar .nav-link i {
            font-size: 16px;
        }

        main {
            margin-left: 0;
        }

        @media (min-width: 768px) {
            main {
                margin-left: 240px;
            }
        }

        .card {
            transition: transform 0.2s ease;
        }

        .card:hover {
            transform: translateY(-2px);
        }

        .content-section {
            min-height: 600px;
        }
    </style>

    @yield("css")
</head>

<body>
    <!-- Header / Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top">
        <div class="container-fluid">
            <a class="navbar-brand fw-bold" href="#">
                <i class="bi bi-mortarboard-fill me-2"></i>
                SVNIC- Admin
            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <div class="navbar-nav ms-auto">
                    <div class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">
                            <i class="bi bi-person-circle me-2"></i>
                            <span id="adminUsername">Admin</span>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#"><i class="bi bi-gear me-2"></i>Settings</a></li>
                            <li><a class="dropdown-item" href="#"><i class="bi bi-person me-2"></i>Profile</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#" id="logoutBtn"><i class="bi bi-box-arrow-right me-2"></i>Logout</a></li>
                        </ul>
                    </div>
                    <a href="/" class="btn btn-outline-light btn-sm ms-2" target="_blank">
                        <i class="bi bi-eye me-2"></i>View Website
                    </a>
                </div>
            </div>
        </div>
    </nav>
      <nav class="col-md-3 col-lg-2 d-md-block bg-light sidebar">
            <div class="position-sticky pt-3">
                <ul class="nav flex-column">
                    <li class="nav-item">
                        <a class="nav-link active" href="#dashboard" data-section="dashboard">
                            <i class="bi bi-speedometer2 me-2"></i>
                            Dashboard
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/admin/content" >
                            <i class="bi bi-file-text me-2"></i>
                            Website Content
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="event" >
                            <i class="bi bi-calendar-event me-2"></i>
                            Events & News
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('admin.ammission') }}"  data-section="admissions">
                            <i class="bi bi-person-plus me-2"></i>
                            Admissions
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link"href="{{ route('admin.contact') }}"  data-section="contact">
                            <i class="bi bi-envelope me-2"></i>
                            Contact Messages
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('admin.school') }}" data-section="gallery">
                            <i class="bi bi-images me-2"></i>
                            Student Management
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#users" data-section="users">
                            <i class="bi bi-people me-2"></i>
                            User Management
                        </a>
                    </li>
                </ul>

                <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
                    <span>Website</span>
                </h6>
                <ul class="nav flex-column mb-2">
                    <li class="nav-item">
                        <a class="nav-link" href="/" target="_blank">
                            <i class="bi bi-globe me-2"></i>
                            View Live Site
                        </a>
                    </li>
                </ul>
            </div>
        </nav>

    <!-- Dynamic Content Section -->
      <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div >
        @if(session('msg'))

        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('msg') }}

            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif
        @if($errors->any())
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <ul class="mb-0">
                @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif
        @yield('content')
    </div>
    </main>

    <!-- JS -->
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    @yield("script")

</body>

</html>