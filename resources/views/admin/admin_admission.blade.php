
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admission Modal</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    
                {{-- Modal Body --}}
                 <div class="modal-header">
                    <h5 class="modal-title" id="updateModalLabel">Update Status</h5>
                    <button type="button" class="btn-close text-danger" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form method="post" action="{{ route('admin.updateAdmission') }}">
                        @csrf
                        <input type="hidden" name="admission_id" value="{{ $admission->id }}">
                        <div class="mb-3">
                            <label for="studentName" class="form-label">Student Name</label>
                            <input type="text" class="form-control" id="studentName" name="studentName" value="{{ $admission->full_name }}"  required>
                        </div>
                        <div class="mb-3">
                            <label for="status" class="form-label">Status</label>
                            <select class="form-select" id="status" name="status" required>
                                <option value="1" {{ $admission->status === 1 ? 'selected' : '' }}>New</option>
                                <option value="2" {{ $admission->status === 2 ? 'selected' : '' }}>In Review</option>
                                <option value="3" {{ $admission->status === 3 ? 'selected' : '' }}>Accepted</option>
                                <option value="4" {{ $admission->status === 4 ? 'selected' : '' }}>Rejected</option>
                            </select>
                        </div>
                        {{-- Add more fields as needed --}}
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Submit Application</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS Bundle (with Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        $(document).ready(function() {
            // Function to load admission details into the modal
            $('#studentName').prop('disabled', true);
        });

            // Event listener for buttons that open the admission modal
           
        
    </script>
</body>

</html>

