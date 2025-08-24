<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Events Management - Admin Panel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.css" rel="stylesheet">
</head>
<body>
    <!-- Navigation Header -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container-fluid">
            <a class="navbar-brand fw-bold" href="admin-dashboard.html">
                <i class="bi bi-arrow-left me-2"></i>
                Back to Dashboard
            </a>
            
            <div class="navbar-nav ms-auto">
                <a href="admin-login.html" class="btn btn-outline-light btn-sm">
                    <i class="bi bi-box-arrow-right me-2"></i>Logout
                </a>
            </div>
        </div>
    </nav>

    <div class="container-fluid mt-4">
        <div class="row">
            <div class="col-12">
                <div class="d-flex justify-content-between align-items-center mb-4">
                    <h1 class="h2">Events & News Management</h1>
                    <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addEventModal">
                        <i class="bi bi-plus-circle me-2"></i>Add New Event
                    </button>
                </div>

                <!-- Filter and Search -->
                <div class="row mb-4">
                    <div class="col-md-6">
                        <div class="input-group">
                            <span class="input-group-text"><i class="bi bi-search"></i></span>
                            <input type="text" class="form-control" placeholder="Search events...">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <select class="form-select">
                            <option value="">All Status</option>
                            <option value="published">Published</option>
                            <option value="draft">Draft</option>
                            <option value="archived">Archived</option>
                        </select>
                    </div>
                    <div class="col-md-3">
                        <select class="form-select">
                            <option value="">All Categories</option>
                            <option value="academic">Academic</option>
                            <option value="sports">Sports</option>
                            <option value="cultural">Cultural</option>
                            <option value="news">News</option>
                        </select>
                    </div>
                </div>

                <!-- Events Grid -->
                <div class="row">
                    <div class="col-lg-4 mb-4">
                        <div class="card border-0 shadow-sm">
                            <img src="https://images.unsplash.com/photo-1523050854058-8df90110c9f1?ixlib=rb-4.0.3&auto=format&fit=crop&w=400&q=80" class="card-img-top" alt="Science Fair">
                            <div class="card-body">
                                <div class="d-flex justify-content-between align-items-start mb-2">
                                    <span class="badge bg-success">Published</span>
                                    <span class="badge bg-info">Academic</span>
                                </div>
                                <h5 class="card-title">Annual Science Fair 2023</h5>
                                <p class="card-text text-muted small">Students showcase innovative projects and scientific discoveries in our annual science exhibition.</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <small class="text-muted">Dec 15, 2023</small>
                                    <div class="btn-group" role="group">
                                        <button class="btn btn-sm btn-outline-primary" title="Edit">
                                            <i class="bi bi-pencil"></i>
                                        </button>
                                        <button class="btn btn-sm btn-outline-success" title="View">
                                            <i class="bi bi-eye"></i>
                                        </button>
                                        <button class="btn btn-sm btn-outline-danger" title="Delete">
                                            <i class="bi bi-trash"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 mb-4">
                        <div class="card border-0 shadow-sm">
                            <img src="https://images.unsplash.com/photo-1571019613454-1cb2f99b2d8b?ixlib=rb-4.0.3&auto=format&fit=crop&w=400&q=80" class="card-img-top" alt="Sports Day">
                            <div class="card-body">
                                <div class="d-flex justify-content-between align-items-start mb-2">
                                    <span class="badge bg-success">Published</span>
                                    <span class="badge bg-warning">Sports</span>
                                </div>
                                <h5 class="card-title">Inter-House Sports Meet</h5>
                                <p class="card-text text-muted small">A day of athletic excellence as students compete in various sports events and team competitions.</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <small class="text-muted">Nov 28, 2023</small>
                                    <div class="btn-group" role="group">
                                        <button class="btn btn-sm btn-outline-primary" title="Edit">
                                            <i class="bi bi-pencil"></i>
                                        </button>
                                        <button class="btn btn-sm btn-outline-success" title="View">
                                            <i class="bi bi-eye"></i>
                                        </button>
                                        <button class="btn btn-sm btn-outline-danger" title="Delete">
                                            <i class="bi bi-trash"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 mb-4">
                        <div class="card border-0 shadow-sm">
                            <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?ixlib=rb-4.0.3&auto=format&fit=crop&w=400&q=80" class="card-img-top" alt="Cultural Program">
                            <div class="card-body">
                                <div class="d-flex justify-content-between align-items-start mb-2">
                                    <span class="badge bg-warning">Draft</span>
                                    <span class="badge bg-danger">Cultural</span>
                                </div>
                                <h5 class="card-title">Cultural Festival</h5>
                                <p class="card-text text-muted small">Students celebrate diversity through music, dance, drama, and art in our annual cultural extravaganza.</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <small class="text-muted">Oct 30, 2023</small>
                                    <div class="btn-group" role="group">
                                        <button class="btn btn-sm btn-outline-primary" title="Edit">
                                            <i class="bi bi-pencil"></i>
                                        </button>
                                        <button class="btn btn-sm btn-outline-success" title="View">
                                            <i class="bi bi-eye"></i>
                                        </button>
                                        <button class="btn btn-sm btn-outline-danger" title="Delete">
                                            <i class="bi bi-trash"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Pagination -->
                <nav aria-label="Events pagination">
                    <ul class="pagination justify-content-center">
                        <li class="page-item disabled">
                            <a class="page-link" href="#" tabindex="-1">Previous</a>
                        </li>
                        <li class="page-item active"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item">
                            <a class="page-link" href="#">Next</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>

    <!-- Add Event Modal -->
    <div class="modal fade" id="addEventModal" tabindex="-1">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Add New Event</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="row">
                            <div class="col-md-8">
                                <div class="mb-3">
                                    <label for="eventTitle" class="form-label">Event Title *</label>
                                    <input type="text" class="form-control" id="eventTitle" required>
                                </div>
                                <div class="mb-3">
                                    <label for="eventDescription" class="form-label">Description *</label>
                                    <textarea class="form-control" id="eventDescription" rows="4" required></textarea>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="eventDate" class="form-label">Event Date *</label>
                                            <input type="date" class="form-control" id="eventDate" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="eventTime" class="form-label">Event Time</label>
                                            <input type="time" class="form-control" id="eventTime">
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label for="eventLocation" class="form-label">Location</label>
                                    <input type="text" class="form-control" id="eventLocation" placeholder="e.g., School Auditorium">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label for="eventCategory" class="form-label">Category *</label>
                                    <select class="form-select" id="eventCategory" required>
                                        <option value="">Choose...</option>
                                        <option value="academic">Academic</option>
                                        <option value="sports">Sports</option>
                                        <option value="cultural">Cultural</option>
                                        <option value="news">News</option>
                                        <option value="announcement">Announcement</option>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label for="eventStatus" class="form-label">Status</label>
                                    <select class="form-select" id="eventStatus">
                                        <option value="draft">Draft</option>
                                        <option value="published">Published</option>
                                        <option value="archived">Archived</option>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label for="eventImage" class="form-label">Event Image</label>
                                    <input type="file" class="form-control" id="eventImage" accept="image/*">
                                    <div class="form-text">Recommended: 400x300px, JPG/PNG</div>
                                </div>
                                <div class="mb-3">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="featuredEvent">
                                        <label class="form-check-label" for="featuredEvent">
                                            Featured Event
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    <button type="button" class="btn btn-outline-primary">Save as Draft</button>
                    <button type="button" class="btn btn-primary">Publish Event</button>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // Check authentication
        window.addEventListener('load', function() {
            const isLoggedIn = localStorage.getItem('adminLoggedIn');
            if (!isLoggedIn) {
                window.location.href = 'admin-login.html';
            }
        });

        // Sample event management functionality
        document.addEventListener('DOMContentLoaded', function() {
            // Search functionality
            const searchInput = document.querySelector('input[placeholder="Search events..."]');
            searchInput.addEventListener('input', function(e) {
                const searchTerm = e.target.value.toLowerCase();
                const eventCards = document.querySelectorAll('.card');
                
                eventCards.forEach(card => {
                    const title = card.querySelector('.card-title').textContent.toLowerCase();
                    const description = card.querySelector('.card-text').textContent.toLowerCase();
                    
                    if (title.includes(searchTerm) || description.includes(searchTerm)) {
                        card.closest('.col-lg-4').style.display = 'block';
                    } else {
                        card.closest('.col-lg-4').style.display = 'none';
                    }
                });
            });

            // Delete confirmation
            document.querySelectorAll('button[title="Delete"]').forEach(button => {
                button.addEventListener('click', function() {
                    if (confirm('Are you sure you want to delete this event? This action cannot be undone.')) {
                        this.closest('.col-lg-4').remove();
                        // Here you would make an API call to delete the event
                        alert('Event deleted successfully!');
                    }
                });
            });

            // Form submission
            document.querySelector('.modal-footer .btn-primary').addEventListener('click', function() {
                const title = document.getElementById('eventTitle').value;
                const description = document.getElementById('eventDescription').value;
                const date = document.getElementById('eventDate').value;
                const category = document.getElementById('eventCategory').value;

                if (title && description && date && category) {
                    alert('Event published successfully!');
                    // Here you would make an API call to save the event
                    // Reset form
                    document.querySelector('#addEventModal form').reset();
                    // Close modal
                    bootstrap.Modal.getInstance(document.getElementById('addEventModal')).hide();
                } else {
                    alert('Please fill in all required fields.');
                }
            });
        });
    </script>

    <style>
        .card {
            transition: transform 0.2s ease, box-shadow 0.2s ease;
        }

        .card:hover {
            transform: translateY(-3px);
            box-shadow: 0 4px 12px rgba(0,0,0,0.15) !important;
        }

        .btn-group .btn {
            border-radius: 0;
        }

        .btn-group .btn:first-child {
            border-top-left-radius: 0.375rem;
            border-bottom-left-radius: 0.375rem;
        }

        .btn-group .btn:last-child {
            border-top-right-radius: 0.375rem;
            border-bottom-right-radius: 0.375rem;
        }

        .modal-lg {
            max-width: 800px;
        }

        .badge {
            font-size: 0.7rem;
        }
    </style>
</body>
</html>
