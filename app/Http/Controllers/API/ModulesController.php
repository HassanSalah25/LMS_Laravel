<?php

namespace App\Http\Controllers\API;
use App\Http\Controllers\Controller;
use App\Models\Module;
use Illuminate\Http\Request;

class ModulesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $Module = Module::all();
        return $this -> returnData('modules',$Module);
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
        $Module = Module::create($data);
        $Module->save();
        return $this -> returnSuccessMessage("Module added Successful!");
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
        $Module = Module::find($request->id);
        if($request->name)
            $Module->name = $request->name;
        if($request->password)
            $Module->password = $request->password;
        if($request->mobile)
            $Module->mobile = $request->mobile;
        if($request->email)
            $Module->email = $request->email;
        $Module->save();
        return $this -> returnSuccessMessage("Module updated Successful!");
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
        Module::where('id', $request->id)->delete();
        return $this -> returnSuccessMessage("Module deleted Successful!");
    }
}
