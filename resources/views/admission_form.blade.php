<!-- Modal Header -->
<head>
  <meta charset="UTF-8">
  <title>School Admission Form</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

  <style>
    body {
      background: url('https://images.unsplash.com/photo-1603618091660-84e0b22b97e0?auto=format&fit=crop&w=1350&q=80') no-repeat center center fixed;
      background-size: cover;
    }

    .card {
      background-color: rgba(255, 255, 255, 0.9); /* semi-transparent */
      border-radius: 15px;
    }

    .card-header {
      background: linear-gradient(to right, #4caf50, #81c784);
      border-top-left-radius: 15px;
      border-top-right-radius: 15px;
    }

    .form-control:focus, .form-select:focus {
      border-color: #4caf50;
      box-shadow: 0 0 0 0.2rem rgba(76, 175, 80, 0.25);
    }

    button.btn-success {
      background: linear-gradient(to right, #43a047, #66bb6a);
      border: none;
    }

    h4 {
      font-weight: bold;
    }
  </style>
</head>
<body>
  

<div class="modal-header">
  <div class="text-black text-center py-3">
        <h5>🌟 SVNIC - Where Learning Begins and Dreams Take Flight</h5>
      </div>
  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
</div>

<!-- Modal Body -->
<div class="modal-body">
  <div class="card-body px-4 py-3">
        <form id="admissionForm" method="post" action="{{ route('admissions') }}" novalidate>
          @csrf

          <!-- Student Name -->
          <div class="mb-3">
            <label for="studentName" class="form-label">Full Name</label>
            <input type="text" name="full_name" class="form-control" id="studentName" placeholder="Enter full name" required autocomplete="name">
          </div>

          <!-- Email -->
          <div class="mb-3">
            <label for="email" class="form-label">Email ID</label>
            <input type="email" name="email" class="form-control" id="email" placeholder="example@example.com" required autocomplete="email">
          </div>

          <!-- Phone -->
          <div class="mb-3">
            <label for="phone" class="form-label">Mobile Number</label>
            <input type="tel" name="phone" class="form-control" id="phone" placeholder="10-digit number" pattern="[0-9]{10}" required title="Enter a 10-digit mobile number" autocomplete="tel">
          </div>

          <!-- Date of Birth -->
          <div class="mb-3">
            <label for="dob" class="form-label">Date of Birth</label>
            <input type="date" name="dob" class="form-control" id="dob" required min="2005-01-01" max="2021-12-31">
          </div>

          <!-- Gender -->
          <div class="mb-3">
            <label class="form-label d-block">Gender</label>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="gender" id="male" value="Male" required>
              <label class="form-check-label" for="male">Male</label>
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="gender" id="female" value="Female">
              <label class="form-check-label" for="female">Female</label>
            </div>
          </div>

          <!-- Class -->
          <div class="mb-3">
            <label for="classSelect" class="form-label">Applying for Class</label>
            <select class="form-select" id="classSelect" name="class_applied" required>
              <option selected disabled value="">Select Class</option>
              <option value="1-8">1-8</option>
              <option value="9-10">9-10</option>
              <option value="11-12">11-12</option>
            </select>
          </div>

          <!-- Stream -->
          <div class="mb-3" id="streamGroup" style="display: none;">
            <label for="stream" class="form-label">Preferred Stream</label>
            <select class="form-select" id="stream" name="stream" required>
              <option selected disabled value="">Select Stream</option>
            </select>
          </div>

          <!-- Address -->
          <div class="mb-3">
            <label for="address" class="form-label">Address</label>
            <textarea class="form-control" id="address" name="address" rows="2" placeholder="Enter address" required autocomplete="street-address"></textarea>
          </div>

          <!-- Submit Button -->
          <div class="d-grid">
            <button type="submit" class="btn btn-success">Submit Admission Form</button>
          </div>
        </form>
      </div>
</div>
</body>

<script>
    const classSelect = document.getElementById("classSelect");
    const genderRadios = document.querySelectorAll("input[name='gender']");
    const streamGroup = document.getElementById("streamGroup");
    const streamSelect = document.getElementById("stream");

    function updateStreamField() {
      const selectedClass = classSelect.value;
      const selectedGender = document.querySelector("input[name='gender']:checked")?.value;

      streamSelect.innerHTML = '<option selected disabled value="">Select Stream</option>';

      if (selectedClass === "1-8") {
        streamGroup.style.display = "none";
        streamSelect.required = false;
      } else if (selectedClass === "9-10") {
        streamGroup.style.display = "block";
        streamSelect.required = true;

        if (selectedGender === "Male") {
          streamSelect.innerHTML += `<option selected>Math</option>`;
        } else if (selectedGender === "Female") {
          streamSelect.innerHTML += `
            <option>Math</option>
            <option>Home Science</option>
          `;
        }
      } else if (selectedClass === "11-12") {
        streamGroup.style.display = "block";
        streamSelect.required = true;
        streamSelect.innerHTML += `
          <option>Science</option>
          <option>Commerce</option>
          <option>Arts</option>
        `;
      } else {
        streamGroup.style.display = "none";
        streamSelect.required = false;
      }
    }

    classSelect.addEventListener("change", updateStreamField);
    genderRadios.forEach(radio => radio.addEventListener("change", updateStreamField));

    document.getElementById("admissionForm").addEventListener("submit", function(e) {
      if (!this.checkValidity()) {
        e.preventDefault();
        e.stopPropagation();
      }
      this.classList.add('was-validated');
    });
  </script>
