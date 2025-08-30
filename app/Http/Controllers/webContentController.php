<?php
namespace App\Http\Controllers;
use App\Models\WebContent;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Event;

class webContentController extends Controller
{
    public function index()
    {
        // Get first row
        $content = WebContent::first();
        $events = Event::with('file')->get();
        return view('index', compact('content', 'events'));
    }


}
