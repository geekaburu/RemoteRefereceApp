<?php

namespace App\Http\Controllers;

use App\Debt;
use Auth;
use Illuminate\Http\Request;

class DebtsController extends Controller
{
    /**
     * Set the protected variable for the profile object
     *
     */
    protected $debts;

    /**
     * Initialize the controller with its default attributes
     *
     */
    public function __construct(Debt $debts)
    {
        // Set the profile
        $this->debts = $debts;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Return all debts from a particular user
        $debts = Auth::user()
                    ->debts()
                    ->get();

        return view('debts.show', compact('debts'));
    }

}
