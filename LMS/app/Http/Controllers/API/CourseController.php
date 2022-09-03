<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Course;
use Illuminate\Http\Request;
use App\Traits\GeneralTrait;

class CourseController extends Controller
{
    use GeneralTrait;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function index()
    {
        //json file call
        //return Course::all();     //doesnt have transforamtion layer
        $courses = Course::all();
        //return html data
        //return $this -> returnData('courses',$courses);

//        return JSON

        return response()->json($courses);
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        //
        $course = Course::all();
        return $this -> returnData('courses',$course);
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
        $course = Course::create($data);
        $course->save();
        return $this -> returnSuccessMessage("Course added Successful!");
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
        $course = Course::find($request->id);
        if($request->name)
            $course->name = $request->name;
        if($request->password)
            $course->password = $request->password;
        if($request->mobile)
            $course->mobile = $request->mobile;
        if($request->email)
            $course->email = $request->email;
        $course->save();
        return $this -> returnSuccessMessage("Course updated Successful!");
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
        Course::where('id', $request->id)->delete();
        return $this -> returnSuccessMessage("Course deleted Successful!");
    }
}
