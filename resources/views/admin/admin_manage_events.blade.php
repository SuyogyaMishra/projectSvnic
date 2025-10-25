@extends('layouts.adminApp')
@section('content')
<div id="events-section" class="content-section" style="margin-top: 56px;">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Events & News Management</h1>
        <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addEventModal">Add New Event</button>
    </div>

    <div class="table-responsive">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Title</th>
                    <th>Date</th>
                    <th>Status</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($events as $event)
                <tr>
                    <td>{{ $event->title }}</td>
                    <td>{{ $event->event_date }}</td>
                    <td>
                        @if(\Carbon\Carbon::parse($event->event_date)->isFuture())
                        <span class="badge bg-success">Upcoming</span>
                        @else
                        <span class="badge bg-secondary">Passed</span>
                        @endif
                    </td>
                    <td>
                        <button type="button"
                            class="btn btn-sm btn-outline-primary open-edit-modal"
                            data-id="{{ $event->id }}">
                            Edit
                        </button>
                        <form action="{{ route('events.destroy', $event->id) }}" method="POST" style="display:inline-block;" onsubmit="return confirm('Are you sure?');">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-outline-danger">Delete</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

<div class="modal fade" id="editModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content" id="editModalContent">
            <!-- Content will be loaded here via AJAX -->
        </div>
    </div>
</div>

<div class="modal fade" id="addEventModal" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Add New Event</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">
                <form action="{{ route('events.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="eventTitle" class="form-label">Event Title</label>
                        <input type="text" class="form-control" id="eventTitle" name="event_title" required>
                    </div>
                    <div class="mb-3">
                        <label for="eventDate" class="form-label">Event Date</label>
                        <input type="date" class="form-control" id="eventDate" name="event_date" required>
                    </div>
                    <div class="mb-3">
                        <label for="eventDescription" class="form-label">Description</label>
                        <textarea class="form-control" id="eventDescription" name="event_description" rows="3"></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="eventImage" class="form-label">Event Image</label>
                        <input type="file" class="form-control" id="eventImage" name="event_image">
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                <button type="submit" class="btn btn-primary">Save Event</button>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection
@section('script')
<script>
    // Notification area for AJAX errors
    $('<div id="ajaxError" class="alert alert-danger" style="display:none;position:fixed;top:70px;right:30px;z-index:9999;"></div>').appendTo('body');

    $(document).on('click', '.open-edit-modal', function() {
        var modelId = $(this).data('id');
        $.ajax({
            url: '{{ route("model.edit", ":id") }}'.replace(':id', modelId),
            type: 'GET',
            success: function(response) {
                $('#editModalContent').html(response);
                $('#editModal').modal('show');
            },
            error: function(xhr) {
                $('#ajaxError').text('Failed to load the form. Please try again.').fadeIn();
                setTimeout(function() {
                    $('#ajaxError').fadeOut();
                }, 4000);
            }
        });
    });
</script>
@endsection