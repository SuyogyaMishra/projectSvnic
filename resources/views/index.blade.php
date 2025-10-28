@extends('layouts.app');
@section('title', 'Home | SVNIC')
@section('content')
<section id="home" class="hero-section position-relative overflow-hidden py-5 py-lg-0">
    <div class="container position-relative">
        <div class="row min-vh-100 align-items-center">
            <!-- Left Content -->
            <div class="col-lg-6 mb-5 mb-lg-0">
                <h1 class="display-4 fw-bold text-primary mb-3">
                    {{ $content->HeroTitle }}
                </h1>
                <p class="lead text-muted mb-4">
                    {{ $content->Hero_Description }}
                </p>

                <div class="d-flex flex-wrap gap-3 mb-5">
                    <a href="#admissions" class="btn btn-primary btn-lg px-4 shadow-sm hover-translate">
                        Apply Now
                    </a>
                    <a href="#about" class="btn btn-outline-primary btn-lg px-4 shadow-sm hover-translate">
                        Learn More
                    </a>
                </div>

                <div class="d-flex flex-wrap gap-4">
                    <div class="text-center">
                        <h3 class="fw-bold text-primary mb-0">{{ $content->Years }}</h3>
                        <small class="text-muted text-uppercase">Years of Excellence</small>
                    </div>
                    <div class="text-center">
                        <h3 class="fw-bold text-primary mb-0">{{ $content->Student }}+</h3>
                        <small class="text-muted text-uppercase">Happy Students</small>
                    </div>
                    <div class="text-center">
                        <h3 class="fw-bold text-primary mb-0">{{ $content->Success }}</h3>
                        <small class="text-muted text-uppercase">University Acceptance</small>
                    </div>
                </div>
            </div>

            <!-- Right Image -->
            <div class="col-lg-6 text-center">
                <div class="position-relative">
                    <img
                        src="{{ asset('storage/' . $content->schoolPic) }}"
                        alt="School Building"
                        class="img-fluid rounded-4 shadow-lg hero-img animate-float"
                        style="width: 100%; max-width: 700px; height: 500px; object-fit: cover; object-position: center;" <!-- Decorative Shape Overlay -->
                </div>
            </div>
        </div>
    </div>

    <!-- Subtle Background Pattern -->
    <div class="position-absolute top-0 start-0 w-100 h-100 bg-light opacity-25"
        style="background: radial-gradient(circle at 30% 30%, rgba(0,123,255,0.1), transparent 70%); z-index: -1;">
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
                        <a href="earlychild" class="btn btn-primary">More</a>
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
                <button
                    class="btn btn-primary btn-lg open-admission-form"
                    data-bs-toggle="modal"
                    data-bs-target="#admissionModal">
                    Apply For Admission
                </button>

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
                        <form method="post" action="{{ route('contactInfo') }}">
                            @csrf
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="name" class="form-label">Full Name</label>
                                    <input type="text" class="form-control" name="name" id="name" required>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="email" class="form-label">Email Address</label>
                                    <input type="email" class="form-control" name="email" id="email" required>
                                </div>
                            </div>

                            <div class="mb-3">
                                <label for="subject" class="form-label">Subject</label>
                                <select class="form-select" name="subject" id="subject" required>
                                    <option value="">Choose...</option>
                                    <option value="admissions">Admissions Inquiry</option>
                                    <option value="general">General Information</option>
                                    <option value="academics">Academic Programs</option>
                                    <option value="other">Other</option>
                                </select>
                            </div>

                            <div class="mb-3">
                                <label for="message" class="form-label">Message</label>
                                <textarea class="form-control" name="message" id="message" rows="4" required></textarea>
                            </div>

                            <button type="submit" class="btn btn-primary btn-lg">Send Message</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


    {!! render_modal(
    'admissionModal',
    ' 🌟 SVNIC - Where Learning Begins and Dreams Take Flight',
    view('admission_form')->render(),
    'lg'
    ) !!}



</section>

@endsection
@section('script')
<script>
    $(document).ready(function() {
      
        function initAdmissionFormJS() {
            const classSelect = document.getElementById("classSelect");
            const genderRadios = document.querySelectorAll("input[name='gender']");
            const streamGroup = document.getElementById("streamGroup");
            const streamSelect = document.getElementById("stream");
            const form = document.getElementById("admissionForm");

            const STREAMS = {
                "9-10": {
                    Male: ["Math"],
                    Female: ["Math", "Home Science"],
                    Default: ["Math", "Home Science"]
                },
                "11-12": {
                    Default: ["Science", "Commerce", "Arts"]
                }
            };

            function updateStreamField() {
                const selectedClass = classSelect.value;
                const selectedGender = document.querySelector("input[name='gender']:checked")?.value;

                streamSelect.innerHTML = '<option selected disabled value="">Select Stream</option>';

                if (!selectedClass || selectedClass === "1-8") {
                    streamGroup.style.display = "none";
                    streamSelect.required = false;
                    return;
                }

                streamGroup.style.display = "block";
                streamSelect.required = true;

                let options = [];

                if (selectedClass === "9-10") {
                    options = STREAMS["9-10"][selectedGender] || STREAMS["9-10"].Default;
                } else if (selectedClass === "11-12") {
                    options = STREAMS["11-12"].Default;
                }

                options.forEach(opt => {
                    const optionEl = document.createElement("option");
                    optionEl.textContent = opt;
                    optionEl.value = opt;
                    streamSelect.appendChild(optionEl);
                });
            }

            // Attach event listeners
            classSelect.addEventListener("change", updateStreamField);
            genderRadios.forEach(radio => radio.addEventListener("change", updateStreamField));

            // Form validation
            form.addEventListener("submit", function(e) {
                if (!this.checkValidity()) {
                    e.preventDefault();
                    e.stopPropagation();
                }
                this.classList.add("was-validated");
            });

            // Initialize fields
            updateStreamField();
        }
    });
</script>


@endsection




</html>