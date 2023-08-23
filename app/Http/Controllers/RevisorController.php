<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Mail\BecomeRevisor;
use App\Models\Announcement;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Artisan;

class RevisorController extends Controller
{
    public function index()
    {
        $announcement_to_check = Announcement::where('is_accepted', null)->get();
        return view('revisor.index', compact('announcement_to_check'));
    }

    public function becomeRevisor(){
        Mail::to('admin@presto.it')->send(new BecomeRevisor(Auth::user()));
        return redirect()->back()->with('message', 'Complimenti, hai chiesto di diventare revisore');
    }

    public function makeRevisor(User  $user){
        Artisan::call('presto:makeUserRevisor', ['email =>$user->email']);
        return redirect('/')->with('seccess', "L'utente è diventato revisore!");
    }
}