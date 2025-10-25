@extends('layouts.app')
@section('title', 'Early Childhood Program - Bright Future Academy')

@section('css')
<style>
    .bg-gradient-primary {
        background: linear-gradient(135deg, #0d6efd 0%, #0a58ca 100%);
    }

    .card {
        transition: transform 0.2s ease;
    }

    .card:hover {
        transform: translateY(-5px);
    }
</style>
@endsection

@section("content")

<!-- Breadcrumb -->
<div class="bg-light py-3">
    <div class="container">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb mb-0">
                <li class="breadcrumb-item"><a href="/" class="text-decoration-none">Home</a></li>
                <li class="breadcrumb-item"><a href="/#academics" class="text-decoration-none">Academics</a></li>
                <li class="breadcrumb-item active">Early Childhood</li>
            </ol>
        </nav>
    </div>
</div>

<!-- Hero Section -->
<section class="py-5 bg-gradient-primary text-white">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <h1 class="display-4 fw-bold mb-3">Early Childhood Program</h1>
                <p class="lead mb-4">Nurturing young minds from Nursery to UKG through play-based learning and holistic development</p>
                <div class="d-flex flex-wrap gap-3">
                    <div class="bg-green bg-opacity-20 rounded px-3 py-2">
                        <strong>Ages:</strong> 2.5 - 5 years
                    </div>
                    <div class="bg-green bg-opacity-20 rounded px-3 py-2">
                        <strong class="">Levels:</strong> NUR, LKG, UKG
                    </div>
                </div>
            </div>
            <div class="col-lg-6 text-center">
                <i class="bi bi-balloon-heart-fill display-1 opacity-75"></i>
            </div>
        </div>
    </div>
</section>

<!-- Program Overview -->
<section class="py-5">
    <div class="container">
        <div class="row mb-5">
            <div class="col-lg-8 mx-auto text-center">
                <h2 class="display-5 fw-bold text-primary mb-3">Program Overview</h2>
                <p class="lead text-muted">Our Early Childhood program focuses on creating a loving, safe, and stimulating environment where children can explore, learn, and grow at their own pace.</p>
            </div>
        </div>

        <div class="row align-items-center mb-5">
            <div class="col-lg-6">
                <h3 class="fw-bold mb-3">Our Philosophy</h3>
                <p class="mb-4">We believe that early childhood is the most critical period for brain development. Our program is designed to:</p>
                <ul class="list-unstyled">
                    <li class="mb-2"><i class="bi bi-check-circle text-success me-2"></i>Foster creativity and imagination</li>
                    <li class="mb-2"><i class="bi bi-check-circle text-success me-2"></i>Develop social and emotional skills</li>
                    <li class="mb-2"><i class="bi bi-check-circle text-success me-2"></i>Build language and communication abilities</li>
                    <li class="mb-2"><i class="bi bi-check-circle text-success me-2"></i>Encourage physical development and motor skills</li>
                    <li class="mb-2"><i class="bi bi-check-circle text-success me-2"></i>Instill a love for learning</li>
                </ul>
            </div>
            <div class="col-lg-6">
                <img src="https://images.unsplash.com/photo-1587654780291-39c9404d746b?ixlib=rb-4.0.3&auto=format&fit=crop&w=1000&q=80" alt="Children playing" class="img-fluid rounded-3 shadow">
            </div>
        </div>
    </div>
</section>

<!-- Grade Levels -->
<section class="py-5 bg-light">
    <div class="container">
        <div class="row mb-5">
            <div class="col-lg-8 mx-auto text-center">
                <h2 class="display-5 fw-bold text-primary mb-3">Grade Levels</h2>
                <p class="lead text-muted">Three progressive levels designed for different age groups</p>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-4 mb-4">
                <div class="card border-0 shadow h-100">
                    <div class="card-body text-center p-4">
                        <div class="bg-primary bg-opacity-10 rounded-circle d-inline-flex align-items-center justify-content-center mb-3" style="width: 80px; height: 80px;">
                            <i class="bi bi-baby text-primary display-6"></i>
                        </div>
                        <h5 class="fw-bold">Nursery (NUR)</h5>
                        <p class="text-muted mb-3"><strong>Age:</strong> 2.5 - 3.5 years</p>
                        <ul class="list-unstyled text-start small">
                            <li><i class="bi bi-star text-warning me-2"></i>Introduction to school environment</li>
                            <li><i class="bi bi-star text-warning me-2"></i>Basic social skills development</li>
                            <li><i class="bi bi-star text-warning me-2"></i>Sensory play activities</li>
                            <li><i class="bi bi-star text-warning me-2"></i>Simple songs and rhymes</li>
                            <li><i class="bi bi-star text-warning me-2"></i>Art and craft exploration</li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 mb-4">
                <div class="card border-0 shadow h-100">
                    <div class="card-body text-center p-4">
                        <div class="bg-success bg-opacity-10 rounded-circle d-inline-flex align-items-center justify-content-center mb-3" style="width: 80px; height: 80px;">
                            <i class="bi bi-balloon text-success display-6"></i>
                        </div>
                        <h5 class="fw-bold">Lower KG (LKG)</h5>
                        <p class="text-muted mb-3"><strong>Age:</strong> 3.5 - 4.5 years</p>
                        <ul class="list-unstyled text-start small">
                            <li><i class="bi bi-star text-warning me-2"></i>Basic alphabet and number recognition</li>
                            <li><i class="bi bi-star text-warning me-2"></i>Fine motor skill development</li>
                            <li><i class="bi bi-star text-warning me-2"></i>Group activities and sharing</li>
                            <li><i class="bi bi-star text-warning me-2"></i>Story telling and listening skills</li>
                            <li><i class="bi bi-star text-warning me-2"></i>Introduction to writing patterns</li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 mb-4">
                <div class="card border-0 shadow h-100">
                    <div class="card-body text-center p-4">
                        <div class="bg-info bg-opacity-10 rounded-circle d-inline-flex align-items-center justify-content-center mb-3" style="width: 80px; height: 80px;">
                            <i class="bi bi-mortarboard text-info display-6"></i>
                        </div>
                        <h5 class="fw-bold">Upper KG (UKG)</h5>
                        <p class="text-muted mb-3"><strong>Age:</strong> 4.5 - 5.5 years</p>
                        <ul class="list-unstyled text-start small">
                            <li><i class="bi bi-star text-warning me-2"></i>Pre-reading and pre-writing skills</li>
                            <li><i class="bi bi-star text-warning me-2"></i>Basic mathematics concepts</li>
                            <li><i class="bi bi-star text-warning me-2"></i>School readiness preparation</li>
                            <li><i class="bi bi-star text-warning me-2"></i>Enhanced vocabulary building</li>
                            <li><i class="bi bi-star text-warning me-2"></i>Independent learning habits</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Curriculum Highlights -->
<section class="py-5">
    <div class="container">
        <div class="row mb-5">
            <div class="col-lg-8 mx-auto text-center">
                <h2 class="display-5 fw-bold text-primary mb-3">Curriculum Highlights</h2>
                <p class="lead text-muted">Our comprehensive curriculum covers all aspects of early childhood development</p>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6 mb-4">
                <div class="d-flex">
                    <div class="flex-shrink-0">
                        <div class="bg-primary rounded-circle d-flex align-items-center justify-content-center" style="width: 50px; height: 50px;">
                            <i class="bi bi-palette-fill text-white"></i>
                        </div>
                    </div>
                    <div class="flex-grow-1 ms-3">
                        <h5 class="fw-bold">Creative Arts</h5>
                        <p class="text-muted">Drawing, painting, crafts, music, and movement activities to enhance creativity and self-expression.</p>
                    </div>
                </div>
            </div>

            <div class="col-md-6 mb-4">
                <div class="d-flex">
                    <div class="flex-shrink-0">
                        <div class="bg-success rounded-circle d-flex align-items-center justify-content-center" style="width: 50px; height: 50px;">
                            <i class="bi bi-book-fill text-white"></i>
                        </div>
                    </div>
                    <div class="flex-grow-1 ms-3">
                        <h5 class="fw-bold">Language Development</h5>
                        <p class="text-muted">English and Hindi language introduction through stories, songs, and interactive activities.</p>
                    </div>
                </div>
            </div>

            <div class="col-md-6 mb-4">
                <div class="d-flex">
                    <div class="flex-shrink-0">
                        <div class="bg-warning rounded-circle d-flex align-items-center justify-content-center" style="width: 50px; height: 50px;">
                            <i class="bi bi-calculator-fill text-white"></i>
                        </div>
                    </div>
                    <div class="flex-grow-1 ms-3">
                        <h5 class="fw-bold">Mathematical Concepts</h5>
                        <p class="text-muted">Numbers, shapes, patterns, sorting, and basic counting through hands-on activities.</p>
                    </div>
                </div>
            </div>

            <div class="col-md-6 mb-4">
                <div class="d-flex">
                    <div class="flex-shrink-0">
                        <div class="bg-info rounded-circle d-flex align-items-center justify-content-center" style="width: 50px; height: 50px;">
                            <i class="bi bi-heart-fill text-white"></i>
                        </div>
                    </div>
                    <div class="flex-grow-1 ms-3">
                        <h5 class="fw-bold">Social-Emotional Learning</h5>
                        <p class="text-muted">Building relationships, emotional regulation, empathy, and interpersonal skills.</p>
                    </div>
                </div>
            </div>

            <div class="col-md-6 mb-4">
                <div class="d-flex">
                    <div class="flex-shrink-0">
                        <div class="bg-danger rounded-circle d-flex align-items-center justify-content-center" style="width: 50px; height: 50px;">
                            <i class="bi bi-activity text-white"></i>
                        </div>
                    </div>
                    <div class="flex-grow-1 ms-3">
                        <h5 class="fw-bold">Physical Development</h5>
                        <p class="text-muted">Gross and fine motor skills through outdoor play, sports, and manipulative activities.</p>
                    </div>
                </div>
            </div>

            <div class="col-md-6 mb-4">
                <div class="d-flex">
                    <div class="flex-shrink-0">
                        <div class="bg-secondary rounded-circle d-flex align-items-center justify-content-center" style="width: 50px; height: 50px;">
                            <i class="bi bi-globe text-white"></i>
                        </div>
                    </div>
                    <div class="flex-grow-1 ms-3">
                        <h5 class="fw-bold">Environmental Awareness</h5>
                        <p class="text-muted">Nature exploration, basic science concepts, and environmental consciousness.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Daily Schedule -->
<section class="py-5 bg-light">
    <div class="container">
        <div class="row mb-5">
            <div class="col-lg-8 mx-auto text-center">
                <h2 class="display-5 fw-bold text-primary mb-3">Daily Schedule</h2>
                <p class="lead text-muted">A well-structured day that balances learning, play, and rest</p>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-6 mx-auto">
                <div class="card border-0 shadow">
                    <div class="card-body p-4">
                        <div class="timeline">
                            <div class="d-flex mb-3">
                                <div class="bg-primary rounded-circle d-flex align-items-center justify-content-center me-3" style="width: 40px; height: 40px;">
                                    <i class="bi bi-sun text-white"></i>
                                </div>
                                <div>
                                    <h6 class="fw-bold mb-1">8:00 - 8:30 AM</h6>
                                    <p class="text-muted mb-0">Welcome & Free Play</p>
                                </div>
                            </div>

                            <div class="d-flex mb-3">
                                <div class="bg-success rounded-circle d-flex align-items-center justify-content-center me-3" style="width: 40px; height: 40px;">
                                    <i class="bi bi-book text-white"></i>
                                </div>
                                <div>
                                    <h6 class="fw-bold mb-1">8:30 - 9:30 AM</h6>
                                    <p class="text-muted mb-0">Language Activities</p>
                                </div>
                            </div>

                            <div class="d-flex mb-3">
                                <div class="bg-warning rounded-circle d-flex align-items-center justify-content-center me-3" style="width: 40px; height: 40px;">
                                    <i class="bi bi-apple text-white"></i>
                                </div>
                                <div>
                                    <h6 class="fw-bold mb-1">9:30 - 10:00 AM</h6>
                                    <p class="text-muted mb-0">Snack Time</p>
                                </div>
                            </div>

                            <div class="d-flex mb-3">
                                <div class="bg-info rounded-circle d-flex align-items-center justify-content-center me-3" style="width: 40px; height: 40px;">
                                    <i class="bi bi-calculator text-white"></i>
                                </div>
                                <div>
                                    <h6 class="fw-bold mb-1">10:00 - 11:00 AM</h6>
                                    <p class="text-muted mb-0">Math & Science Exploration</p>
                                </div>
                            </div>

                            <div class="d-flex mb-3">
                                <div class="bg-danger rounded-circle d-flex align-items-center justify-content-center me-3" style="width: 40px; height: 40px;">
                                    <i class="bi bi-activity text-white"></i>
                                </div>
                                <div>
                                    <h6 class="fw-bold mb-1">11:00 - 11:30 AM</h6>
                                    <p class="text-muted mb-0">Outdoor Play</p>
                                </div>
                            </div>

                            <div class="d-flex">
                                <div class="bg-secondary rounded-circle d-flex align-items-center justify-content-center me-3" style="width: 40px; height: 40px;">
                                    <i class="bi bi-palette text-white"></i>
                                </div>
                                <div>
                                    <h6 class="fw-bold mb-1">11:30 - 12:00 PM</h6>
                                    <p class="text-muted mb-0">Arts & Crafts</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Admission Process -->
<section class="py-5">
    <div class="container">
        <div class="row mb-5">
            <div class="col-lg-8 mx-auto text-center">
                <h2 class="display-5 fw-bold text-primary mb-3">Admission Process</h2>
                <p class="lead text-muted">Simple steps to enroll your child in our Early Childhood program</p>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-8 mx-auto">
                <div class="row">
                    <div class="col-md-6 mb-4">
                        <div class="card border-0 shadow-sm h-100">
                            <div class="card-body text-center p-4">
                                <div class="bg-primary bg-opacity-10 rounded-circle d-inline-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                                    <span class="fw-bold text-primary fs-4">1</span>
                                </div>
                                <h5 class="fw-bold">School Visit</h5>
                                <p class="text-muted small">Schedule a visit to our campus and meet our teachers</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 mb-4">
                        <div class="card border-0 shadow-sm h-100">
                            <div class="card-body text-center p-4">
                                <div class="bg-success bg-opacity-10 rounded-circle d-inline-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                                    <span class="fw-bold text-success fs-4">2</span>
                                </div>
                                <h5 class="fw-bold">Application Form</h5>
                                <p class="text-muted small">Complete the admission form with required documents</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 mb-4">
                        <div class="card border-0 shadow-sm h-100">
                            <div class="card-body text-center p-4">
                                <div class="bg-warning bg-opacity-10 rounded-circle d-inline-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                                    <span class="fw-bold text-warning fs-4">3</span>
                                </div>
                                <h5 class="fw-bold">Interaction Session</h5>
                                <p class="text-muted small">Informal play session with your child</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 mb-4">
                        <div class="card border-0 shadow-sm h-100">
                            <div class="card-body text-center p-4">
                                <div class="bg-info bg-opacity-10 rounded-circle d-inline-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                                    <span class="fw-bold text-info fs-4">4</span>
                                </div>
                                <h5 class="fw-bold">Enrollment</h5>
                                <p class="text-muted small">Complete admission formalities and join our family</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="text-center mt-4">
                    <a href="/#contact" class="btn btn-primary btn-lg">Contact for Admission</a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Footer -->
@endsection