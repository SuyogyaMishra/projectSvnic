<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SchoolInfo;
use App\Models\WebContent;
use App\Models\Contact;
use App\Models\Event;
use App\Models\Admission;
use App\Models\Student;
use App\Models\Mark;

use Illuminate\Support\Facades\Storage;
use Exception;
use Illuminate\Support\Facades\Log;
class AdmindasboardController extends Controller
{
    /**
     * Show admin dashboard and update counts automatically.
     */
    public function index()
    {

        // Always update the first record, or create if none exists
        $stat = SchoolInfo::first();
        $contacts = Contact::latest()->paginate(10);
        $events = Event::with('file')->get();
        $content = WebContent::first();
        $admissions = Admission::whereIn('status', [1, 2])->get();

        return view('admin.admin_dashboard', compact('stat', 'contacts', 'events', 'content', 'admissions'));
    }

    public function events()
    {
        $events = Event::with('file')->get();
        return view('admin.admin_manage_events', compact('events'));
    }
    public function admission()
    {
        $admissions = Admission::whereIn('status', [1, 2])->get();
        return view('admin.admin_addmission', compact('admissions'));
    }
    public function contact()
    {
        $contacts = Contact::latest()->paginate(10);
        return view('admin.admin_contect', compact('contacts'));
    }
    public function school()
    {
        $students = Student::select(
            'id',
            'first_name',
            'last_name',
            'email',
            'class',
            'phone',
            'father_name',
            'status'
        )
            ->orderBy('class', 'asc')
            ->orderBy('roll_no', 'asc')
            ->paginate(10); // <-- paginate directly        return view('admin.admin_contect',compact('contacts'));
        return view('admin.admin_school', compact('students'));
    }

    public function updateweb(Request $request)
    {
        $content = WebContent::first();
        // Handle image upload
        $imagePath = $content ? $content->schoolPic : null;
        if ($request->hasFile('schoolPic')) {
            $file = $request->file('schoolPic');

            // Store new image
            $imagePath = $file->store('uploads', 'public');

            // Optional: Delete old image if exists
            if ($content && $content->schoolPic && Storage::disk('public')->exists($content->schoolPic)) {
                Storage::disk('public')->delete($content->schoolPic);
            }
        }

        $data = [
            'HeroTitle'         => $request->input('heroTitle'),
            'Hero_Description'  => $request->input('heroDescription'),
            'Years'             => $request->input('years'),
            'Student'           => $request->input('students'),
            'Success'           => $request->input('success'),
            'Mission_Statement' => $request->input('mission'),
            'Vision_Statement'  => $request->input('vision'),
            'schoolPic'         => $imagePath,
        ];

        if ($content) {
            $content->update($data);
        } else {
            WebContent::create($data);
        }

        return redirect()->back()->with(['msg' => 'Content updated successfully!']);
    }

    public function toggleStatus(Student $student)
    {
        Student::where('id', $student->id)->update([
            'status' => $student->status === 'Active' ? 'Inactive' : 'Active'
        ]);

        return redirect()->back()->with('msg', 'Student status has been changed');
    }

    public function uplodMark(Request $request)
    {
        try {
            $validated = $request->validate([
                'student_id' => 'required|exists:students,id',
                'subjects.*' => 'required|string|max:100',
                'max.*' => 'required|integer|min:1',
                'score.*' => 'required|integer|min:0',
            ]);
            log::info('Validated Data: ', $validated);
            $student = Student::findOrFail($request->student_id);

            foreach ($request->subjects as $i => $subject) {
                $student->marks()->create([
                    'subject' => $subject,
                    'max_marks' => $request->max[$i],
                    'score' => $request->score[$i],
                ]);
            }

            return redirect()->back()->with('success', 'Marks saved successfully!');
        } catch (Exception $e) {
            log::error('Error saving marks: ' . $e->getMessage());
            return redirect()->back()->with('error', 'An error occurred while saving marks: ' . $e->getMessage());
        }
    }
}
