<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SchoolInfo;
use App\Models\Event;
use App\Models\Contact;
class SchoolInfoController extends Controller
{
    /**
     * Show the form page.
     */
   public function index()
{
    // Example: Homepage stats (your web_content table)
    $stats = SchoolInfo::first();

    // Example: Events (your events table with file relation)
    $events = Event::with('file')->latest()->get();

    // Pass both to the view
    return view('home', compact('stats', 'events'));
}



    public function InsertData(Request $request)
    {
        $request->validate([
            'students' => 'required|integer|min:0',
            'teachers' => 'required|integer|min:0',
        ]);

        SchoolInfo::latest('id')->first()->update([
            'Students' => $request->students,
            'Teachers' => $request->teachers,
        ]);

        return back()->with('success', "Saved: {$request->students} students and {$request->teachers} teachers.");
    }
     public function contactDetails(Request $request)
    {      
        // ✅ Validation
        $request->validate([
            'name'    => 'required|string|max:255',
            'email'   => 'required|email|max:255',
            'subject' => 'required|string|max:255',
            'message' => 'required|string',
        ]);

        // ✅ Save data
        Contact::create([
            'name'    => $request->input('name'),
            'email'   => $request->input('email'),
            'subject' => $request->input('subject'),
            'message' => $request->input('message'),
        ]);

        return redirect()->back()->with('success', 'Your message has been sent successfully!');
    }
}
