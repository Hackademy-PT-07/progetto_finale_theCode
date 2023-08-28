<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LangController extends Controller
{
    public function setLenguage($lang)
    {
        session()->put('locale', $lang);
        return redirect()->back();
    }
}