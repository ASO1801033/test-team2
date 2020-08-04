<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRequest extends FormRequest
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
       $validate_rule = [
         'name' => 'required | between:1, 50',
         'rec_food' => 'required | between:1, 50',
         'cost' => 'required | numeric | min:0 | not_in:0 | between:1, 99999999999'
       ];
       return $validate_rule;
     }

     public function messages()
     {
       $msg = [
         'name.required' => '必ず入力してください',
         'name.between' => '1～50文字で入力してください',
         'rec_food.required' => '必ず入力してください',
         'rec_food.between' => '1～50文字で入力してください',
         'cost.numeric' => '数値を入力してください',
         'cost.min' => '価格は1円以上にする必要があります',
         'cost.not_in' => '価格は1円以上にする必要があります',
         'cost.between' => '1〜11桁以内で入力してください',
         'cost.required' => '必ず入力してください',
       ];
       return $msg;
     }
}
