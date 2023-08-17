<?php

namespace App\Http\Controllers;

use App\Models\Announcement;
use App\Models\Category;
use Illuminate\Http\Request;

use function PHPUnit\Framework\returnSelf;

class AnnouncementController extends Controller
{
    public function index() {
        return view('announcements.announcements');
    }

    public function announcement($id){
        $announcement = Announcement::find($id);

        return view('announcements.announcement', compact('announcement'));
    }
    
    public function create() {
        return view('announcements.announcement-create');
    }
}