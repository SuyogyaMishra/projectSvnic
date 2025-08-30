<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard - Bright Future Academy</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.css" rel="stylesheet">
</head>

<body>
    <!-- Navigation Header -->
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

    <div class="container-fluid" style="margin-top: 56px;">
        <div class="row">
            <!-- Sidebar -->
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
                            <a class="nav-link" href="#content" data-section="content">
                                <i class="bi bi-file-text me-2"></i>
                                Website Content
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#events" data-section="events">
                                <i class="bi bi-calendar-event me-2"></i>
                                Events & News
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#admissions" data-section="admissions">
                                <i class="bi bi-person-plus me-2"></i>
                                Admissions
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#contact" data-section="contact">
                                <i class="bi bi-envelope me-2"></i>
                                Contact Messages
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#gallery" data-section="gallery">
                                <i class="bi bi-images me-2"></i>
                                Photo Gallery
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

            <!-- Main Content -->
            @if(session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            @endif

            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
                <!-- Dashboard Section -->
                <div id="dashboard-section" class="content-section">
                    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                        <h1 class="h2">Dashboard</h1>
                        <div class="btn-toolbar mb-2 mb-md-0">
                            <div class="btn-group me-2">
                                <button type="button" class="btn btn-sm btn-outline-secondary">Export</button>
                            </div>
                        </div>
                    </div>

                    <!-- Stats Cards -->
                    <div class="row mb-4">
                        <div class="col-md-3 mb-3">
                            <div class="card border-0 shadow-sm h-100">
                                <div class="card-body text-center">
                                    <i class="bi bi-people-fill text-primary display-4 mb-2"></i>
                                    <h5 class="card-title">{{ $stat->Students}}</h5>
                                    <p class="card-text text-muted">Total Students</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 mb-3">
                            <div class="card border-0 shadow-sm h-100">
                                <div class="card-body text-center">
                                    <i class="bi bi-person-check-fill text-success display-4 mb-2"></i>
                                    <h5 class="card-title">{{ $stat->Teachers}}</h5>
                                    <p class="card-text text-muted">Teachers</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 mb-3">
                            <div class="card border-0 shadow-sm h-100">
                                <div class="card-body text-center">
                                    <i class="bi bi-envelope-fill text-warning display-4 mb-2"></i>
                                    <h5 class="card-title">15</h5>
                                    <p class="card-text text-muted">New Messages</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 mb-3">
                            <div class="card border-0 shadow-sm h-100">
                                <div class="card-body text-center">
                                    <i class="bi bi-calendar-event-fill text-info display-4 mb-2"></i>
                                    <h5 class="card-title">5</h5>
                                    <p class="card-text text-muted">Upcoming Events</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Recent Activity -->
                    <div class="row">
                        <div class="col-md-8">
                            <div class="card border-0 shadow-sm">
                                <div class="card-header bg-white">
                                    <h5 class="card-title mb-0">Recent Activity</h5>
                                </div>
                                <div class="card-body">
                                    <div class="list-group list-group-flush">
                                        <div class="list-group-item d-flex align-items-center">
                                            <i class="bi bi-person-plus text-success me-3"></i>
                                            <div>
                                                <h6 class="mb-1">New admission inquiry</h6>
                                                <p class="mb-1 text-muted small">John Doe applied for Grade 5</p>
                                                <small class="text-muted">2 hours ago</small>
                                            </div>
                                        </div>
                                        <div class="list-group-item d-flex align-items-center">
                                            <i class="bi bi-envelope text-primary me-3"></i>
                                            <div>
                                                <h6 class="mb-1">Contact form submission</h6>
                                                <p class="mb-1 text-muted small">Parent inquiry about school fees</p>
                                                <small class="text-muted">4 hours ago</small>
                                            </div>
                                        </div>
                                        <div class="list-group-item d-flex align-items-center">
                                            <i class="bi bi-calendar-event text-warning me-3"></i>
                                            <div>
                                                <h6 class="mb-1">Event published</h6>
                                                <p class="mb-1 text-muted small">Annual Sports Day 2024 added</p>
                                                <small class="text-muted">1 day ago</small>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card border-0 shadow-sm">
                                <div class="card-header bg-white">
                                    <h5 class="card-title mb-0">Quick Actions</h5>
                                </div>
                                <div class="card-body">
                                    <div class="d-grid gap-2">
                                        <button class="btn btn-primary btn-sm" data-section="events">Add New Event</button>
                                        <button class="btn btn-success btn-sm" data-section="content">Update Content</button>
                                        <button class="btn btn-warning btn-sm" data-section="contact">View Messages</button>
                                        <button class="btn btn-info btn-sm" data-section="gallery">Upload Photos</button>
                                        <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#updateModal">
                                            Update Teachers/Student No
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Content Management Section -->
                <div id="content-section" class="content-section" style="display: none;">
                    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                        <h1 class="h2">Website Content Management</h1>
                        <button type="submit" form="webForm" class="btn btn-primary">Save Changes</button>
                    </div>

                    <div class="row">
                        <div class="col-md-6 mb-4">
                            <div class="card border-0 shadow-sm">
                                <div class="card-header">
                                    <h5 class="mb-0">Homepage Content</h5>
                                </div>
                                <form id="webForm" action="{{ route("updateweb") }}" method="POST"  enctype="multipart/form-data">
                                    @csrf
                                    <div class="card-body">
                                        <div class="mb-3">
                                            <label for="heroTitle" class="form-label">Hero Title</label>
                                            <input type="text" class="form-control" id="heroTitle" name="heroTitle" value="Welcome to Bright Future Academy">
                                        </div>

                                        <div class="mb-3">
                                            <label for="heroDescription" class="form-label">Hero Description</label>
                                            <textarea class="form-control" id="heroDescription" name="heroDescription" rows="3">
                                              Nurturing young minds from Nursery to Grade 12 with excellence, compassion, and innovation.
                                             </textarea>
                                        </div>

                                        <div class="mb-3">
                                            <label for="schoolStats" class="form-label">School Statistics</label>
                                            <div class="row">
                                                <div class="col-4">
                                                    <input type="number" class="form-control" name="years" placeholder="Years" value="25">
                                                    <small class="text-muted">Years</small>
                                                </div>
                                                <div class="col-4">
                                                    <input type="number" class="form-control" name="students" placeholder="Students" value="1200">
                                                    <small class="text-muted">Students</small>
                                                </div>
                                                <div class="col-4">
                                                    <input type="number" class="form-control" name="success" placeholder="Success %" value="95">
                                                    <small class="text-muted">Success %</small>
                                                </div>
                                                <div class="mb-3">
                                                    <label for="schoolPic" class="form-label">Hero pic</label>
                                                    <input type="file" class="form-control" id="schoolPic" name="schoolPic" placeholder="upload hero pic">
+                                                </div>
                                            </div>
                                        </div>


                                    </div>
                                </form>

                            </div>
                        </div>
                        <div class="col-md-6 mb-4">
                            <div class="card border-0 shadow-sm">
                                <div class="card-header">
                                    <h5 class="mb-0">About Section</h5>
                                </div>
                                <div class="card-body">
                                    <div class="mb-3">
                                        <label for="mission" class="form-label">Mission Statement</label>
                                        <textarea form="webForm" name="mission" class="form-control" id="mission" rows="3">To provide quality education that empowers students to become confident, creative, and compassionate global citizens.</textarea>
                                    </div>
                                    <div class="mb-3">
                                        <label for="vision" class="form-label">Vision Statement</label>
                                        <textarea form="webForm" name="vision" class="form-control" id="vision" rows="3">To be a leading educational institution that inspires lifelong learning, critical thinking, and social responsibility.</textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Events Management Section -->
                <div id="events-section" class="content-section" style="display: none;">
                    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                        <h1 class="h2">Events & News Management</h1>
                        <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addEventModal">Add New Event</button>
                    </div>

                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>Title</th>
                                    <th>Date</th>
                                    <th>Status</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Annual Science Fair 2023</td>
                                    <td>Dec 15, 2023</td>
                                    <td><span class="badge bg-success">Published</span></td>
                                    <td>
                                        <button class="btn btn-sm btn-outline-primary">Edit</button>
                                        <button class="btn btn-sm btn-outline-danger">Delete</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Inter-House Sports Meet</td>
                                    <td>Nov 28, 2023</td>
                                    <td><span class="badge bg-success">Published</span></td>
                                    <td>
                                        <button class="btn btn-sm btn-outline-primary">Edit</button>
                                        <button class="btn btn-sm btn-outline-danger">Delete</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Cultural Festival</td>
                                    <td>Oct 30, 2023</td>
                                    <td><span class="badge bg-warning">Draft</span></td>
                                    <td>
                                        <button class="btn btn-sm btn-outline-primary">Edit</button>
                                        <button class="btn btn-sm btn-outline-danger">Delete</button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                <!-- Contact Messages Section -->
                <div id="contact-section" class="content-section" style="display: none;">
                    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                        <h1 class="h2">Contact Messages</h1>
                        <div class="btn-toolbar">
                            <button class="btn btn-outline-secondary btn-sm me-2">Mark All Read</button>
                            <button class="btn btn-outline-danger btn-sm">Delete Selected</button>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12">
                            <div class="table-responsive">
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th><input type="checkbox" class="form-check-input"></th>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Subject</th>
                                            <th>Date</th>
                                            <th>Status</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($contacts as $contact)
                                        <tr>
                                            <td><input type="checkbox" class="form-check-input"></td>
                                            <td>{{  $contact->name }}</td>
                                            <td>{{  $contact->email }}</td>
                                            <td> {{  $contact->subject }} </td>
                                            <td>{{  $contact->	created_at }}</td>
                                            <td><span class="badge bg-primary">New</span></td>
                                            <td>
                                                <button class="btn btn-sm btn-outline-primary">View</button>
                                                <button class="btn btn-sm btn-outline-success">Reply</button>
                                            </td>
                                        </tr>
                                        @endforeach
                                        <tr>
                                            <td><input type="checkbox" class="form-check-input"></td>
                                            <td>Sarah Johnson</td>
                                            <td>sarah@email.com</td>
                                            <td>General Information</td>
                                            <td>2023-12-09</td>
                                            <td><span class="badge bg-secondary">Read</span></td>
                                            <td>
                                                <button class="btn btn-sm btn-outline-primary">View</button>
                                                <button class="btn btn-sm btn-outline-success">Reply</button>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Additional sections would be hidden by default -->
                <div id="admissions-section" class="content-section" style="display: none;">
                    <h2>Admissions Management</h2>
                    <p>Manage admission applications and requirements.</p>
                </div>

                <div id="gallery-section" class="content-section" style="display: none;">
                    <h2>Photo Gallery Management</h2>
                    <p>Upload and manage school photos.</p>
                </div>

                <div id="users-section" class="content-section" style="display: none;">
                    <h2>User Management</h2>
                    <p>Manage admin users and permissions.</p>
                </div>
            </main>
        </div>
    </div>

    <!-- Add Event Modal -->
    <div class="modal fade" id="addEventModal" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Add New Event</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('events.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="eventTitle" class="form-label">Event Title</label>
                            <input type="text" class="form-control" id="eventTitle" name="event_title" required>
                        </div>
                        <div class="mb-3">
                            <label for="eventDate" class="form-label">Event Date</label>
                            <input type="date" class="form-control" id="eventDate" name="event_date" required>
                        </div>
                        <div class="mb-3">
                            <label for="eventDescription" class="form-label">Description</label>
                            <textarea class="form-control" id="eventDescription" name="event_description" rows="3"></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="eventImage" class="form-label">Event Image</label>
                            <input type="file" class="form-control" id="eventImage" name="event_image">
                        </div>
                        <button type="submit" class="btn btn-primary">Save Event</button>
                    </form>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    <button type="button" class="btn btn-primary">Save Event</button>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="updateModal" tabindex="-1" aria-labelledby="updateModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">
                    <h5 class="modal-title" id="updateModalLabel">Update Counts</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <!-- Modal Body (Form) -->
                <form method="POST" action="{{ route('updateStudent') }}">

                    @csrf
                    <div class="modal-body">
                        <div class="mb-3">
                            <label for="students" class="form-label">No. of Students</label>
                            <input type="number" value="{{ $stat->Students }}" class="form-control" id="students" name="students" placeholder="Enter no. of students" required>
                        </div>
                        <div class="mb-3">
                            <label for="teachers" class="form-label">No. of Teachers</label>
                            <input type="number" value="{{ $stat->Teachers }}" class="form-control" id="teachers" name="teachers" placeholder="Enter no. of teachers" required>
                        </div>
                    </div>

                    <!-- Modal Footer -->
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save changes</button>
                    </div>
                </form>

            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // Check if user is logged in
        window.addEventListener('load', function() {
            const isLoggedIn = localStorage.getItem('adminLoggedIn');
            const username = localStorage.getItem('adminUsername');

            if (!isLoggedIn) {
                window.location.href = 'admin-login.html';
                return;
            }

            if (username) {
                document.getElementById('adminUsername').textContent = username;
            }
        });

        // Logout functionality
        document.getElementById('logoutBtn').addEventListener('click', function(e) {
            e.preventDefault();
            localStorage.removeItem('adminLoggedIn');
            localStorage.removeItem('adminUsername');
            window.location.href = 'admin-login.html';
        });

        // Sidebar navigation
        document.querySelectorAll('.nav-link[data-section]').forEach(link => {
            link.addEventListener('click', function(e) {
                e.preventDefault();

                // Remove active class from all links
                document.querySelectorAll('.nav-link').forEach(l => l.classList.remove('active'));

                // Add active class to clicked link
                this.classList.add('active');

                // Hide all content sections
                document.querySelectorAll('.content-section').forEach(section => {
                    section.style.display = 'none';
                });

                // Show selected section
                const sectionId = this.getAttribute('data-section') + '-section';
                const section = document.getElementById(sectionId);
                if (section) {
                    section.style.display = 'block';
                }
            });
        });

        // Quick action buttons
        document.querySelectorAll('button[data-section]').forEach(button => {
            button.addEventListener('click', function() {
                const sectionId = this.getAttribute('data-section');

                // Remove active class from all nav links
                document.querySelectorAll('.nav-link').forEach(l => l.classList.remove('active'));

                // Add active class to corresponding nav link
                const navLink = document.querySelector(`.nav-link[data-section="${sectionId}"]`);
                if (navLink) {
                    navLink.classList.add('active');
                }

                // Hide all content sections
                document.querySelectorAll('.content-section').forEach(section => {
                    section.style.display = 'none';
                });

                // Show selected section
                const section = document.getElementById(sectionId + '-section');
                if (section) {
                    section.style.display = 'block';
                }
            });
        });
    </script>

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
</body>

</html>