<?php

namespace App\Http\Controllers;

use App\Models\Announcement;
use App\Models\Category;

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
        return view('auth.personal-area');
    }
    public function categoryPage()
    {
        return view('announcements.announcementsByCategory');
    }
}