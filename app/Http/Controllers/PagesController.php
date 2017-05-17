<?php

namespace App\Http\Controllers;

use App\Profile;
use App\Debt;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;

class PagesController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(Profile $profile, Debt $debt)
    {
        // $this->middleware('auth');
        $this->profile = $profile;
        $this->debt = $debt;
    }

    /**
     * Show the application landing page.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pages.home');
        // // return $this->profile->all();
        // return $this->debt->all();
    }

}
