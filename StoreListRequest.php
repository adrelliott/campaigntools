<?php

namespace App\Http\Requests;

use App\Listmanager\ListModel;

use Illuminate\Foundation\Http\FormRequest;

class StoreListRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        // return [
        //     'list_name' => [
        //         'required',
        //         'unique:lists',
        //         'max:150',
        //         'min:3'
        //     ],
        //     'list_description' => [
        //         'max:255'
        //     ]
        ];  
    }
}
