<?php
// app/Http/Controllers/EventController.php
namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\File;
use Illuminate\Http\Request;

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

        // Save file in files table
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
}
