<?php

namespace App\Http\Controllers;

use App\Debt;
use Excel;
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
        $debts = $this->debts->all();
        return view('debts.show', compact('debts'));
    }

    /**
     * download debt information as an excel file.
     *
     * @return \Illuminate\Http\Response
     */
    public function download()
    {       
        // Return all debts from a particular user
        $debts = $this->debts->all();

        // Generate and return the spreadsheet
        Excel::create('debt_information', function($excel) use ($debts) {
            // Set the title
            $excel->setTitle('Customer Debt Information');
            // Build the spreadsheet, passing in the debts array
            $excel->sheet('Customer Debt Information', function($sheet) use ($debts) {
                $sheet->fromArray($debts, null, 'A1', false, true);
            });
        })->download('xls')->store('xls');
    }
}
