<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SVNIC- Excellence in Education (NUR-12)</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.css" rel="stylesheet">
</head>

<body>
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm fixed-top">
        <div class="container">
            <a class="navbar-brand fw-bold text-primary" href="#">
                <i class="bi bi-mortarboard-fill me-2"></i>
                Swami Vivekanand Inter College </a>
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

    <!-- Hero Section -->
    <section id="home" class="hero-section">
        <div class="container">
            <div class="row min-vh-100 align-items-center">
                <div class="col-lg-6">
                    <h1 class="display-4 fw-bold text-primary mb-4">{{ $content->HeroTitle }}</h1>
                    <p class="lead mb-4">{{ $content->Hero_Description  }}</p>
                    <div class="d-flex flex-wrap gap-3">
                        <a href="#admissions" class="btn btn-primary btn-lg">Apply Now</a>
                        <a href="#about" class="btn btn-outline-primary btn-lg">Learn More</a>
                    </div>
                    <div class="mt-4 d-flex align-items-center">
                        <div class="me-4">
                            <h5 class="fw-bold text-primary mb-0">{{ $content->Years }}</h5>
                            <small class="text-muted">Years of Excellence</small>
                        </div>
                        <div class="me-4">
                            <h5 class="fw-bold text-primary mb-0">{{ $content->Years }}+</h5>
                            <small class="text-muted">Happy Students</small>
                        </div>
                        <div>
                            <h5 class="fw-bold text-primary mb-0">{{ $content->Success }}</h5>
                            <small class="text-muted">University Acceptance</small>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 text-center">
                    <img src="https://images.unsplash.com/photo-1580582932707-520aed937b7b?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1000&q=80" alt="School Building" class="img-fluid rounded-3 shadow">
                </div>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section id="about" class="py-5 bg-light">
        <div class="container">
            <div class="row mb-5">
                <div class="col-lg-8 mx-auto text-center">
                    <h2 class="display-5 fw-bold text-primary mb-3">About Our School</h2>
                    <p class="lead text-muted">Established in 90's, Swami Vivekanand Inter College
                        has been a beacon of educational excellence, fostering holistic development and academic achievement.</p>
                </div>
            </div>
            <div class="row align-items-center mb-5">
                <div class="col-lg-6">
                    <h3 class="fw-bold mb-3">Our Mission</h3>
                    <p class="mb-4">{{ $content->Mission_Statement }}</p>
                    <h3 class="fw-bold mb-3">Our Vision</h3>
                    <p class="mb-4">{{ $content->Vision_Statement }}</p>
                </div>
                <div class="col-lg-6">
                    <img src="https://images.unsplash.com/photo-1509062522246-3755977927d7?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1000&q=80" alt="Students Learning" class="img-fluid rounded-3 shadow">
                </div>
            </div>
            <div class="row text-center">
                <div class="col-md-3 mb-4">
                    <div class="bg-white rounded-3 p-4 h-100 shadow-sm">
                        <i class="bi bi-award-fill text-primary display-4 mb-3"></i>
                        <h5 class="fw-bold">Excellence</h5>
                        <p class="text-muted small">Striving for the highest standards in everything we do</p>
                    </div>
                </div>
                <div class="col-md-3 mb-4">
                    <div class="bg-white rounded-3 p-4 h-100 shadow-sm">
                        <i class="bi bi-heart-fill text-danger display-4 mb-3"></i>
                        <h5 class="fw-bold">Compassion</h5>
                        <p class="text-muted small">Caring for our students, community, and environment</p>
                    </div>
                </div>
                <div class="col-md-3 mb-4">
                    <div class="bg-white rounded-3 p-4 h-100 shadow-sm">
                        <i class="bi bi-lightbulb-fill text-warning display-4 mb-3"></i>
                        <h5 class="fw-bold">Innovation</h5>
                        <p class="text-muted small">Embracing new ideas and creative approaches to learning</p>
                    </div>
                </div>
                <div class="col-md-3 mb-4">
                    <div class="bg-white rounded-3 p-4 h-100 shadow-sm">
                        <i class="bi bi-people-fill text-success display-4 mb-3"></i>
                        <h5 class="fw-bold">Community</h5>
                        <p class="text-muted small">Building strong relationships and social responsibility</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Academics Section -->
    <section id="academics" class="py-5">
        <div class="container">
            <div class="row mb-5">
                <div class="col-lg-8 mx-auto text-center">
                    <h2 class="display-5 fw-bold text-primary mb-3">Academic Programs</h2>
                    <p class="lead text-muted">Comprehensive curriculum from Nursery to Grade 12, designed to challenge and inspire every student</p>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 mb-4">
                    <div class="card border-0 shadow h-100">
                        <div class="card-body text-center p-4">
                            <div class="bg-primary bg-opacity-10 rounded-circle d-inline-flex align-items-center justify-content-center mb-3" style="width: 80px; height: 80px;">
                                <i class="bi bi-balloon-heart-fill text-primary display-6"></i>
                            </div>
                            <h5 class="fw-bold">Early Childhood (NUR-UKG)</h5>
                            <p class="text-muted mb-3">Play-based learning with focus on social skills, creativity, and foundational literacy.</p>
                            <ul class="list-unstyled text-start small">
                                <li><i class="bi bi-check-circle text-success me-2"></i>Montessori Method</li>
                                <li><i class="bi bi-check-circle text-success me-2"></i>Art & Craft</li>
                                <li><i class="bi bi-check-circle text-success me-2"></i>Music & Movement</li>
                                <li><i class="bi bi-check-circle text-success me-2"></i>Language Development</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mb-4">
                    <div class="card border-0 shadow h-100">
                        <div class="card-body text-center p-4">
                            <div class="bg-success bg-opacity-10 rounded-circle d-inline-flex align-items-center justify-content-center mb-3" style="width: 80px; height: 80px;">
                                <i class="bi bi-book-fill text-success display-6"></i>
                            </div>
                            <h5 class="fw-bold">Primary School (1-5)</h5>
                            <p class="text-muted mb-3">Strong foundation in core subjects with emphasis on critical thinking and problem-solving.</p>
                            <ul class="list-unstyled text-start small">
                                <li><i class="bi bi-check-circle text-success me-2"></i>Mathematics & Science</li>
                                <li><i class="bi bi-check-circle text-success me-2"></i>English & Hindi</li>
                                <li><i class="bi bi-check-circle text-success me-2"></i>Social Studies</li>
                                <li><i class="bi bi-check-circle text-success me-2"></i>Computer Studies</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mb-4">
                    <div class="card border-0 shadow h-100">
                        <div class="card-body text-center p-4">
                            <div class="bg-warning bg-opacity-10 rounded-circle d-inline-flex align-items-center justify-content-center mb-3" style="width: 80px; height: 80px;">
                                <i class="bi bi-calculator-fill text-warning display-6"></i>
                            </div>
                            <h5 class="fw-bold">Middle School (6-8)</h5>
                            <p class="text-muted mb-3">Advanced curriculum with introduction to specialized subjects and research skills.</p>
                            <ul class="list-unstyled text-start small">
                                <li><i class="bi bi-check-circle text-success me-2"></i>Advanced Mathematics</li>
                                <li><i class="bi bi-check-circle text-success me-2"></i>Science Laboratory</li>
                                <li><i class="bi bi-check-circle text-success me-2"></i>Project-Based Learning</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 mb-4">
                    <div class="card border-0 shadow h-100">
                        <div class="card-body text-center p-4">
                            <div class="bg-info bg-opacity-10 rounded-circle d-inline-flex align-items-center justify-content-center mb-3" style="width: 80px; height: 80px;">
                                <i class="bi bi-mortarboard-fill text-info display-6"></i>
                            </div>
                            <h5 class="fw-bold">High School (9-10)</h5>
                            <p class="text-muted mb-3">Board examination preparation with comprehensive subject coverage and career guidance.</p>
                            <ul class="list-unstyled text-start small">
                                <li><i class="bi bi-check-circle text-success me-2"></i>Career Counseling</li>
                                <li><i class="bi bi-check-circle text-success me-2"></i>Mock Examinations</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 mb-4">
                    <div class="card border-0 shadow h-100">
                        <div class="card-body text-center p-4">
                            <div class="bg-danger bg-opacity-10 rounded-circle d-inline-flex align-items-center justify-content-center mb-3" style="width: 80px; height: 80px;">
                                <i class="bi bi-trophy-fill text-danger display-6"></i>
                            </div>
                            <h5 class="fw-bold">Senior Secondary (11-12)</h5>
                            <p class="text-muted mb-3">Stream specialization with Science, Commerce, and Arts options for university preparation.</p>
                            <ul class="list-unstyled text-start small">
                                <li><i class="bi bi-check-circle text-success me-2"></i>PCM/PCB</li>
                                <li><i class="bi bi-check-circle text-success me-2"></i>Entrance Exam Coaching</li>
                                <li><i class="bi bi-check-circle text-success me-2"></i>University Guidance</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Facilities Section -->
    <section class="py-5 bg-light">
        <div class="container">
            <div class="row mb-5">
                <div class="col-lg-8 mx-auto text-center">
                    <h2 class="display-5 fw-bold text-primary mb-3">World-Class Facilities</h2>
                    <p class="lead text-muted">State-of-the-art infrastructure to support learning and development</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 mb-4">
                    <div class="text-center">
                        <i class="bi bi-laptop text-primary display-4 mb-3"></i>
                        <h5 class="fw-bold">Smart Classrooms</h5>
                        <p class="text-muted">Interactive digital boards and modern teaching technology</p>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="text-center">
                        <i class="bi bi-flask text-success display-4 mb-3"></i>
                        <h5 class="fw-bold">Science Labs</h5>
                        <p class="text-muted">Well-equipped physics, chemistry, and biology laboratories</p>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="text-center">
                        <i class="bi bi-book text-warning display-4 mb-3"></i>
                        <h5 class="fw-bold">Library</h5>
                        <p class="text-muted">Extensive collection of books and digital resources</p>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="text-center">
                        <i class="bi bi-music-note text-info display-4 mb-3"></i>
                        <h5 class="fw-bold">Arts & Music</h5>
                        <p class="text-muted">Dedicated spaces for creative expression and artistic development</p>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="text-center">
                        <i class="bi bi-dribbble text-danger display-4 mb-3"></i>
                        <h5 class="fw-bold">Sports Complex</h5>
                        <p class="text-muted">Modern gymnasium and outdoor sports facilities</p>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="text-center">
                        <i class="bi bi-bus-front text-secondary display-4 mb-3"></i>
                        <h5 class="fw-bold">Transportation</h5>
                        <p class="text-muted">Safe and reliable bus service covering the entire city</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Admissions Section -->
    <section id="admissions" class="py-5">
        <div class="container">
            <div class="row mb-5">
                <div class="col-lg-8 mx-auto text-center">
                    <h2 class="display-5 fw-bold text-primary mb-3">Admissions</h2>
                    <p class="lead text-muted">Join our community of learners and begin your journey to excellence</p>
                </div>
            </div>
            <div class="row align-items-center">
                <div class="col-lg-6 mb-4">
                    <h3 class="fw-bold mb-4">Admission Process</h3>
                    <div class="d-flex mb-3">
                        <div class="bg-primary rounded-circle d-flex align-items-center justify-content-center me-3" style="width: 40px; height: 40px;">
                            <span class="text-white fw-bold">1</span>
                        </div>
                        <div>
                            <h6 class="fw-bold">Application Form</h6>
                            <p class="text-muted small">Submit online or offline application with required documents</p>
                        </div>
                    </div>
                    <div class="d-flex mb-3">
                        <div class="bg-primary rounded-circle d-flex align-items-center justify-content-center me-3" style="width: 40px; height: 40px;">
                            <span class="text-white fw-bold">2</span>
                        </div>
                        <div>
                            <h6 class="fw-bold">Assessment</h6>
                            <p class="text-muted small">Age-appropriate assessment for academic readiness</p>
                        </div>
                    </div>
                    <div class="d-flex mb-3">
                        <div class="bg-primary rounded-circle d-flex align-items-center justify-content-center me-3" style="width: 40px; height: 40px;">
                            <span class="text-white fw-bold">3</span>
                        </div>
                        <div>
                            <h6 class="fw-bold">Parent Interview</h6>
                            <p class="text-muted small">Discussion about educational goals and school fit</p>
                        </div>
                    </div>
                    <div class="d-flex mb-4">
                        <div class="bg-primary rounded-circle d-flex align-items-center justify-content-center me-3" style="width: 40px; height: 40px;">
                            <span class="text-white fw-bold">4</span>
                        </div>
                        <div>
                            <h6 class="fw-bold">Enrollment</h6>
                            <p class="text-muted small">Complete admission formalities and join our family</p>
                        </div>
                    </div>
                    <button class="btn btn-primary btn-lg">Download Application Form</button>
                </div>
                <div class="col-lg-6">
                    <div class="card border-0 shadow">
                        <div class="card-body p-4">
                            <h5 class="fw-bold mb-3">Important Dates</h5>
                            <div class="d-flex justify-content-between align-items-center mb-3 p-3 bg-light rounded">
                                <div>
                                    <h6 class="fw-bold mb-1">Application Opens</h6>
                                    <small class="text-muted">Academic Year 2024-25</small>
                                </div>
                                <span class="badge bg-primary">Dec 1, 2023</span>
                            </div>
                            <div class="d-flex justify-content-between align-items-center mb-3 p-3 bg-light rounded">
                                <div>
                                    <h6 class="fw-bold mb-1">Last Date to Apply</h6>
                                    <small class="text-muted">All grades</small>
                                </div>
                                <span class="badge bg-warning">Feb 28, 2024</span>
                            </div>
                            <div class="d-flex justify-content-between align-items-center mb-3 p-3 bg-light rounded">
                                <div>
                                    <h6 class="fw-bold mb-1">Assessment Period</h6>
                                    <small class="text-muted">Grades 1-12</small>
                                </div>
                                <span class="badge bg-info">Mar 1-15, 2024</span>
                            </div>
                            <div class="d-flex justify-content-between align-items-center p-3 bg-light rounded">
                                <div>
                                    <h6 class="fw-bold mb-1">Session Begins</h6>
                                    <small class="text-muted">New academic year</small>
                                </div>
                                <span class="badge bg-success">Apr 1, 2024</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Events Section -->
    <section id="events" class="py-5 bg-light">
        <div class="container">
            <div class="row mb-5">
                <div class="col-lg-8 mx-auto text-center">
                    <h2 class="display-5 fw-bold text-primary mb-3">Latest News & Events</h2>
                    <p class="lead text-muted">Stay updated with our school activities and achievements</p>
                </div>
            </div>
            <div class="row">

                @foreach($events as $event)
                <div class="col-lg-4 mb-4">
                    <div class="card border-0 shadow h-100">
                        {{-- Event Image --}}
                        @if($event->file && $event->file->file_path)
                        <img src="{{ asset('storage/' . $event->file->file_path) }}" class="card-img-top" alt="{{ $event->title }}">
                        @else
                        <img src="https://via.placeholder.com/600x400?text=No+Image" class="card-img-top" alt="No Image">
                        @endif

                        <div class="card-body">
                            {{-- Event Date --}}
                            <span class="badge bg-primary mb-2">{{ \Carbon\Carbon::parse($event->event_date)->format('M d, Y') }}</span>

                            {{-- Event Title --}}
                            <h5 class="fw-bold">{{ $event->title }}</h5>

                            {{-- Event Description --}}
                            <p class="text-muted">{{ Str::limit($event->description, 120) }}</p>

                            {{-- Read More link --}}
                            <a href="" class="btn btn-outline-primary btn-sm">Read More</a>
                        </div>
                    </div>
                </div>
                @endforeach


                <div class="col-lg-4 mb-4">
                    <div class="card border-0 shadow h-100">
                        <img src="https://images.unsplash.com/photo-1523050854058-8df90110c9f1?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1000&q=80" class="card-img-top" alt="Science Fair">
                        <div class="card-body">
                            <span class="badge bg-primary mb-2">Dec 15, 2023</span>
                            <h5 class="fw-bold">Annual Science Fair 2023</h5>
                            <p class="text-muted">Students showcase innovative projects and scientific discoveries in our annual science exhibition.</p>
                            <a href="#" class="btn btn-outline-primary btn-sm">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mb-4">
                    <div class="card border-0 shadow h-100">
                        <img src="https://images.unsplash.com/photo-1571019613454-1cb2f99b2d8b?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1000&q=80" class="card-img-top" alt="Sports Day">
                        <div class="card-body">
                            <span class="badge bg-success mb-2">Nov 28, 2023</span>
                            <h5 class="fw-bold">Inter-House Sports Meet</h5>
                            <p class="text-muted">A day of athletic excellence as students compete in various sports events and team competitions.</p>
                            <a href="#" class="btn btn-outline-primary btn-sm">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mb-4">
                    <div class="card border-0 shadow h-100">
                        <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1000&q=80" class="card-img-top" alt="Cultural Program">
                        <div class="card-body">
                            <span class="badge bg-warning mb-2">Oct 30, 2023</span>
                            <h5 class="fw-bold">Cultural Festival</h5>
                            <p class="text-muted">Students celebrate diversity through music, dance, drama, and art in our annual cultural extravaganza.</p>
                            <a href="#" class="btn btn-outline-primary btn-sm">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="py-5">
        <div class="container">
            <div class="row mb-5">
                <div class="col-lg-8 mx-auto text-center">
                    <h2 class="display-5 fw-bold text-primary mb-3">Contact Us</h2>
                    <p class="lead text-muted">We'd love to hear from you. Get in touch with us today!</p>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8 mx-auto">
                    <div class="row">
                        <div class="col-md-4 mb-4 text-center">
                            <div class="bg-primary bg-opacity-10 rounded-circle d-inline-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                                <i class="bi bi-geo-alt-fill text-primary display-6"></i>
                            </div>
                            <h6 class="fw-bold">Address</h6>
                            <p class="text-muted small">Near Sai Baba Mandir ,Bhinga Road ,Ikauna<br>Shrawasti<br> UP 271845</p>
                        </div>
                        <div class="col-md-4 mb-4 text-center">
                            <div class="bg-success bg-opacity-10 rounded-circle d-inline-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                                <i class="bi bi-telephone-fill text-success display-6"></i>
                            </div>
                            <h6 class="fw-bold">Phone</h6>
                            <p class="text-muted small">+91 98765 43210<br>+91 98765 43211<br>(Mon-Fri, 8AM-5PM)</p>
                        </div>
                        <div class="col-md-4 mb-4 text-center">
                            <div class="bg-info bg-opacity-10 rounded-circle d-inline-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                                <i class="bi bi-envelope-fill text-info display-6"></i>
                            </div>
                            <h6 class="fw-bold">Email</h6>
                            <p class="text-muted small">info@brightfuture.edu<br>admissions@brightfuture.edu<br>principal@brightfuture.edu</p>
                        </div>
                    </div>
                    <div class="card border-0 shadow">
                        <div class="card-body p-4">
                            <h5 class="fw-bold mb-3">Send us a Message</h5>
                            <form>
                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <label for="name" class="form-label">Full Name</label>
                                        <input type="text" class="form-control" id="name" required>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="email" class="form-label">Email Address</label>
                                        <input type="email" class="form-control" id="email" required>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label for="subject" class="form-label">Subject</label>
                                    <select class="form-select" id="subject" required>
                                        <option value="">Choose...</option>
                                        <option value="admissions">Admissions Inquiry</option>
                                        <option value="general">General Information</option>
                                        <option value="academics">Academic Programs</option>
                                        <option value="other">Other</option>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label for="message" class="form-label">Message</label>
                                    <textarea class="form-control" id="message" rows="4" required></textarea>
                                </div>
                                <button type="submit" class="btn btn-primary btn-lg">Send Message</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-dark text-white py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 mb-4">
                    <h5 class="fw-bold mb-3">
                        <i class="bi bi-mortarboard-fill me-2"></i>
                        Swami Vivekanand Inter College
                    </h5>
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