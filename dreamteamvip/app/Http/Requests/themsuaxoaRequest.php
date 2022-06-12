<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class themsuaxoaRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
        'idProduct'=> 'required',
        'tenSp'=> 'required',
        'gia'=> 'required',
        'giaSale'=> 'required',
        'loaiSp'=> 'required',
        'quantity'=> 'required',
        'imgProduct'=> 'required',
        'property'=> 'required',
        'hang'=> 'required'
        ];
    }
}
