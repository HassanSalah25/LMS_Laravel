<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Certification;
use App\Traits\GeneralTrait;
use Illuminate\Http\Request;

class CerticationsController extends Controller
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
        $certification = Certification::all();
        return $this -> returnData('certifications',$certification);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function store(Request  $myRequestObject)

    {
        $data=  $myRequestObject->all();
        $certification = Certification::create($data);
        $certification->save();
        return $this -> returnSuccessMessage("Certification added Successful!");
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
        $certification = Certification::find($request->id);
        if($request->name)
            $certification->name = $request->name;
        if($request->password)
            $certification->password = $request->password;
        if($request->mobile)
            $certification->mobile = $request->mobile;
        if($request->email)
            $certification->email = $request->email;
        $certification->save();
        return $this -> returnSuccessMessage("Certification updated Successful!");
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
        Certification::where('id', $request->id)->delete();
        return $this -> returnSuccessMessage("Certification deleted Successful!");
    }
}
