<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Feedback;
use Auth;
class FeedbackController extends Controller
{
    public function index()
    {
        //
        $feedback = Feedback::all();
        return view('Pages/ContactUs');    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function store(Request  $myRequestObject)

    {
        $user_id = Auth::user()->id;

//dd(        $user_id );

//        $data=$myRequestObject->all();
        $data =[
            //Hint:we cant
            "course_id" => $user_id,
            "batch_id" => $user_id,
            "staff_id" => $user_id,
            "student_id" => $user_id,

        ] ;
        $data=array_merge( $data,$myRequestObject->all());


//        dd($data);

        $feedback = Feedback::create($data);
        $feedback->save();
        return redirect('/');
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
