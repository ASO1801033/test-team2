<?php

use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      // id = 1
      $param = [
          'name' => 'シュークリーム',
          'cost' => 200,
          'rec_food' => '卵',
          'flg' => 1,
          'tag' => 'creampuff',
      ];
      DB::table('products')->insert($param);

      // id = 2
      $param = [
          'name' => 'ロールケーキ',
          'cost' => 250,
          'rec_food' => '苺',
          'flg' => 1,
          'tag' => 'Roll cake',
      ];
      DB::table('products')->insert($param);

      // id = 3
      $param = [
          'name' => 'プリン',
          'cost' => 100,
          'rec_food' => '牛乳',
          'flg' => 1,
          'tag' => 'Pudding',
      ];
      DB::table('products')->insert($param);

      // id = 4
      $param = [
          'name' => 'ショートケーキ',
          'cost' => 250,
          'rec_food' => '苺',
          'flg' => 1,
          'tag' => 'Shortcake',
      ];
      DB::table('products')->insert($param);

      // id = 5
      $param = [
          'name' => 'ガトーショコラ',
          'cost' => 270,
          'rec_food' => 'チョコレート',
          'flg' => 1,
          'tag' => 'Gateau chocolat',
      ];
      DB::table('products')->insert($param);
    }
}
