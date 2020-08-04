<?php

use Illuminate\Database\Seeder;

class Sales_DetailsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      // 7/1 -> 450円(sale_id = 1)
      $param= [
        'date' => '2020-07-01',
        'sale_id' => 1,
        'product_id' => 1, //シュークリーム 200円
        'quantity' => 1,
        'product_price' => 200,
      ];
      DB::table('sales_details')->insert($param);

      $param= [
        'date' => '2020-07-01',
        'sale_id' => 1,
        'product_id' => 2, //ロールケーキ 250円
        'quantity' => 1,
        'product_price' => 250,
      ];
      DB::table('sales_details')->insert($param);
/* ---------------------------------------------------- */
      // 7/2 -> 350円(sale_id = 2)
      $param= [
        'date' => '2020-07-02',
        'sale_id' => 2,
        'product_id' => 2, //ロールケーキ 250円
        'quantity' => 1,
        'product_price' => 250,
      ];
      DB::table('sales_details')->insert($param);

      $param= [
        'date' => '2020-07-02',
        'sale_id' => 2,
        'product_id' => 3, //プリン 100円
        'quantity' => 1,
        'product_price' => 100,
      ];
      DB::table('sales_details')->insert($param);
/* ---------------------------------------------------- */
      // 7/4 -> 520円(sale_id = 3)
      $param= [
        'date' => '2020-07-04',
        'sale_id' => 3,
        'product_id' => 4, //ショートケーキ 250円
        'quantity' => 1,
        'product_price' => 250,
      ];
      DB::table('sales_details')->insert($param);

      $param= [
        'date' => '2020-07-04',
        'sale_id' => 3,
        'product_id' => 5, //ガトーショコラ 270円
        'quantity' => 1,
        'product_price' => 270,
      ];
      DB::table('sales_details')->insert($param);
/* ---------------------------------------------------- */
      // 7/5 -> 370円(sale_id = 4)
      $param= [
        'date' => '2020-07-05',
        'sale_id' => 4,
        'product_id' => 3, //プリン 100円
        'quantity' => 1,
        'product_price' => 100,
      ];
      DB::table('sales_details')->insert($param);

      $param= [
        'date' => '2020-07-05',
        'sale_id' => 4,
        'product_id' => 5, //ガトーショコラ 270円
        'quantity' => 1,
        'product_price' => 270,
      ];
      DB::table('sales_details')->insert($param);
/* ---------------------------------------------------- */
      // 7/7 -> 500円(sale_id = 5)
      $param= [
        'date' => '2020-07-07',
        'sale_id' => 5,
        'product_id' => 2, //ロールケーキ 250円
        'quantity' => 2,
        'product_price' => 500,
      ];
      DB::table('sales_details')->insert($param);
/* ---------------------------------------------------- */
      // 7/9 -> 300円(sale_id = 6)
      $param= [
        'date' => '2020-07-09',
        'sale_id' => 6,
        'product_id' => 3, //プリン 100円
        'quantity' => 3,
        'product_price' => 300,
      ];
      DB::table('sales_details')->insert($param);
/* ---------------------------------------------------- */
      // 7/10 -> 450円(sale_id = 7)
      $param= [
        'date' => '2020-07-10',
        'sale_id' => 7,
        'product_id' => 1, //シュークリーム 200円
        'quantity' => 1,
        'product_price' => 200,
      ];
      DB::table('sales_details')->insert($param);

      $param= [
        'date' => '2020-07-10',
        'sale_id' => 7,
        'product_id' => 4, //ショートケーキ 250円
        'quantity' => 1,
        'product_price' => 250,
      ];
      DB::table('sales_details')->insert($param);
/* ---------------------------------------------------- */
      // 7/12 -> 500円(sale_id = 8)
      $param= [
        'date' => '2020-07-12',
        'sale_id' => 8,
        'product_id' => 4, //ショートケーキ 250円
        'quantity' => 2,
        'product_price' => 500,
      ];
      DB::table('sales_details')->insert($param);
/* ---------------------------------------------------- */
      // 7/13 -> 540円(sale_id = 9)
      $param= [
        'date' => '2020-07-13',
        'sale_id' => 9,
        'product_id' => 5, //ガトーショコラ 270円
        'quantity' => 2,
        'product_price' => 540,
      ];
      DB::table('sales_details')->insert($param);
/* ---------------------------------------------------- */
      // 7/15 -> 750円(sale_id = 10)
      $param= [
        'date' => '2020-07-15',
        'sale_id' => 10,
        'product_id' => 2, //ロールケーキ 250円
        'quantity' => 2,
        'product_price' => 500,
      ];
      DB::table('sales_details')->insert($param);

      $param= [
        'date' => '2020-07-15',
        'sale_id' => 10,
        'product_id' => 4, //ショートケーキ 250円
        'quantity' => 1,
        'product_price' => 250,
      ];
      DB::table('sales_details')->insert($param);
/* ---------------------------------------------------- */
      // 7/16 -> 350円(sale_id = 11)
      $param= [
        'date' => '2020-07-16',
        'sale_id' => 11,
        'product_id' => 2, //ロールケーキ 250円
        'quantity' => 1,
        'product_price' => 250,
      ];
      DB::table('sales_details')->insert($param);

      $param= [
        'date' => '2020-07-16',
        'sale_id' => 11,
        'product_id' => 3, //プリン 100円
        'quantity' => 1,
        'product_price' => 100,
      ];
      DB::table('sales_details')->insert($param);
/* ---------------------------------------------------- */
      // 7/17 -> 370円(sale_id = 12)
      $param= [
        'date' => '2020-07-17',
        'sale_id' => 12,
        'product_id' => 3, //プリン 100円
        'quantity' => 1,
        'product_price' => 100,
      ];
      DB::table('sales_details')->insert($param);

      $param= [
        'date' => '2020-07-17',
        'sale_id' => 12,
        'product_id' => 5, //ガトーショコラ 270円
        'quantity' => 1,
        'product_price' => 270,
      ];
      DB::table('sales_details')->insert($param);
/* ---------------------------------------------------- */
      // 7/19 -> 1070円(sale_id = 13)
      $param= [
        'date' => '2020-07-19',
        'sale_id' => 13,
        'product_id' => 1, //シュークリーム 200円
        'quantity' => 1,
        'product_price' => 200,
      ];
      DB::table('sales_details')->insert($param);

      $param= [
        'date' => '2020-07-19',
        'sale_id' => 13,
        'product_id' => 2, //ロールケーキ 250円
        'quantity' => 1,
        'product_price' => 250,
      ];
      DB::table('sales_details')->insert($param);

      $param= [
        'date' => '2020-07-19',
        'sale_id' => 13,
        'product_id' => 3, //プリン 100円
        'quantity' => 1,
        'product_price' => 100,
      ];
      DB::table('sales_details')->insert($param);

      $param= [
        'date' => '2020-07-19',
        'sale_id' => 13,
        'product_id' => 4, //ショートケーキ 250円
        'quantity' => 1,
        'product_price' => 250,
      ];
      DB::table('sales_details')->insert($param);

      $param= [
        'date' => '2020-07-19',
        'sale_id' => 13,
        'product_id' => 5, //ガトーショコラ 270円
        'quantity' => 1,
        'product_price' => 270,
      ];
      DB::table('sales_details')->insert($param);
/* ---------------------------------------------------- */
      // 7/20 -> 870円(sale_id = 14)
      $param= [
        'date' => '2020-07-20',
        'sale_id' => 14,
        'product_id' => 2, //ロールケーキ 250円
        'quantity' => 1,
        'product_price' => 250,
      ];
      DB::table('sales_details')->insert($param);

      $param= [
        'date' => '2020-07-20',
        'sale_id' => 14,
        'product_id' => 3, //プリン 100円
        'quantity' => 1,
        'product_price' => 100,
      ];
      DB::table('sales_details')->insert($param);

      $param= [
        'date' => '2020-07-20',
        'sale_id' => 14,
        'product_id' => 4, //ショートケーキ 250円
        'quantity' => 1,
        'product_price' => 250,
      ];
      DB::table('sales_details')->insert($param);

      $param= [
        'date' => '2020-07-20',
        'sale_id' => 14,
        'product_id' => 5, //ガトーショコラ 270円
        'quantity' => 1,
        'product_price' => 270,
      ];
      DB::table('sales_details')->insert($param);
/* ---------------------------------------------------- */
      // 7/20 -> 700円(sale_id = 15)
      $param= [
        'date' => '2020-07-20',
        'sale_id' => 15,
        'product_id' => 2, //ロールケーキ 250円
        'quantity' => 1,
        'product_price' => 250,
      ];
      DB::table('sales_details')->insert($param);

      $param= [
        'date' => '2020-07-20',
        'sale_id' => 15,
        'product_id' => 3, //プリン 100円
        'quantity' => 2,
        'product_price' => 200,
      ];
      DB::table('sales_details')->insert($param);

      $param= [
        'date' => '2020-07-20',
        'sale_id' => 15,
        'product_id' => 4, //ショートケーキ 250円
        'quantity' => 1,
        'product_price' => 250,
      ];
      DB::table('sales_details')->insert($param);
/* ---------------------------------------------------- */
      // 7/21 -> 2020円(sale_id = 16)
      $param= [
        'date' => '2020-07-21',
        'sale_id' => 16,
        'product_id' => 1, //シュークリーム 200円
        'quantity' => 2,
        'product_price' => 400,
      ];
      DB::table('sales_details')->insert($param);

      $param= [
        'date' => '2020-07-21',
        'sale_id' => 16,
        'product_id' => 2, //ロールケーキ 250円
        'quantity' => 2,
        'product_price' => 500,
      ];
      DB::table('sales_details')->insert($param);

      $param= [
        'date' => '2020-07-21',
        'sale_id' => 16,
        'product_id' => 3, //プリン 100円
        'quantity' => 1,
        'product_price' => 100,
      ];
      DB::table('sales_details')->insert($param);

      $param= [
        'date' => '2020-07-21',
        'sale_id' => 16,
        'product_id' => 4, //ショートケーキ 250円
        'quantity' => 3,
        'product_price' => 750,
      ];
      DB::table('sales_details')->insert($param);

      $param= [
        'date' => '2020-07-21',
        'sale_id' => 16,
        'product_id' => 5, //ガトーショコラ 270円
        'quantity' => 1,
        'product_price' => 270,
      ];
      DB::table('sales_details')->insert($param);
/* ---------------------------------------------------- */
      // 7/22 -> 1560円(sale_id = 17)
      $param= [
        'date' => '2020-07-22',
        'sale_id' => 17,
        'product_id' => 2, //ロールケーキ 250円
        'quantity' => 1,
        'product_price' => 250,
      ];
      DB::table('sales_details')->insert($param);

      $param= [
        'date' => '2020-07-22',
        'sale_id' => 17,
        'product_id' => 3, //プリン 100円
        'quantity' => 5,
        'product_price' => 500,
      ];
      DB::table('sales_details')->insert($param);

      $param= [
        'date' => '2020-07-22',
        'sale_id' => 17,
        'product_id' => 5, //ガトーショコラ 270円
        'quantity' => 3,
        'product_price' => 810,
      ];
      DB::table('sales_details')->insert($param);
/* ---------------------------------------------------- */
      // 7/22 -> 1650円(sale_id = 18)
      $param= [
        'date' => '2020-07-22',
        'sale_id' => 18,
        'product_id' => 1, //シュークリーム 200円
        'quantity' => 1,
        'product_price' => 200,
      ];
      DB::table('sales_details')->insert($param);

      $param= [
        'date' => '2020-07-22',
        'sale_id' => 18,
        'product_id' => 3, //プリン 100円
        'quantity' => 2,
        'product_price' => 200,
      ];
      DB::table('sales_details')->insert($param);

      $param= [
        'date' => '2020-07-22',
        'sale_id' => 18,
        'product_id' => 4, //ショートケーキ 250円
        'quantity' => 5,
        'product_price' => 1250,
      ];
      DB::table('sales_details')->insert($param);
/* ---------------------------------------------------- */
      // 7/24 -> 1220円(sale_id = 19)
      $param= [
        'date' => '2020-07-24',
        'sale_id' => 19,
        'product_id' => 1, //シュークリーム 200円
        'quantity' => 1,
        'product_price' => 200,
      ];
      DB::table('sales_details')->insert($param);

      $param= [
        'date' => '2020-07-24',
        'sale_id' => 19,
        'product_id' => 2, //ロールケーキ 250円
        'quantity' => 3,
        'product_price' => 750,
      ];
      DB::table('sales_details')->insert($param);

      $param= [
        'date' => '2020-07-24',
        'sale_id' => 19,
        'product_id' => 5, //ガトーショコラ 270円
        'quantity' => 1,
        'product_price' => 270,
      ];
      DB::table('sales_details')->insert($param);
/* ---------------------------------------------------- */
      // 7/24 -> 1350円(sale_id = 20)
      $param= [
        'date' => '2020-07-24',
        'sale_id' => 20,
        'product_id' => 1, //シュークリーム 200円
        'quantity' => 3,
        'product_price' => 600,
      ];
      DB::table('sales_details')->insert($param);

      $param= [
        'date' => '2020-07-24',
        'sale_id' => 20,
        'product_id' => 2, //ロールケーキ 250円
        'quantity' => 1,
        'product_price' => 250,
      ];
      DB::table('sales_details')->insert($param);

      $param= [
        'date' => '2020-07-24',
        'sale_id' => 20,
        'product_id' => 4, //ショートケーキ 250円
        'quantity' => 2,
        'product_price' => 500,
      ];
      DB::table('sales_details')->insert($param);
/* ---------------------------------------------------- */
      // 7/24 -> 1390円(sale_id = 21)
      $param= [
        'date' => '2020-07-24',
        'sale_id' => 21,
        'product_id' => 1, //シュークリーム 200円
        'quantity' => 1,
        'product_price' => 200,
      ];
      DB::table('sales_details')->insert($param);

      $param= [
        'date' => '2020-07-24',
        'sale_id' => 21,
        'product_id' => 3, //プリン 100円
        'quantity' => 4,
        'product_price' => 400,
      ];
      DB::table('sales_details')->insert($param);

      $param= [
        'date' => '2020-07-24',
        'sale_id' => 21,
        'product_id' => 4, //ショートケーキ 250円
        'quantity' => 1,
        'product_price' => 250,
      ];
      DB::table('sales_details')->insert($param);

      $param= [
        'date' => '2020-07-24',
        'sale_id' => 21,
        'product_id' => 5, //ガトーショコラ 270円
        'quantity' => 2,
        'product_price' => 540,
      ];
      DB::table('sales_details')->insert($param);
/* ---------------------------------------------------- */
      // 7/25 -> 4280円(sale_id = 22)
      $param= [
        'date' => '2020-07-25',
        'sale_id' => 22,
        'product_id' => 1, //シュークリーム 200円
        'quantity' => 4,
        'product_price' => 800,
      ];
      DB::table('sales_details')->insert($param);

      $param= [
        'date' => '2020-07-25',
        'sale_id' => 22,
        'product_id' => 2, //ロールケーキ 250円
        'quantity' => 4,
        'product_price' => 1000,
      ];
      DB::table('sales_details')->insert($param);

      $param= [
        'date' => '2020-07-25',
        'sale_id' => 22,
        'product_id' => 3, //プリン 100円
        'quantity' => 4,
        'product_price' => 400,
      ];
      DB::table('sales_details')->insert($param);

      $param= [
        'date' => '2020-07-25',
        'sale_id' => 22,
        'product_id' => 4, //ショートケーキ 250円
        'quantity' => 4,
        'product_price' => 1000,
      ];
      DB::table('sales_details')->insert($param);

      $param= [
        'date' => '2020-07-25',
        'sale_id' => 22,
        'product_id' => 5, //ガトーショコラ 270円
        'quantity' => 4,
        'product_price' => 1080,
      ];
      DB::table('sales_details')->insert($param);
/* ---------------------------------------------------- */
      // 7/26 -> 870円(sale_id = 23)
      $param= [
        'date' => '2020-07-26',
        'sale_id' => 23,
        'product_id' => 2, //ロールケーキ 250円
        'quantity' => 2,
        'product_price' => 500,
      ];
      DB::table('sales_details')->insert($param);

      $param= [
        'date' => '2020-07-26',
        'sale_id' => 23,
        'product_id' => 3, //プリン 100円
        'quantity' => 1,
        'product_price' => 100,
      ];
      DB::table('sales_details')->insert($param);

      $param= [
        'date' => '2020-07-26',
        'sale_id' => 23,
        'product_id' => 5, //ガトーショコラ 270円
        'quantity' => 1,
        'product_price' => 270,
      ];
      DB::table('sales_details')->insert($param);
/* ---------------------------------------------------- */
      // 7/26 -> 1700円(sale_id = 24)
      $param= [
        'date' => '2020-07-26',
        'sale_id' => 24,
        'product_id' => 2, //ロールケーキ 250円
        'quantity' => 3,
        'product_price' => 750,
      ];
      DB::table('sales_details')->insert($param);

      $param= [
        'date' => '2020-07-26',
        'sale_id' => 24,
        'product_id' => 3, //プリン 100円
        'quantity' => 2,
        'product_price' => 200,
      ];
      DB::table('sales_details')->insert($param);

      $param= [
        'date' => '2020-07-26',
        'sale_id' => 24,
        'product_id' => 4, //ショートケーキ 250円
        'quantity' => 3,
        'product_price' => 750,
      ];
      DB::table('sales_details')->insert($param);
/* ---------------------------------------------------- */
      // 7/28 -> 400円(sale_id = 25)
      $param= [
        'date' => '2020-07-28',
        'sale_id' => 25,
        'product_id' => 1, //シュークリーム 200円
        'quantity' => 2,
        'product_price' => 400,
      ];
      DB::table('sales_details')->insert($param);
/* ---------------------------------------------------- */
      // 7/28 -> 470円(sale_id = 26)
      $param= [
        'date' => '2020-07-28',
        'sale_id' => 26,
        'product_id' => 3, //プリン 100円
        'quantity' => 2,
        'product_price' => 200,
      ];
      DB::table('sales_details')->insert($param);

      $param= [
        'date' => '2020-07-28',
        'sale_id' => 26,
        'product_id' => 5, //ガトーショコラ 270円
        'quantity' => 1,
        'product_price' => 270,
      ];
      DB::table('sales_details')->insert($param);
/* ---------------------------------------------------- */
      // 7/29 -> 1200円(sale_id = 27)
      $param= [
        'date' => '2020-07-29',
        'sale_id' => 27,
        'product_id' => 1, //シュークリーム 200円
        'quantity' => 1,
        'product_price' => 200,
      ];
      DB::table('sales_details')->insert($param);

      $param= [
        'date' => '2020-07-29',
        'sale_id' => 27,
        'product_id' => 2, //ロールケーキ 250円
        'quantity' => 2,
        'product_price' => 500,
      ];
      DB::table('sales_details')->insert($param);

      $param= [
        'date' => '2020-07-29',
        'sale_id' => 27,
        'product_id' => 4, //ショートケーキ 250円
        'quantity' => 2,
        'product_price' => 500,
      ];
      DB::table('sales_details')->insert($param);
/* ---------------------------------------------------- */
      // 7/30 -> 1310円(sale_id = 28)
      $param= [
        'date' => '2020-07-30',
        'sale_id' => 28,
        'product_id' => 1, //シュークリーム 200円
        'quantity' => 2,
        'product_price' => 400,
      ];
      DB::table('sales_details')->insert($param);

      $param= [
        'date' => '2020-07-30',
        'sale_id' => 28,
        'product_id' => 3, //プリン 100円
        'quantity' => 1,
        'product_price' => 100,
      ];
      DB::table('sales_details')->insert($param);

      $param= [
        'date' => '2020-07-30',
        'sale_id' => 28,
        'product_id' => 5, //ガトーショコラ 270円
        'quantity' => 3,
        'product_price' => 810,
      ];
      DB::table('sales_details')->insert($param);
/* ---------------------------------------------------- */
      // 7/30 -> 2540円(sale_id = 29)
      $param= [
        'date' => '2020-07-30',
        'sale_id' => 29,
        'product_id' => 2, //ロールケーキ 250円
        'quantity' => 3,
        'product_price' => 750,
      ];
      DB::table('sales_details')->insert($param);

      $param= [
        'date' => '2020-07-30',
        'sale_id' => 29,
        'product_id' => 4, //ショートケーキ 250円
        'quantity' => 5,
        'product_price' => 1250,
      ];
      DB::table('sales_details')->insert($param);

      $param= [
        'date' => '2020-07-30',
        'sale_id' => 29,
        'product_id' => 5, //ガトーショコラ 270円
        'quantity' => 2,
        'product_price' => 540,
      ];
      DB::table('sales_details')->insert($param);
/* ---------------------------------------------------- */
      // 7/31 -> 2380円(sale_id = 30)
      $param= [
        'date' => '2020-07-31',
        'sale_id' => 30,
        'product_id' => 1, //シュークリーム 200円
        'quantity' => 4,
        'product_price' => 800,
      ];
      DB::table('sales_details')->insert($param);

      $param= [
        'date' => '2020-07-31',
        'sale_id' => 30,
        'product_id' => 3, //プリン 100円
        'quantity' => 5,
        'product_price' => 500,
      ];
      DB::table('sales_details')->insert($param);

      $param= [
        'date' => '2020-07-31',
        'sale_id' => 30,
        'product_id' => 5, //ガトーショコラ 270円
        'quantity' => 4,
        'product_price' => 1080,
      ];
      DB::table('sales_details')->insert($param);
    }
}
