<?php

namespace App\Http\Controllers;

use App\Profile;

use Validator;
use Illuminate\Http\Request;

class ProfilesController extends Controller
{
    /**
     * Set the protected variable for the profile object
     *
     */
    protected $profile;

    /**
     * Initialize the controller with its default attributes
     *
     */
    public function __construct(Profile $profile)
    {
        // Set the profile
        $this->profile = $profile;
    }

    /**
     * Show the application's debt search page.
     *
     * @return \Illuminate\Http\Response
     */
    public function searchIndex()
    {
        return view('debts.search');
    }

    /**
     * Display a listing of the models that match the query.
     *
     * @return \Illuminate\Http\Response
     */
    public function search(Request $request)
    {
          // Call the validator
        $this->validator = Validator::make($request->all(), [
            'search' => 'required|min:6|numeric',
        ]);

        // Validate the user input
        if ($this->validator->fails()) {
            return response([
                'errors' => $this->validator->errors()->getMessages(),
                'code' => 422
             ]);
        }

        //return the current profile model instance
        return response(
                $this->profile
                        ->where($request->criteria, 'like', '%'.$request->search.'%')
                        ->first(), 200);        
    }

}
