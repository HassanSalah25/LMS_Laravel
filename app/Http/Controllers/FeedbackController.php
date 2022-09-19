<?php

namespace App\Http\Controllers;

use App\Models\Batch;
use App\Models\Course;
use App\Models\Staff;
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
        $user_id = Auth::user()->id ;
        $batch = Batch::find($user_id);
//        dd($batch->id );

                $data_id = $user_id .Batch::find($user_id)->id  . Course::find($user_id)->id . Staff::find($user_id)->id;

//dd(        $data_id
//
//);


//        $data=$myRequestObject->all();
        $data =[
            //Hint:we cant
            "course_id" => $data_id[2],
            "batch_id" => $data_id[1] ,
            "staff_id" => $data_id[3],
            "student_id" => $data_id[0],

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
