<?php

namespace App\Http\Controllers;

use App\Models\Feedback;
use Illuminate\Http\Request;

class FeedbackController extends Controller
{
    public function index()
    {
        //
        return view('Pages/ContactUs');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function store(Request  $myRequestObject)

    {
        $data=$myRequestObject->all();
        $feedback = Feedback::create($data);
        $feedback->save();
        return "Feedback added Successful!";
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return array
     */
    public function update(Request $request)
    {
        //
        $feedback = Feedback::find($request->id);
        if($request->name)
            $feedback->name = $request->name;
        if($request->password)
            $feedback->password = $request->password;
        if($request->mobile)
            $feedback->mobile = $request->mobile;
        if($request->email)
            $feedback->email = $request->email;
        $feedback->save();
        return $this -> returnSuccessMessage("Feedback updated Successful!");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return array
     */
    public function destroy(Request $request)
    {
        //
        Feedback::where('id', $request->id)->delete();
        return $this -> returnSuccessMessage("Feedback deleted Successful!");
    }
}
