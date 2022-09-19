<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class CourseResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        ///this class is a transforamtion layer between api service provider (backend Dev)
        ///     and the users of this api service

        //return parent::toArray($request);// retrive all

        //Note:( $this ) --> is an (model object) --> (table row)
       // dd($this); //die and debug for this object, this is a test cas Only! ---> print only one each time
//
        return [
            //use static/dynamic data call
            'LMScourseAPI'=> 'static example Only88 !',
          'my_id' => $this->id,//table columns
           'my_course' =>$this->name,
           //Need your attention to call nested Resource and stop debendencies
//             'user' => new UserResource($this->u) .
        ];
    }
}
