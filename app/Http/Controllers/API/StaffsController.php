<?php

namespace App\Http\Controllers\API;
use App\Http\Controllers\Controller;
use App\Traits\GeneralTrait;
use Illuminate\Http\Request;
use App\Models\Staff;
class StaffsController extends Controller
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
        $staff = Staff::all();
        return $this -> returnData('staffs',$staff);
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
        $staff = Staff::create($data);
        $staff->save();
        return $this -> returnSuccessMessage("Staff added Successful!");
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
        $staff = Staff::find($request->id);
        if($request->name)
            $staff->name = $request->name;
        if($request->password)
            $staff->password = $request->password;
        if($request->mobile)
            $staff->mobile = $request->mobile;
        if($request->email)
            $staff->email = $request->email;
        $staff->save();
        return $this -> returnSuccessMessage("Staff updated Successful!");
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
        Staff::where('id', $request->id)->delete();
        return $this -> returnSuccessMessage("Staff deleted Successful!");
    }
}
