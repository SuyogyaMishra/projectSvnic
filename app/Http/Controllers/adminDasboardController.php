<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SchoolInfo;
use App\Models\WebContent;

class AdmindasboardController extends Controller
{
    /**
     * Show admin dashboard and update counts automatically.
     */
    public function index()
    {

        // Always update the first record, or create if none exists
        $stat = SchoolInfo::first();

        return view('admin.admin_dashboard', compact('stat'));
    }

  

    public function updateweb(Request $request)
    {
        $content = WebContent::first();

        if ($content) {
            $content->update([
                'HeroTitle'        => $request->input('heroTitle'),
                'Hero_Description' => $request->input('heroDescription'),
                'Years'            => $request->input('years'),
                'Student'          => $request->input('students'),
                'Success'          => $request->input('success'),
                'Mission_Statement' => $request->input('mission'),
                'Vision_Statement' => $request->input('vision'),
            ]);
        } else {
            WebContent::create([
                'HeroTitle'        => $request->input('heroTitle'),
                'Hero_Description' => $request->input('heroDescription'),
                'Years'            => $request->input('years'),
                'Student'          => $request->input('students'),
                'Success'          => $request->input('success'),
                'Mission_Statement' => $request->input('mission'),
                'Vision_Statement' => $request->input('vision'),
            ]);
        }


        return redirect()->back()->with(['success' => 'Content updated successfully!']);

    }
}
