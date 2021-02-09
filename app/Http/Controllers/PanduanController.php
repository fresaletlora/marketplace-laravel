<?php

namespace App\Http\Controllers;

class PanduanController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

        return view('pages.panduan');
    }
}
