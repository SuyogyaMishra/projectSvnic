<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'My Laravel Project')</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.css" rel="stylesheet">
</head>
<body>

    <!-- Header -->
      <nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm fixed-top">
        <div class="container">
            <a class="navbar-brand fw-bold text-primary" href="#">
                <i class="bi bi-mortarboard-fill me-2"></i>
               Swami Vivekanand Inter College            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" href="#home">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#about">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#academics">Academics</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#admissions">Admissions</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#events">Events</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contact">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <main>
        @yield('content')
    </main>

    <!-- Footer -->
       <footer class="bg-dark text-white py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 mb-4">
                    <h5 class="fw-bold mb-3">
                        <i class="bi bi-mortarboard-fill me-2"></i>
                       Swami Vivekanand Inter College  </h5>
                    <p class="text-light opacity-75 mb-3">Nurturing young minds and building tomorrow's leaders through excellence in education from Nursery to Grade 12.</p>
                    <div class="d-flex">
                        <a href="#" class="text-light me-3"><i class="bi bi-facebook"></i></a>
                        <a href="#" class="text-light me-3"><i class="bi bi-twitter"></i></a>
                        <a href="#" class="text-light me-3"><i class="bi bi-instagram"></i></a>
                        <a href="#" class="text-light me-3"><i class="bi bi-youtube"></i></a>
                    </div>
                </div>
                <div class="col-lg-2 mb-4">
                    <h6 class="fw-bold mb-3">Quick Links</h6>
                    <ul class="list-unstyled">
                        <li><a href="#about" class="text-light opacity-75 text-decoration-none">About Us</a></li>
                        <li><a href="#academics" class="text-light opacity-75 text-decoration-none">Academics</a></li>
                        <li><a href="#admissions" class="text-light opacity-75 text-decoration-none">Admissions</a></li>
                        <li><a href="#events" class="text-light opacity-75 text-decoration-none">Events</a></li>
                        <li><a href="#contact" class="text-light opacity-75 text-decoration-none">Contact</a></li>
                    </ul>
                </div>
                <div class="col-lg-3 mb-4">
                    <h6 class="fw-bold mb-3">Academic Programs</h6>
                    <ul class="list-unstyled">
                        <li><a href="earlychild" class="text-light opacity-75 text-decoration-none">Early Childhood</a></li>
                        <li><a href="primary" class="text-light opacity-75 text-decoration-none">Primary School</a></li>
                        <li><a href="middleschool" class="text-light opacity-75 text-decoration-none">Middle School</a></li>
                        <li><a href="seniorschool" class="text-light opacity-75 text-decoration-none">High School</a></li>
                        <li><a href="highschool" class="text-light opacity-75 text-decoration-none">Senior Secondary</a></li>
                    </ul>
                </div>
                <div class="col-lg-3 mb-4">
                    <h6 class="fw-bold mb-3">Contact Info</h6>
                    <p class="text-light opacity-75 mb-2">
                        <i class="bi bi-geo-alt-fill me-2"></i>
                       Ikauna, Shrawasti
                    </p>
                    <p class="text-light opacity-75 mb-2">
                        <i class="bi bi-telephone-fill me-2"></i>
                        +91 98765 43210
                    </p>
                    <p class="text-light opacity-75">
                        <i class="bi bi-envelope-fill me-2"></i>
                        info@brightfuture.edu
                    </p>
                </div>
            </div>
            <hr class="my-4 opacity-25">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <p class="text-light opacity-75 mb-0">&copy; 2024 Swami Vivekanand Inter College
. All rights reserved.</p>
                </div>
                <div class="col-md-6 text-md-end">
                    <a href="#" class="text-light opacity-75 text-decoration-none me-3">Privacy Policy</a>
                    <a href="#" class="text-light opacity-75 text-decoration-none">Terms of Service</a>
                </div>
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

    <style>
        .hero-section {
            background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%);
            padding-top: 80px;
        }
        
        .navbar {
            transition: all 0.3s ease;
        }
        
        .card {
            transition: transform 0.2s ease;
        }
        
        .card:hover {
            transform: translateY(-5px);
        }
        
        section {
            scroll-margin-top: 80px;
        }
        
        .btn {
            transition: all 0.3s ease;
        }
    </style>

</body>
</html>
