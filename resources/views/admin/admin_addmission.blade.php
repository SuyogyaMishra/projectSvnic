@extends('layouts.adminApp')
@section('content')
  <div id="admissions-section" class="content-section" style="margin-top:56px;">
            <h2>Admissions Management</h2>
            <p>Manage admission applications and requirements.</p>
            <div class="d-flex justify-content-end">
                <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#admissionListModal">
                    View Accepted / Rejected Admissions
                </button>
            </div>

            @if($admissions->isEmpty())
            <div class="alert alert-info">No admission inquiries yet.</div>
            @else
            <div class="table-responsive mt-3">
                <table class="table table-striped table-bordered align-middle">
                    <thead class="table-light">
                        <tr>
                            <th>Sr.no</th>
                            <th>Full Name</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>DOB</th>
                            <th>Gender</th>
                            <th>Class Applied</th>
                            <th>Stream</th>
                            <th>Address</th>
                            <th>Status</th>
                            <th>Submitted At</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($admissions as $index => $admission)
                        <tr>
                            <td>{{ $index + 1 }}</td>
                            <td>{{ $admission->full_name }}</td>
                            <td>{{ $admission->email }}</td>
                            <td>{{ $admission->phone }}</td>
                            <td>{{ $admission->dob }}</td>
                            <td>{{ $admission->gender }}</td>
                            <td>{{ $admission->class_applied }}</td>
                            <td>{{ $admission->stream ?? '-' }}</td>
                            <td>{{ $admission->address }}</td>
                            <td>
                                @if ($admission->status === 1)
                                <span class="badge bg-primary">New</span>
                                @endif
                                @if ($admission->status === 2)
                                <span class="badge bg-success">In Review</span>
                                @endif
                                @if ($admission->status === 3)
                                <span class="badge bg-success">Accepted</span>
                                @endif
                                @if ($admission->status === 4)
                                <span class="badge bg-danger">Rejected</span>
                                @endif
                            </td>
                            <td>{{ $admission->created_at->format('d M Y, h:i A') }}</td>
                            <td>
                                <button
                                    class="btn btn-sm btn-outline-primary open-admission-modal"
                                    data-id="{{ $admission->id }}"
                                    data-bs-toggle="modal"
                                    data-bs-target="#admission">
                                    View Admission
                                </button>
                            </td>

                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            @endif
        </div>

        <div class="modal fade" id="admission" tabindex="-1" aria-labelledby="admissionLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content" id="admissionModalContent">
            <!-- AJAX content will be injected here -->
            <div class="text-center p-3">Loading...</div>

        </div>
    </div>
</div>

<div class="modal fade" id="admissionListModal" tabindex="-1" aria-labelledby="admissionListModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="admissionListModalLabel">Admission Inquiries</h5>
                <button type="button" class="btn-close text-danger" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body" id="admissionListContent">
                <!-- Admission list will be loaded here -->
                <div class="text-center p-3">Loading...</div>
            </div>
        </div>
    </div>
</div>

@endsection
@section('script')
<script>
    $(document).on('click', '.open-admission-modal', function() {
        var admissionId = $(this).data('id');
        $.ajax({
            url: '{{ route("admissions.view", ":id") }}'.replace(':id', admissionId),
            type: 'GET',
            success: function(response) {
                $('#admissionModalContent').html(response);
                $('#admission').modal('show');
            },
            error: function() {
                $('#ajaxError').text('Failed to load admission details.').fadeIn();
                setTimeout(() => $('#ajaxError').fadeOut(), 4000);
            }
        });
    });
</script>
<script>
    // When modal is shown, load data via AJAX
    $('#admissionListModal').on('show.bs.modal', function() {
        $('#admissionListContent').html('<div class="text-center p-3">Loading...</div>');

        $.ajax({
            url: '{{  route("addmission.final")}}', // <-- Your backend PHP/route
            method: 'GET',
            success: function(response) {
                $('#admissionListContent').html(response);
            },
            error: function() {
                $('#admissionListContent').html('<div class="alert alert-danger">Failed to load data.</div>');
            }
        });
    });


    $(document).on('click', '.editStudentBtn', function() {
        let studentId = $(this).data('id');

        // AJAX to get student details
        $.get('/students/' + studentId + '/edit', function(data) {
            $('#student_id').val(data.id);
            $('#name').val(data.name);
            $('#email').val(data.email);
            $('#phone').val(data.phone);
            $('#class').val(data.class);
            $('#studentModal').modal('show');
        });
    });

    // Reset form on modal close
    $('#studentModal').on('hidden.bs.modal', function() {
        $('#studentForm')[0].reset();
        $('#student_id').val('');
    });
</script>
@endsection