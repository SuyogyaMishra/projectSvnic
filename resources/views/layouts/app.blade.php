<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'SVNIC - Excellence in Education')</title>

    <!-- Bootstrap CSS -->
    <link href="{{ asset('assets/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">


    <style>
        /* ---------- Navbar ---------- */
        .navbar-custom {
            transition: all 0.3s ease;
        }

        .navbar-custom .nav-link {
            font-weight: 500;
            color: #333;
            transition: color 0.3s ease;
        }

        .navbar-custom .nav-link:hover,
        .navbar-custom .nav-link.active {
            color: #007bff;
        }

        /* ---------- Hero Section ---------- */
        .hero-section {
            background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%);
            padding-top: 80px;
        }

        /* ---------- Card ---------- */
        .card-custom {
            transition: transform 0.2s ease;
        }

        .card-custom:hover {
            transform: translateY(-5px);
        }

        /* ---------- Profile Section ---------- */
        .profile-link {
            text-decoration: none;
            color: inherit;
        }

        .profile-container {
            display: flex;
            align-items: center;
            justify-content: flex-end;
            gap: 10px;
            padding: 8px 12px;
            border-radius: 8px;
            transition: background-color 0.3s ease;
        }

        .profile-container:hover {
            background-color: #f0f0f0;
        }

        .profile-pic {
            width: 42px;
            height: 42px;
            border-radius: 50%;
            overflow: hidden;
            border: 2px solid #ddd;
            flex-shrink: 0;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        .profile-pic img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .profile-name {
            font-weight: 500;
            font-size: 16px;
            color: #333;
            white-space: nowrap;
        }

        /* ---------- Section Scroll Margin ---------- */
        section {
            scroll-margin-top: 80px;
        }

        /* ---------- Responsive Adjustments ---------- */
        @media (max-width: 576px) {
            .profile-container {
                gap: 6px;
                padding: 6px 8px;
            }

            .profile-pic {
                width: 35px;
                height: 35px;
            }

            .profile-name {
                font-size: 14px;
            }
        }
    </style>

    @yield("css")
</head>

<body>
    <!-- Header / Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm fixed-top">
        <div class="container">
            <a class="navbar-brand fw-bold text-primary" href="#">
                <i class="bi bi-mortarboard-fill me-2"></i>
                Swami Vivekanand Inter College
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link active" href="/#home">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="/#about">About</a></li>
                    <li class="nav-item"><a class="nav-link" href="/#academics">Academics</a></li>
                    <li class="nav-item"><a class="nav-link" href="/#admissions">Admissions</a></li>
                    <li class="nav-item"><a class="nav-link" href="/#events">Events</a></li>
                    <li class="nav-item"><a class="nav-link" href="/#contact">Contact</a></li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="studentDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Student Corner
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="studentDropdown">
                            @auth
                            <li><a class="dropdown-item" href="{{ route('create.order') }}">Fees</a></li>
                            <li><a class="dropdown-item" href="{{ route('marks') }}">Marks</a></li>
                            <li><a class="dropdown-item" href="{{ route('gettc') }}">TC Apply</a></li>
                            @else
                            <li><a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#studentLoginModal">Fees</a></li>
                            <li><a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#studentLoginModal">Marks</a></li>
                            <li><a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#studentLoginModal">TC Apply</a></li>
                            @endauth

                        </ul>
                    </li>
                    @auth
                    <li class="nav-item dropdown ms-3">
                        <a class="nav-link dropdown-toggle d-flex align-items-center" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <div class="profile-pic me-2">
                                <img src="{{ asset('images/image.png') }}" alt="Profile Picture" style="width:40px; height:40px; border-radius:50%;">
                            </div>
                            <span>{{ Auth::user()->name }}</span>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end">
                            <li>
                                <hr class="dropdown-divider">
                            </li>

                            <li>
                                <a class="dropdown-item text-danger btn  " href="{{ route('logout') }}">Logout </a>

                            </li>
                        </ul>
                    </li>
                    @endauth
                    @guest
                    <li class="nav-item dropdown">
                        <button class="btn btn-outline-primary dropdown-toggle me-2" id="loginDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                            Login
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="loginDropdown">
                            <li>
                                <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#studentLoginModal">
                                    Login as Student
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="/admin_login_form">
                                    Login as Admin
                                </a>
                            </li>
                        </ul>

                        <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#signupModal">
                            Sign Up
                        </button>
                    </li>
                    @endguest

                </ul>
            </div>
        </div>
    </nav>

    <!-- Dynamic Content Section -->
    <main class="pt-5">
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
    </main>

    <!-- Footer -->
    <footer class="bg-dark text-white py-5 mt-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 mb-4">
                    <h5 class="fw-bold mb-3"><i class="bi bi-mortarboard-fill me-2"></i>Swami Vivekanand Inter College</h5>
                    <p class="text-light opacity-75 mb-3">Nurturing young minds and building tomorrow's leaders through excellence in education from Nursery to Grade 12.</p>
                    <div class="d-flex">
                        <a href="#" class="text-light me-3"><i class="bi bi-facebook"></i></a>
                        <a href="#" class="text-light me-3"><i class="bi bi-twitter"></i></a>
                        <a href="https://www.instagram.com/svnic_ikauna_shravasti/" class="text-light me-3"><i class="bi bi-instagram"></i></a>
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
                    <p class="text-light opacity-75 mb-2"><i class="bi bi-geo-alt-fill me-2"></i>Ikauna, Shrawasti</p>
                    <p class="text-light opacity-75 mb-2"><i class="bi bi-telephone-fill me-2"></i>+91 6386369558</p>
                    <p class="text-light opacity-75"><i class="bi bi-envelope-fill me-2"></i>info@sm.edu</p>
                </div>
            </div>
            <hr class="my-4 opacity-25">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <p class="text-light opacity-75 mb-0">&copy; 2024 Swami Vivekanand Inter College. All rights reserved.</p>
                </div>
                <div class="col-md-6 text-md-end">
                    <a href="#" class="text-light opacity-75 text-decoration-none me-3">Privacy Policy</a>
                    <a href="#" class="text-light opacity-75 text-decoration-none">Terms of Service</a>
                </div>
            </div>
        </div>
    </footer>

    <!-- Admin Login Modal -->
    <div class="modal fade" id="adminLoginModal" tabindex="-1" aria-labelledby="adminLoginLabel" aria-hidden="true">
        <div class="modal-dialog  modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="adminLoginLabel">Admin Login</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    {{-- Admin login form here --}}
                </div>
            </div>
        </div>
    </div>
    {!! render_modal(
    'studentLoginModal',
    'SVNIC Student Login',
    view('login')->render(),
    'lg'
    ) !!}



    {!! render_modal(
    'signupModal',
    'SVNIC Sign Up',
    view('signup')->render(),
    'lg'
    ) !!}

    <!-- JS -->
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const modal = document.getElementById('signupModal');

            modal.addEventListener('shown.bs.modal', function() {
                const form = document.getElementById('registrationForm');
                if (!form) return;

                form.addEventListener('submit', function(e) {
                    // prevent default for now
                    e.preventDefault();

                    // Clear old errors
                    form.querySelectorAll('.text-danger').forEach(el => el.remove());

                    // Trim values
                    const name = form.querySelector('#username').value.trim();
                    const email = form.querySelector('#useremail').value.trim();
                    const father = form.querySelector('#fathername').value.trim();
                    const password = form.querySelector('#password').value.trim();
                    const confirm = form.querySelector('#password_confirmation').value.trim();
                    const dob = form.querySelector('#dob').value.trim();

                    const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

                    let hasError = false;

                    // Helper: show error under input
                    const showError = (input, msg) => {
                        const error = document.createElement('p');
                        error.classList.add('text-danger', 'small', 'mt-1', 'mb-0');
                        error.textContent = msg;
                        input.insertAdjacentElement('afterend', error);
                        hasError = true;
                    };

                    // Validation
                    if (name.length < 3) showError(form.querySelector('#username'), 'Full name must be at least 3 characters.');
                    if (!emailRegex.test(email)) showError(form.querySelector('#useremail'), 'Enter a valid email address.');
                    if (father.length < 3) showError(form.querySelector('#fathername'), "Father's name must be at least 3 characters.");
                    if (password.length < 6) showError(form.querySelector('#password'), 'Password must be at least 6 characters.');
                    if (!dob) {
                        showError(form.querySelector("#dob"), "Date of birth is required.");
                    }
                    if (password !== confirm) showError(form.querySelector('#password_confirmation'), 'Passwords do not match.');

                    // Submit only if no error
                    if (!hasError) {
                        form.submit();
                    }
                });
            });
        });
    </script>
    @yield("script")

</body>

</html>