<?php

namespace App\Http\Controllers;

use App\Profile;

use Validator;
use Auth;
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

        //Get the current user profile model instance
        $result =Auth::user()
                    ->profile()
                    ->where($request->criteria, 'like', '%'.$request->search.'%')
                    ->first();

        // Return the result
        return response([
            'customer' => $result,
            'debts' =>$result?$result->debts()->get():'',
        ], 200);        
    }

}
