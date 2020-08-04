<?php

 namespace App\Http\Requests;

 use Illuminate\Foundation\Http\FormRequest;

 class SearchRequest extends FormRequest
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
           /*
             'sdate' => 'before:today|date_format:YYYY/mm/dd',
             'edate' => 'before:today|after_or_equal:{{sdate}}|date_format:YYYY/mm/dd'
            */
            'sdate' => 'required | before:tomorrow',
            'edate' => 'required | before:tomorrow | after_or_equal:sdate',
         ];
         return $validate_rule;
     }

     public function messages(){
         $msg = [
           /*
             'sdate.before:today' => '今日より古い日付を選択してください。',
             'sdate.date_format:YYYY/mm/dd' => '今日より古い日付を選択してください。',
             'edate.before:today' => '今日より古い日付を選択してください。',
             'edate.date_format:YYYY/mm/dd' => '今日より古い日付を選択してください。',
             'edate.after_or_equal:{{sdate}}' => '開始日と同じ日か、古い日付を選択してください。'
             */
             'sdate.required' => '開始日は必須入力です',
             'sdate.before' => '今日以前を選択してください',
             'edate.required' => '終了日は必須入力です',
             'edate.after_or_equal' => '開始日以降を選択してください',
             'edate.before' => '今日以前を選択してください',
         ];
         return $msg;
     }
 }
