<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUserRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        // implement the authorization here , ex : what type of user you are !
//        if (currentUser is admin)
//            {
//                return true;
//            }
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
//        how are the validation rules evaluated?
//        All you need to do is type-hint the request on your controller method. The
//        incoming form request is validated before the controller method is called,
//        meaning you do not need to clutter your controller with any validation logic:

        return [
            //write down your validations rules :)

            'name'=> 'required',
            'password'=> 'required',
            'mobile'=> 'required',
            'email' => 'required|unique:admins',
        ];
    }
}
