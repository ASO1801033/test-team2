<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sale extends Model
{
  // 絶対に変更しないカラム
  protected $guarded = ['id'];

  // Sale_Detailモデルを子に持つことを記述する
  public function sale_details() {
      return $this->hasMany('App\Sale_Detail');
  }
}
