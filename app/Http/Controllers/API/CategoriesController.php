<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Traits\GeneralTrait;
use Illuminate\Http\Request;

class CategoriesController extends Controller
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
        $category = Category::all();
        return $this -> returnData('categories',$category);
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
        $data = $request->all();
        $category = Category::create($data);
        $category->save();
        return $this -> returnSuccessMessage("Category added Successful!");
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        //
        $category = Category::find($request->id);
        if($request->name)
            $category->name = $request->name;
        if($request->password)
            $category->password = $request->password;
        if($request->mobile)
            $category->mobile = $request->mobile;
        if($request->email)
            $category->email = $request->email;
        $category->save();
        return $this -> returnSuccessMessage("Category updated Successful!");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        //
        Category::where('id', $request->id)->delete();
        return $this -> returnSuccessMessage("Category deleted Successful!");
    }
}
