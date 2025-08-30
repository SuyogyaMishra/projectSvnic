<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SchoolInfo;
use App\Models\WebContent;
use App\Models\Contact;
use Illuminate\Support\Facades\Storage;

class AdmindasboardController extends Controller
{
    /**
     * Show admin dashboard and update counts automatically.
     */
    public function index()
    {

        // Always update the first record, or create if none exists
        $stat = SchoolInfo::first();
        $contacts= Contact::all();

        return view('admin.admin_dashboard', compact('stat','contacts'));
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

        return redirect()->back()->with(['success' => 'Content updated successfully!']);
    }

}
