<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Traits\GeneralTrait;
use Illuminate\Http\Request;
use App\Models\Student;

class StudentsController extends Controller
{
    use GeneralTrait;
      /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //call model all columns !
        $student = Student::all();
        return $this -> returnData('students',$student);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function store(StoreUserRequest  $myRequestObject)

    {
        $data=$myRequestObject->all();
        $student = Student::create($data);
        $student->save();
        return $this -> returnSuccessMessage("Student added Successful!");
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
        $student = Student::find($request->id);
        if($request->name)
            $student->name = $request->name;
        if($request->password)
            $student->password = $request->password;
        if($request->mobile)
            $student->mobile = $request->mobile;
        if($request->email)
            $student->email = $request->email;
        $student->save();
        return $this -> returnSuccessMessage("Student updated Successful!");
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
        Student::where('id', $request->id)->delete();
        return $this -> returnSuccessMessage("Student deleted Successful!");
    }
}
