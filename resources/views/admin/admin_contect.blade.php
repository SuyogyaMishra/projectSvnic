@extends('layouts.adminApp')
@section('content')
   <div id="contact-section" class="content-section" style="margin-top:56px;">
            <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                <h1 class="h2">Contact Messages</h1>
                <div class="btn-toolbar">
                    <button class="btn btn-outline-secondary btn-sm me-2">Mark All Read</button>
                    <button class="btn btn-outline-danger btn-sm">Delete Selected</button>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th><input type="checkbox" class="form-check-input"></th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Subject</th>
                                    <th>Date</th>
                                    <th>Status</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($contacts as $contact)
                                <tr>
                                    <td><input type="checkbox" class="form-check-input"></td>
                                    <td>{{ $contact->name }}</td>
                                    <td>{{ $contact->email }}</td>
                                    <td> {{ $contact->subject }} </td>
                                    <td>{{ $contact->	created_at }}</td>
                                    <td>
                                        @if ($contact->status === 1)
                                        <span class="badge bg-primary">New</span>
                                    </td>
                                    @endif
                                    @if ($contact->status === 2)
                                    <span class="badge bg-success">Read</span></td>
                                    @endif
                                    @if ($contact->status === 3)
                                    <span class="badge bg-success">Replied</span></td>
                                    @endif

                                    <td>
                                        <button
                                            class="btn btn-sm btn-outline-primary open-contact-modal"
                                            data-id="{{ $contact->id }}"
                                            data-bs-toggle="modal"
                                            data-bs-target="#editModal">
                                            View
                                        </button>

                                        <button class="btn btn-sm btn-outline-success">Reply</button>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg"> {{-- use modal-lg or modal-sm as needed --}}
        <div class="modal-content" id="editModalContent">
            <!-- AJAX content will be injected here -->
        </div>
    </div>
</div>

         
@endsection
@section('script')
<script>
    // One-time error container
    if (!document.getElementById('ajaxError')) {
        $('<div id="ajaxError" class="alert alert-danger" style="display:none;position:fixed;top:70px;right:30px;z-index:9999;"></div>').appendTo('body');
    }

    $(document).on('click', '.open-contact-modal', function() {
        var modelId = $(this).data('id');

        $.ajax({
            url: '{{ route("contacts.view", ":id") }}'.replace(':id', modelId),
            type: 'GET',
            success: function(response) {
                $('#editModalContent').html(response);
                $('#editModal').modal('show');
            },
            error: function() {
                $('#ajaxError').text('Failed to load contact details.').fadeIn();
                setTimeout(() => $('#ajaxError').fadeOut(), 4000);
            }
        });
    });
</script>
@endsection