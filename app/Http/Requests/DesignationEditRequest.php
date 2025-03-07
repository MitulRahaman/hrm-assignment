<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class DesignationEditRequest extends FormRequest
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
     * @return array<string, mixed>
     */

    public function rules()
    {
        $id = $this->route('id');
        $this->merge(['id' => $id]);
        return [
            'id' => [
                'required',
                Rule::exists('designations', 'id'),
            ],
            'name'=>"required|unique:designations,name,$id",
            'branches' => 'required',
            'department' => 'required',
            'description'=> 'nullable',

        ];
    }
}
