<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SchoolInfo;
use App\Models\Event;
use App\Models\Contact;
use App\Models\WebContent;
use App\Models\Admission;
use Illuminate\Support\Facades\Validator;
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
            'Teachers' => $request->teachers,
        ]);
        WebContent::latest('id')->first()->update([
            'Student' => $request->students,
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
    public function edit($id)
    {
        $event = Event::with('file')->findOrFail($id);
        return view('admin.edit_admin', compact('event'));
    }
    public function showMessage($id)
    {   Contact::where('id', $id)->update(['status' => 2]); // Mark as read
        $contacts = Contact::findOrFail($id);
        return view('admin.show_contact', compact('contacts'));
    }
    public function admissionRecord(Request $request)
    {   
        $validator = Validator::make($request->all(), [
            'full_name'     => 'required|string|max:255',
            'email'         => 'required|email|unique:admissions_table,email',
            'phone'         => 'required|digits:10',
            'dob'           => 'required|date|before:today',
            'gender'        => 'required|in:Male,Female',
            'class_applied' => 'required|string',
            'stream'        => 'nullable|string',
            'address'       => 'required|string|max:1000',
        ]);

       if ($validator->fails()) {
    return redirect()->back()
        ->withErrors($validator)   // ✅ best practice
        ->withInput();
}

        $validated = $validator->validated();

        

        $admission = Admission::create($validated);

        return redirect()->back()->with(['msg' => 'Admission Request Submitted Successfully!']);
    }

}
