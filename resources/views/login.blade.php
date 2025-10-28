<div class="modal-body">
  <form id="loginForm" method="POST" action="{{ route('auth.login') }}">
    @csrf

    <div class="mb-3">
      <label for="email" class="form-label">Email</label>
      <input type="email" name="email" id="email" class="form-control">
      <p id="emailError" class="text-danger small mt-1"></p>
    </div>

    <div class="mb-3">
      <label for="password" class="form-label">Password</label>
      <input type="password" name="password" id="password" class="form-control">
      <p id="passwordError" class="text-danger small mt-1"></p>
    </div>

    <button type="submit" class="btn btn-primary w-100">Login</button>
  </form>
</div>

<script>
  document.addEventListener('DOMContentLoaded', function() {
    const loginForm = document.getElementById('loginForm');
    const emailField = document.getElementById('email');
    const passwordField = document.getElementById('password');
    const emailError = document.getElementById('emailError');
    const passwordError = document.getElementById('passwordError');

    loginForm.addEventListener('submit', function(e) {
      // clear errors
      emailError.textContent = '';
      passwordError.textContent = '';

      const email = emailField.value.trim();
      const password = passwordField.value.trim();


      let hasError = false;
    
      if (password.length < 6) {
        passwordError.textContent = 'Password must be at least 6 characters.';
        if (!hasError) passwordField.focus();
        hasError = true;
      }

      // Only prevent default if there’s an error
      if (hasError) {
        e.preventDefault();
      }
    });
  });
</script>
