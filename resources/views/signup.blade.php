<div class="modal-header">
  <h5 class="modal-title">Sign Up</h5>
  <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
</div>
<div class="modal-body">
  <form method="POST" action="{{ route('auth.register') }}" id="registrationForm">
    @csrf
    <div class="mb-3">
      <label for="name" class="form-label">Full Name</label>
      <input type="text" name="name" id="username" class="form-control" required>
    </div>
    <div class="mb-3">
      <label for="email" class="form-label">Email</label>
      <input type="email" name="email" id="useremail" class="form-control" required>
    </div>
    <div class="mb-3">
      <label for="fathername" class="form-label">Father's Name</label>
      <input type="text" name="fathersname" id="fathername" class="form-control" required>
    </div>
    <div class="mb-3">
      <label for="dob" class="form-label">Password</label>
      <input type="date" name="dob" id="dob" class="form-control" required>
    </div>
    <div class="mb-3">
      <label for="password" class="form-label">Password</label>
      <input type="password" name="password" id="password" class="form-control" required>
    </div>
    <div class="mb-3">
      <label for="password_confirmation" class="form-label">Confirm Password</label>
      <input type="password" name="password_confirmation" id="password_confirmation" class="form-control" required>
    </div>
    <input type="hidden" name="role" value="1">
    <input type="hidden" name="status" value="1">
    <button type="submit" class="btn btn-success w-100">Sign Up</button>
  </form>
</div>
<script>
  console.log("Signup modal loaded");
</script>