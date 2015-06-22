<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class CreatePetitionRequest extends Request
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
        return [
            'heading' => 'required|min:10|max:255',
            'petition_to' => 'required|min:3',
            'content' => 'required|min:100',
            'image'=>'sometimes|required|image|mimes:jpeg,jpg,bmp,png,gif|image_size:>=400,*'
        ];
    }
}
