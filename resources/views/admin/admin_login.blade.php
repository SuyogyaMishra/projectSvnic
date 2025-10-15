<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login - Swami Vivekanand Inter College</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.css" rel="stylesheet">
</head>
<body class="bg-light">
    <div class="container">
        <div class="row justify-content-center align-items-center min-vh-100">
            <div class="col-md-6 col-lg-4">
                <div class="card shadow border-0">
                    <div class="card-body p-5">
                        <div class="text-center mb-4">
                            <i class="bi bi-mortarboard-fill text-primary display-4 mb-3"></i>
                            <h3 class="fw-bold text-primary">Swami Vivekanand Inter College</h3>
                            <p class="text-muted">Admin Panel Login</p>
                        </div>
                        
                        <form id="adminLoginForm">
                            <div class="mb-3">
                                <label for="username" class="form-label fw-semibold">Username</label>
                                <div class="input-group">
                                    <span class="input-group-text bg-light border-end-0">
                                        <i class="bi bi-person-fill text-muted"></i>
                                    </span>
                                    <input type="text" class="form-control border-start-0 ps-0" id="username" required>
                                </div>
                            </div>
                            
                            <div class="mb-3">
                                <label for="password" class="form-label fw-semibold">Password</label>
                                <div class="input-group">
                                    <span class="input-group-text bg-light border-end-0">
                                        <i class="bi bi-lock-fill text-muted"></i>
                                    </span>
                                    <input type="password" class="form-control border-start-0 ps-0" id="password" required>
                                    <button class="btn btn-outline-secondary" type="button" id="togglePassword">
                                        <i class="bi bi-eye-fill"></i>
                                    </button>
                                </div>
                            </div>
                            
                            <div class="mb-3 form-check">
                                <input type="checkbox" class="form-check-input" id="rememberMe">
                                <label class="form-check-label" for="rememberMe">
                                    Remember me
                                </label>
                            </div>
                            
                            <button type="submit" class="btn btn-primary w-100 fw-semibold py-2 mb-3">
                                <i class="bi bi-box-arrow-in-right me-2"></i>
                                Login to Admin Panel
                            </button>
                        </form>
                        
                        <div class="text-center">
                            <a href="#" class="text-decoration-none small text-muted">Forgot Password?</a>
                        </div>
                        
                        <hr class="my-4">
                        
                        <div class="text-center">
                            <a href="/" class="btn btn-outline-secondary btn-sm">
                                <i class="bi bi-arrow-left me-2"></i>
                                Back to Website
                            </a>
                        </div>
                    </div>
                </div>
                
                <!-- Demo Credentials Card -->
                <div class="card mt-3 border-warning">
                    <div class="card-body p-3">
                        <h6 class="card-title text-warning fw-bold mb-2">
                            <i class="bi bi-info-circle-fill me-2"></i>
                            Demo Credentials
                        </h6>
                        <p class="card-text small mb-2"><strong>Username:</strong> admin</p>
                        <p class="card-text small mb-0"><strong>Password:</strong> admin123</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // Toggle password visibility
        document.getElementById('togglePassword').addEventListener('click', function() {
            const passwordInput = document.getElementById('password');
            const icon = this.querySelector('i');
            
            if (passwordInput.type === 'password') {
                passwordInput.type = 'text';
                icon.className = 'bi bi-eye-slash-fill';
            } else {
                passwordInput.type = 'password';
                icon.className = 'bi bi-eye-fill';
            }
        });

        // Handle form submission
        document.getElementById('adminLoginForm').addEventListener('submit', function(e) {
            e.preventDefault();
            
            const username = document.getElementById('username').value;
            const password = document.getElementById('password').value;
            
            // Simple demo authentication
            if (username === 'admin' && password === 'admin123') {
                // Store login status
                localStorage.setItem('adminLoggedIn', 'true');
                localStorage.setItem('adminUsername', username);
                
                // Show success message
                const alert = document.createElement('div');
                alert.className = 'alert alert-success mt-3';
                alert.innerHTML = '<i class="bi bi-check-circle-fill me-2"></i>Login successful! Redirecting...';
                document.querySelector('.card-body').appendChild(alert);
                
                // Redirect to admin dashboard
                setTimeout(() => {
                    window.location.href = 'admin_dashboard';
                }, 1500);
            } else {
                // Show error message
                const existingAlert = document.querySelector('.alert');
                if (existingAlert) {
                    existingAlert.remove();
                }
                
                const alert = document.createElement('div');
                alert.className = 'alert alert-danger mt-3';
                alert.innerHTML = '<i class="bi bi-exclamation-triangle-fill me-2"></i>Invalid username or password!';
                document.querySelector('.card-body').appendChild(alert);
                
                // Clear form
                document.getElementById('username').value = '';
                document.getElementById('password').value = '';
            }
        });

        // Auto-fill demo credentials on page load
        window.addEventListener('load', function() {
            document.getElementById('username').value = 'admin';
            document.getElementById('password').value = 'admin123';
        });
    </script>
    
    <style>
        body {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            min-height: 100vh;
        }
        
        .card {
            border-radius: 15px;
            backdrop-filter: blur(10px);
        }
        
        .input-group-text {
            border-color: #dee2e6;
        }
        
        .form-control:focus {
            border-color: #0d6efd;
            box-shadow: 0 0 0 0.25rem rgba(13, 110, 253, 0.25);
        }
        
        .btn-primary {
            background: linear-gradient(135deg, #0d6efd 0%, #0a58ca 100%);
            border: none;
        }
        
        .btn-primary:hover {
            background: linear-gradient(135deg, #0a58ca 0%, #084298 100%);
            transform: translateY(-1px);
        }
    </style>
</body>
</html>
