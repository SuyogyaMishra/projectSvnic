<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Details</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.css" rel="stylesheet">
    <style>
        body {
            background: #f8fafc;
        }
        .contact-card {
            max-width: 500px;
            margin: 40px auto;
            background: #fff;
            border-radius: 12px;
            box-shadow: 0 4px 24px rgba(0,0,0,0.08);
            padding: 32px 24px 16px 24px;
        }
        .contact-card p {
            font-size: 1.08rem;
            margin-bottom: 18px;
        }
        .contact-card strong {
            color: #0d6efd;
        }
        .modal-footer {
            border-top: none;
            padding-top: 0;
            justify-content: flex-end;
        }
    </style>
</head>
<body>
    <div class="contact-card">
        <div class="mb-4 text-center">
            <i class="bi bi-person-circle" style="font-size: 2.5rem; color: #0d6efd;"></i>
            <h3 class="mt-2 mb-0">Contact Details</h3>
        </div>
        <p><strong>Name:</strong> <span>{{ $contacts->name }}</span></p>
        <p><strong>Email:</strong> <span>{{ $contacts->email }}</span></p>
        <p><strong>Subject:</strong> <span>{{ $contacts->subject }}</span></p>
        <p><strong>Message:</strong> <span>{{ $contacts->message }}</span></p>
        <p><strong>Date:</strong> <span>{{ $contacts->created_at->format('Y-m-d') }}</span></p>
        <div class="modal-footer">
            <button class="btn btn-secondary" data-bs-dismiss="modal">
                <i class="bi bi-x-circle"></i> Close
            </button>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>