<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AnnouncementController extends Controller
{
    public function index() {
        return view('announcements.announcements');
    }

    public function create() {
        return view('announcements.announcement-create');
    }
}
