<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
  // 絶対に変更しないカラム
  protected $guarded = ['id'];

  // 変更するかもしれないカラム
  protected $fillable = ['name', 'cost', 'rec_food', 'flg', 'tag']; //tagを追加

  // Sale_Detailモデルを子に持つことを記述する
  public function sale_details() {
      return $this->hasMany('App\Sale_Detail');
  }
}
