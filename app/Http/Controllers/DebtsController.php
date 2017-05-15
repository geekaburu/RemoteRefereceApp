<?php

namespace App\Http\Controllers;

use App\Debt;

use Auth;
use Excel;
use Carbon\Carbon;
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

    /**
     * download debt information as an excel file.
     *
     * @return \Illuminate\Http\Response
     */
    public function download()
    {       
        // Return all debts from a particular user
        $results = Auth::user()
                    ->debts()
                    ->select('profile_id','transaction_date','transaction_amount','transaction_days')
                    ->get();

        //Initialize the array which will be passed into the Excel generator.
        $debts = [];
        $temp = []; 

        // Convert each member of the returned collection into an array, and append it to the payments array.
        foreach ($results as $result) {
            $temp['Transaction Date'] = Carbon::createFromFormat('Y-m-d H:i:s', $result->transaction_date)->format('Y-m-d');
            $temp['Customer'] = $result->profile->name;
            $temp['Transaction Amount'] = number_format((float)$result->transaction_amount, 2, '.', '');
            $temp['Due days'] = $result->transaction_days;
            $debts[] = $temp;
        }

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
