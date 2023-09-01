<?php

namespace App\Http\Controllers;

use App\Models\Announcement;

class AnnouncementController extends Controller
{
    public function index()
    {
        $home = "home";

        return view('announcements.home', compact('home'));
    }

    public function announcement($id)
    {
        $announcement = Announcement::find($id);

        return view('announcements.announcement', compact('announcement'));
    }

    public function announcements($param)
    {
        return view('announcements.announcements', compact('param'));
    }

    public function create()
    {
        return view('announcements.announcement-create');
    }

    public function personalArea()
    {
        $announcements = Announcement::where('user_id', auth()->user()->id)->get();

        return view('auth.personal-area', compact('announcements'));
    }
}