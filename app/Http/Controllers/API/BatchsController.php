<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreUserRequest;
use App\Models\Batch;
use App\Traits\GeneralTrait;
use Illuminate\Http\Request;

class BatchsController extends Controller
{
    use GeneralTrait;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $batch = Batch::all();
        return $this -> returnData('batchs',$batch);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $data= $request->all();
        $batch = Batch::create($data);
        $batch->save();
        return $this -> returnSuccessMessage("Batch added Successful!");
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Batch  $batch
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        //
        $batch = Batch::find($request->id);
        if($request->name)
            $batch->name = $request->name;
        if($request->password)
            $batch->password = $request->password;
        if($request->mobile)
            $batch->mobile = $request->mobile;
        if($request->email)
            $batch->email = $request->email;
        $batch->save();
        return $this -> returnSuccessMessage("Batch updated Successful!");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Batch  $batch
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        //
        Batch::where('id', $request->id)->delete();
        return $this -> returnSuccessMessage("Batch deleted Successful!");

    }
}
