<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ImageRequest extends FormRequest
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
        'photo' => 'required | image | max:1024',
      ];
      return $validate_rule;
    }

    public function messages()
    {
      $msg = [
        'photo.required' => '必ず選択してください',
        'photo.image' => '画像を選択してください',
        'photo.max' => '画像サイズが1MBを超えています'
      ];
      return $msg;
    }
}
