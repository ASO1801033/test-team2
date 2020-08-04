<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sale_Detail extends Model
{
  // 絶対に変更しないカラム
  protected $guarded = ['id'];

  // Productモデルを親に持つことを記述する
  public function product() {
      // belongsTo()メソッドの引数にモデル(クラス名)を指定する
      return $this->belongsTo('App\Product');
  }

  // Saleモデルを親に持つことを記述する
  public function sale() {
      // belongsTo()メソッドの引数にモデル(クラス名)を指定する
      return $this->belongsTo('App\Sale');
  }
}
