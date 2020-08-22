<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Http\Requests\ImageRequest;
use Validator;
use App\Product;
use Illuminate\Support\Facades\Storage; //追加
//ターミナル(コマンドプロンプト)上で php artisan storage:link を実行

class _ImageController extends Controller
{
  //ProfileController@indexにあたる
  public function reading() {
    return view('image.reading');
  }

  public function judgment() {
    return view('image.judgment');
  }

  public function send_judgment(ImageRequest $req) {
    date_default_timezone_set('Asia/Tokyo'); //タイムゾーンを東京に設定
    $image_data = $req->photo->storeAs('public/file_images', date('Y-m-d_H-i-s').'.jpg');
    $url = Storage::url($image_data);
    return redirect('/image/judgment')->with('success', asset($url)); //asset($url)で画像にアクセスできる
  }

  public function price(Request $req) {
    dd($req);

    //jsonダミーデータ
    /*
    $json = '{
      "Created": "2017-11-30T07:22:29.2698916Z",
      "Id": "88951980-eb5f-4519-a45e-ca371c5d105a",
      "Iteration": "962f6ef2-b049-437d-b39e-6c115d918b30",
      "Predictions": [
          {
              "Probability": 0.9999999,
              "Tag": "Pudding",
              "TagId": "28bdc70f-26f2-47cf-91a1-730905b3366a"
          },
          {
              "Probability": 1.73013581e-09,
              "Tag": "takenoko",
              "TagId": "a662bff1-06f8-4ac5-be49-22861237e8cc"
          }
      ],
      "Project": "250d2d53-2d1a-4ca5-9b35-95c215206e84"
    }';

    //jsonデータを連想配列に変換
    $tag_name = json_decode($json, true);

    //PredictionsのTagだけ取り出し
    $tag_name = $tag_name['Predictions'][0]['Tag'];

    //dd($tag_name);

    //SQL準備
    $data = DB::table('products')->where('tag', $tag_name)->first(); //$tag_nameの値をもとにDB検索
    $data = [
      'info' => $data,
      'product_price' => $data->cost * 1, //商品単価 * 個数
    ];
    dd($data);
    */

    return view('image.price');
  }
}
