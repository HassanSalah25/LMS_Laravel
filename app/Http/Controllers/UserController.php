<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUserRequest;
use Illuminate\Http\Request;
use function GuzzleHttp\Promise\all;

class UserController extends Controller
{
    //

    public function index()
    {

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */

                    // got to this request then validate from its Rules method !
    public function store(StoreUserRequest $myRequestObject)

    {

        $data=$myRequestObject->all();

//        return[
//            'name'=> 'required',
//            'password'=> 'required',
//            'mobile'=> 'required',
//            'email' => 'required|unique:admins'
//            ];

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */

    //TypeHint the paramter to be validated
    public function show(StoreUserRequest $myRequestObject    )
    {
        $data= $myRequestObject->all();

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id)
    {

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {

    }
}
