<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreUserRequest;
use App\Models\User;
use App\Traits\GeneralTrait;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    use GeneralTrait;
    //

    public function index()
    {
        $user = User::all();
        return $this -> returnData('users',$user);
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
        $user = User::create($data);
        $user->save();
        return $this -> returnSuccessMessage("User added Successful!");
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
        $user = User::find($request->id);
        if($request->name)
            $user->name = $request->name;
        if($request->password)
            $user->password = $request->password;
        if($request->mobile)
            $user->mobile = $request->mobile;
        if($request->email)
            $user->email = $request->email;
        $user->save();
        return $this -> returnSuccessMessage("User updated Successful!");
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
        User::where('id', $request->id)->delete();
        return $this -> returnSuccessMessage("User deleted Successful!");
    }
}
