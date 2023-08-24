<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Mail\BecomeRevisor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Artisan;

class RevisorController extends Controller
{
    public function index()
    {
        return view('revisor.index');
    }

    public function worRequest()
    {
        return view('revisor.work_with_us');
    }
    
    public function becomeRevisor(Request $request)
    {
        Mail::to('admin@presto.it')->send(new BecomeRevisor(Auth::user(), $request));
        return redirect()->back()->with('success', 'Complimenti, hai chiesto di diventare revisore');
    }

    public function makeRevisor(User $user)
    {
        Artisan::call('presto:make-user-revisor', ['email' => $user->email]);
        return redirect('/')->with('success', "L'utente è diventato revisore!");
    }
}
