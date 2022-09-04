<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\StoreUserRequest;
use App\Models\User;
use App\Traits\GeneralTrait;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Admin;

class AdminsController extends Controller
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
        $admin = Admin::all();
        return $this -> returnData('admins',$admin);
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
        $admin = Admin::create($data);
        $admin->save();
        return $this -> returnSuccessMessage("Admin added Successful!");
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
        $admin = Admin::find($request->id);
        if($request->name)
            $admin->name = $request->name;
        if($request->password)
            $admin->password = $request->password;
        if($request->mobile)
            $admin->mobile = $request->mobile;
        if($request->email)
            $admin->email = $request->email;
        $admin->save();
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
        Admin::where('id', $request->id)->delete();
        return $this -> returnSuccessMessage("Admin deleted Successful!");
    }

//    //add logout
//    public function markedForLogout(){
//        User::where('id', $userId)->update(['logout' => true]);
//    }


}
