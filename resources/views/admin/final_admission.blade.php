<!-- Admission List Modal -->
 <!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
 </head>
 <body>
    
<div class="modal-body">
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
            
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    @endif
</div>
<div class="modal-footer">
    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

 </body>
 </html>


