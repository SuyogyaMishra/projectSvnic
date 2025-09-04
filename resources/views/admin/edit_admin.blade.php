 <!DOCTYPE html>
 <html lang="en">

 <head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Document</title>
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
     <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.css" rel="stylesheet">
 </head>

 <body>
     <div class="modal-body">
         <form action="{{ route('events.update', $event->id) }}" method="POST" enctype="multipart/form-data">
             @csrf
             @method('PUT')
             <div class="mb-3">
                 <label for="eventTitle" class="form-label">Event Title</label>
                 <input type="text" value="{{ $event->title }}" class="form-control" id="eventTitle" name="event_title" required>
             </div>
             <div class="mb-3">
                 <label for="eventDate" class="form-label">Event Date</label>
                 <input type="date" value="{{ $event->event_date }}" class="form-control" id="eventDate" name="event_date" required>
             </div>
             <div class="mb-3">
                 <label for="eventDescription" class="form-label">Description</label>
                 <textarea class="form-control" id="eventDescription" name="event_description" rows="3">{{ $event->description }}</textarea>
             </div>
             <input type="file" class="form-control" id="eventImage" name="event_image">
             <div class="modal-footer">
                 <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                 <button type="submit" class="btn btn-primary">Update Event</button>
             </div>
         </form>
     </div>
 </body>

 </html>