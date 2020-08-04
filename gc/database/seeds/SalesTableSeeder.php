<?php

use Illuminate\Database\Seeder;

class SalesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      //sale_id = 1
      $param= [
        'date' => '2020-07-01',
        'price' => 450,
      ];
      DB::table('sales')->insert($param);

      //sale_id = 2
      $param= [
        'date' => '2020-07-02',
        'price' => 350,
      ];
      DB::table('sales')->insert($param);

      //sale_id = 3
      $param= [
        'date' => '2020-07-04',
        'price' => 520,
      ];
      DB::table('sales')->insert($param);

      //sale_id = 4
      $param= [
        'date' => '2020-07-05',
        'price' => 370,
      ];
      DB::table('sales')->insert($param);

      //sale_id = 5
      $param= [
        'date' => '2020-07-07',
        'price' => 500,
      ];
      DB::table('sales')->insert($param);

      //sale_id = 6
      $param= [
        'date' => '2020-07-09',
        'price' => 300,
      ];
      DB::table('sales')->insert($param);

      //sale_id = 7
      $param= [
        'date' => '2020-07-10',
        'price' => 450,
      ];
      DB::table('sales')->insert($param);

      //sale_id = 8
      $param= [
        'date' => '2020-07-12',
        'price' => 500,
      ];
      DB::table('sales')->insert($param);

      //sale_id = 9
      $param= [
        'date' => '2020-07-13',
        'price' => 540,
      ];
      DB::table('sales')->insert($param);

      //sale_id = 10
      $param= [
        'date' => '2020-07-15',
        'price' => 750,
      ];
      DB::table('sales')->insert($param);

      //sale_id = 11
      $param= [
        'date' => '2020-07-16',
        'price' => 350,
      ];
      DB::table('sales')->insert($param);

      //sale_id = 12
      $param= [
        'date' => '2020-07-17',
        'price' => 370,
      ];
      DB::table('sales')->insert($param);

      //sale_id = 13
      $param= [
        'date' => '2020-07-19',
        'price' => 1070,
      ];
      DB::table('sales')->insert($param);

      //sale_id = 14
      $param= [
        'date' => '2020-07-20',
        'price' => 870,
      ];
      DB::table('sales')->insert($param);

      //sale_id = 15
      $param= [
        'date' => '2020-07-20',
        'price' => 700,
      ];
      DB::table('sales')->insert($param);

      //sale_id = 16
      $param= [
        'date' => '2020-07-21',
        'price' => 2020,
      ];
      DB::table('sales')->insert($param);

      //sale_id = 17
      $param= [
        'date' => '2020-07-22',
        'price' => 1560,
      ];
      DB::table('sales')->insert($param);

      //sale_id = 18
      $param= [
        'date' => '2020-07-22',
        'price' => 1650,
      ];
      DB::table('sales')->insert($param);

      //sale_id = 19
      $param= [
        'date' => '2020-07-24',
        'price' => 1220,
      ];
      DB::table('sales')->insert($param);

      //sale_id = 20
      $param= [
        'date' => '2020-07-24',
        'price' => 1350,
      ];
      DB::table('sales')->insert($param);

      //sale_id = 21
      $param= [
        'date' => '2020-07-24',
        'price' => 1390,
      ];
      DB::table('sales')->insert($param);

      //sale_id = 22
      $param= [
        'date' => '2020-07-25',
        'price' => 4280,
      ];
      DB::table('sales')->insert($param);

      //sale_id = 23
      $param= [
        'date' => '2020-07-26',
        'price' => 870,
      ];
      DB::table('sales')->insert($param);

      //sale_id = 24
      $param= [
        'date' => '2020-07-26',
        'price' => 1700,
      ];
      DB::table('sales')->insert($param);

      //sale_id = 25
      $param= [
        'date' => '2020-07-28',
        'price' => 400,
      ];
      DB::table('sales')->insert($param);

      //sale_id = 26
      $param= [
        'date' => '2020-07-28',
        'price' => 470,
      ];
      DB::table('sales')->insert($param);

      //sale_id = 27
      $param= [
        'date' => '2020-07-29',
        'price' => 1200,
      ];
      DB::table('sales')->insert($param);

      //sale_id = 28
      $param= [
        'date' => '2020-07-30',
        'price' => 1310,
      ];
      DB::table('sales')->insert($param);

      //sale_id = 29
      $param= [
        'date' => '2020-07-30',
        'price' => 2540,
      ];
      DB::table('sales')->insert($param);

      //sale_id = 30
      $param= [
        'date' => '2020-07-31',
        'price' => 2380,
      ];
      DB::table('sales')->insert($param);
    }
}
