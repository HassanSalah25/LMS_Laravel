<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Lesson;
use App\Traits\GeneralTrait;
use Illuminate\Http\Request;

class LessonsController extends Controller
{
    use GeneralTrait;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function index()
    {
        //
        $lesson = Lesson::all();
        return $this -> returnData('lessons',$lesson);
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
        $lesson = Lesson::create($data);
        $lesson->save();
        return $this -> returnSuccessMessage("Lesson added Successful!");
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
        $lesson = Lesson::find($request->id);
        if($request->name)
            $lesson->name = $request->name;
        if($request->password)
            $lesson->password = $request->password;
        if($request->mobile)
            $lesson->mobile = $request->mobile;
        if($request->email)
            $lesson->email = $request->email;
        $lesson->save();
        return $this -> returnSuccessMessage("Admin updated Successful!");
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
        Lesson::where('id', $request->id)->delete();
        return $this -> returnSuccessMessage("Lesson deleted Successful!");
    }
}
