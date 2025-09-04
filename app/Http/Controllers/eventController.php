<?php
// app/Http/Controllers/EventController.php
namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class EventController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'event_title' => 'required|string|max:255',
            'event_date' => 'required|date',
            'event_description' => 'nullable|string',
            'event_image' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        $file_id = null;
        if ($request->hasFile('event_image')) {
            $file = $request->file('event_image');
            $path = $file->store('uploads/events', 'public');

            $savedFile = File::create([
                'file_name' => $file->getClientOriginalName(),
                'file_path' => $path,
            ]);

            $file_id = $savedFile->id;
        }

        // Save event
        Event::create([
            'title' => $request->event_title,
            'event_date' => $request->event_date,
            'description' => $request->event_description,
            'file_id' => $file_id,
        ]);

        return redirect()->back()->with('success', 'Event created successfully!');
    }
    public function update(Request $request, $id)
    {
        $request->validate([
            'event_title' => 'required|string|max:255',
            'event_date' => 'required|date',
            'event_description' => 'nullable|string',
            'event_image' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        $event = Event::findOrFail($id);

        // If a new image is uploaded
        if ($request->hasFile('event_image')) {
            $file = $request->file('event_image');
            $path = $file->store('uploads/events', 'public');

            $savedFile = File::create([
                'file_name' => $file->getClientOriginalName(),
                'file_path' => $path,
            ]);

            // Optionally: delete or archive old file if needed
            $event->file_id = $savedFile->id;
        }

        // Update event fields
        $event->title = $request->event_title;
        $event->event_date = $request->event_date;
        $event->description = $request->event_description;
        $event->save();

        return redirect()->back()->with('success', 'Event updated successfully!');
    }
    public function destroy($id)
    {
        $event = Event::findOrFail($id);

        $file = $event->file; // assuming hasOne or belongsTo('File')

        $event->delete(); // Delete event first (removes FK constraint)

        if ($file) {
            Storage::disk('public')->delete($file->file_path);
            $file->delete();
        }

        return redirect()->back()->with('success', 'Event and file deleted successfully!');
    }
}
