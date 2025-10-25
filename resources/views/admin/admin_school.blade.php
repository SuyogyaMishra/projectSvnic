@extends('layouts.adminApp')
@section('content')
<div id="gallery-section" class="content-section" style="margin-top:56px;">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h3>Student Management</h3>
        <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#studentModal">
            Add New Student
        </button>
    </div>
    <!-- Students Table -->
    <div class="table-responsive">
        <table class="table table-striped table-bordered align-middle">
            <thead class="table-light">
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Father's Name</th>
                    <th>Class</th>
                    <th>Status</th>
                    <th>Actions</th>
                </tr>
            </thead>


            <tbody>
                @foreach ($students as $student)
                <tr>
                    <td>{{ $loop->iteration + ($students->currentPage() - 1) * $students->perPage() }}</td>
                    <td>{{ $student->first_name }} {{ $student->last_name }}</td>
                    <td>{{ $student->email }}</td>
                    <td>{{ $student->phone }}</td>
                    <td>{{ $student->father_name }}</td>
                    <td>{{ $student->class }}</td>
                    <td>
                        <span class="badge {{ $student->status === 'Active' ? 'bg-success' : 'bg-danger' }}">
                            {{ $student->status }}
                        </span>
                    </td>
                    <td>
                        <form action="{{ route('students.changeStatus', $student->id) }}" method="POST">
                            @csrf
                            <button type="submit" class="btn btn-sm {{ $student->status === 'Active' ? 'btn-danger' : 'btn-success' }}">
                                {{ $student->status === 'Active' ? 'Deactivate' : 'Activate' }}
                            </button>
                        </form>
                        <button type="button" class="btn btn-primary mb-3 mt-3" data-bs-toggle="modal" data-bs-target="#marksModal" data-student-id="{{ $student->id }}"
                            data-student-name="{{ $student->first_name }} {{ $student->last_name }}">
                            Add Marks
                        </button>
                    </td>
                </tr>
                @endforeach
            </tbody>



        </table>
        {{ $students->links('pagination::bootstrap-5') }}

    </div>
</div>

<div class="modal fade" id="studentModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <form id="studentForm" method="POST" action="">
                @csrf
                <div class="modal-header">
                    <h5 class="modal-title" id="studentModalLabel">Add / Edit Student</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <input type="hidden" name="student_id" id="student_id">
                    <div class="mb-3">
                        <label for="name" class="form-label">Student Name</label>
                        <input type="text" class="form-control" id="name" name="name" required>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" name="email" required>
                    </div>
                    <div class="mb-3">
                        <label for="phone" class="form-label">Phone</label>
                        <input type="text" class="form-control" id="phone" name="phone">
                    </div>
                    <div class="mb-3">
                        <label for="class" class="form-label">Class</label>
                        <input type="text" class="form-control" id="class" name="class">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save Student</button>
                </div>
            </form>
        </div>
    </div>
</div>
<div class="modal fade" id="marksModal" tabindex="-1" aria-labelledby="marksModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <form action="{{ route('admin.uploadmark') }}" method="POST">
                @csrf
                <div class="modal-header">
                    <h5 class="modal-title" id="marksModalLabel">Enter Marks</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">

                    <!-- Student Selection -->
                    <div class="mb-3">
                        <label for="student_id">Select Student</label>
                        <select name="student_id" class="form-control" id="modalStudentSelect">
                            <option value="">-- Choose Student --</option>
                            <option value="{{ $student->id }}">{{ $student->name }} (Roll: {{ $student->roll }})</option>
                        </select>
                        @error('student_id')<p class="text-danger">{{ $message }}</p>@enderror
                    </div>

                    <!-- Dynamic Marks Table -->
                    <table class="table" id="marksTable">
                        <thead>
                            <tr>
                                <th>Subject</th>
                                <th>Max Marks</th>
                                <th>Score</th>
                                <th>
                                    <button type="button" class="btn btn-sm btn-primary" id="addRow">Add</button>
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><input type="text" name="subjects[]" class="form-control" required></td>
                                <td><input type="number" name="max[]" class="form-control" required></td>
                                <td><input type="number" name="score[]" class="form-control" required></td>
                                <td><button type="button" class="btn btn-sm btn-danger removeRow">Remove</button></td>
                            </tr>
                        </tbody>
                    </table>

                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-success">Save Marks</button>
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </form>
        </div>
    </div>
</div>


@endsection
@section('script')
<script>
    var marksModal = document.getElementById('marksModal');

    marksModal.addEventListener('show.bs.modal', function(event) {
        var button = event.relatedTarget; // Button that triggered the modal
        var studentId = button.getAttribute('data-student-id');
        var studentName = button.getAttribute('data-student-name');

        // Get the select element
        var select = document.getElementById('modalStudentSelect');

        // Clear existing options except placeholder
        select.innerHTML = '<option value="">-- Choose Student --</option>';

        // Create new option for this student and select it
        var option = document.createElement('option');
        option.value = studentId;
        option.text = `${studentName}`;
        option.selected = true; // pre-select
        select.appendChild(option);
    });

    document.getElementById('addRow').addEventListener('click', function() {
        let table = document.getElementById('marksTable').getElementsByTagName('tbody')[0];
        let row = table.rows[0].cloneNode(true);
        row.querySelectorAll('input').forEach(input => input.value = '');
        table.appendChild(row);
    });

    // Remove row
    document.addEventListener('click', function(e) {
        if (e.target && e.target.classList.contains('removeRow')) {
            let row = e.target.closest('tr');
            let tbody = row.parentNode;
            if (tbody.rows.length > 1) row.remove();
        }
    });
</script>
@endsection