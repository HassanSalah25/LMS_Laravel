<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\CourseStudent;
use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
      /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        //call model all columns !
 
            # code...
        return view('Student.index1', [
            'Students' => Student::all(),
            'courses' => Course::all(),
            'student_auth' => Student::find(auth()->user()->id),
            
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view("Student.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //Validate in Form for unexpected input
        Student::create($request->validate([
            'name'=> 'required',
            'password'=> 'required',
            'mobile'=> 'required',
            'email' => 'required|unique:Students'
        ]));
        return redirect('students');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Student $Student)
    {
        //
        
        return view('Student.edit', [//the next parameters
            'student' => $Student // assign new model $Student TO old model 'student'
        ]);
    }

    public function addCourse($id)
    {
        //
        $course = Course::find($id);	
        $course->students()->sync(auth()->user()->id);
        return redirect('students');
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //

        $Student = Student::find($id);
        $Student->name = $request->name;
        $Student->password = $request->password;
        $Student->mobile = $request->mobile;
        $Student->email = $request->email;
        $Student->save();

        return redirect('Students/index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        Student::where('id', $id)->delete();
        return redirect('students');
       //  return redirect('admins/index');

    }
}
