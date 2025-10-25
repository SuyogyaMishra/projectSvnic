@extends('layouts.adminApp');
@section('title', 'Home | SVNIC Admin Panel')
@section('content')

<div class="container-fluid" style="margin-top: 56px;">
    <div class="row">

        <!-- Dashboard Section -->
        <div id="dashboard-section" class="content-section">
            @if(session('success'))
            <div class="alert alert-success alert-dismissible fade show mt-4" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            @endif
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
                            <h5 class="card-title">{{ $content->Student}}+</h5>
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
                            <h5 class="card-title">{{ $contacts->where('status', 1)->count() }}</h5>
                            <p class="card-text text-muted">New Messages</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 mb-3">
                    <div class="card border-0 shadow-sm h-100">
                        <div class="card-body text-center">
                            <i class="bi bi-calendar-event-fill text-info display-4 mb-2"></i>
                            <h5 class="card-title">
                                {{ $events->filter(fn($event) => \Carbon\Carbon::parse($event->event_date)->isFuture())->count() }}
                            </h5>
                            <p class="card-text text-muted">Upcoming Events</p>

                        </div>
                    </div>
                </div>
            </div>

            <!-- Recent Activity -->
            <div class="row">
                <div class="col-md-8">
                    <div class="card border-0 shadow-sm">
                        <div class="card-body">
                            <div class="list-group list-group-flush">
                                {{-- Latest Admissions --}}
                                @foreach($admissions->take(2)->where('status',1) as $admission)
                                <div class="list-group-item d-flex align-items-center">
                                    <i class="bi bi-person-plus text-success me-3"></i>
                                    <div>
                                        <h6 class="mb-1">New admission inquiry</h6>
                                        <p class="mb-1 text-muted small">{{ $admission->full_name }} applied for {{ $admission->class_applied }}</p>
                                        <small class="text-muted">{{ $admission->created_at->diffForHumans() }}</small>
                                    </div>
                                </div>
                                @endforeach

                                {{-- Latest Contacts --}}
                                @foreach($contacts->where('status',1) as $contact)
                                <div class="list-group-item d-flex align-items-center">
                                    <i class="bi bi-envelope text-primary me-3"></i>
                                    <div>
                                        <h6 class="mb-1">Contact form submission</h6>
                                        <p class="mb-1 text-muted small">{{ $contact->name }} asked about "{{ $contact->subject }}"</p>
                                        <small class="text-muted">{{ $contact->created_at->diffForHumans() }}</small>
                                    </div>
                                </div>
                                @endforeach

                                {{-- Latest Events --}}
                                @foreach($events->filter(fn($event) => \Carbon\Carbon::parse($event->event_date)->isFuture())->take(2) as $event)
                                <div class="list-group-item d-flex align-items-center">
                                    <i class="bi bi-calendar-event text-warning me-3"></i>
                                    <div>
                                        <h6 class="mb-1">Event published</h6>
                                        <p class="mb-1 text-muted small">{{ $event->title }} ({{ \Carbon\Carbon::parse($event->event_date)->format('d M Y') }})</p>
                                        <small class="text-muted">{{ $event->created_at->diffForHumans() }}</small>
                                    </div>
                                </div>
                                @endforeach
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

    </div>

    <div id="users-section" class="content-section" style="display: none;">
        <h2>User Management</h2>
        <p>Manage admin users and permissions.</p>
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
                        <input type="number" value="{{ $content->Student }}" class="form-control" id="students" name="students" placeholder="Enter no. of students" required>
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
@endsection
@section('script')
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
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
<script>
    // One-time error container
    if (!document.getElementById('ajaxError')) {
        $('<div id="ajaxError" class="alert alert-danger" style="display:none;position:fixed;top:70px;right:30px;z-index:9999;"></div>').appendTo('body');
    }

    $(document).on('click', '.open-contact-modal', function() {
        var modelId = $(this).data('id');

        $.ajax({
            url: '{{ route("contacts.view", ":id") }}'.replace(':id', modelId),
            type: 'GET',
            success: function(response) {
                $('#editModalContent').html(response);
                $('#editModal').modal('show');
            },
            error: function() {
                $('#ajaxError').text('Failed to load contact details.').fadeIn();
                setTimeout(() => $('#ajaxError').fadeOut(), 4000);
            }
        });
    });
</script>


@endsection