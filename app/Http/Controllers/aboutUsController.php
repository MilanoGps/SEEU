<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UMKM;

class AboutUsController extends Controller
{
    public function index()
    {

        $pageTitle = "About Us";

        return view('aboutUs', compact('pageTitle'));
    }


}
