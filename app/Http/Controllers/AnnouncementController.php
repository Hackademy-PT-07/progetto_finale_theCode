<?php

namespace App\Http\Controllers;

use App\Models\Announcement;

class AnnouncementController extends Controller
{
    public $announcements;
    public $category_id;

    public function index()
    {
        return view('announcements.announcements');
    }

    public function announcement($id)
    {
        $announcement = Announcement::find($id);

        return view('announcements.announcement', compact('announcement'));
    }

    public function create()
    {
        return view('announcements.announcement-create');
    }

    public function personalArea()
    {
        $announcements = Announcement::where('user_id', '==',  auth()->user()->id)->get();

        return view('auth.personal-area', compact('announcements'));
    }
    public function categoryPage()
    {
        return view('announcements.announcementsByCategory');
    }
}