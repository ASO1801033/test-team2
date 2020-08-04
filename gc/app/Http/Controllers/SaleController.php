<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Validator;
use App\Product;
use App\Sale;
use App\Sale_Detail;
use App\Http\Requests\SearchRequest;

class SaleController extends Controller
{

  public function condition() {
    $name = DB::table('products')->select('id', 'name')->get();
    $rec_food = DB::table('products')->distinct()->select('rec_food')->get();
    $data = [
      'name' => $name,
      'rec_food' => $rec_food
    ];
    return view('sale.search', $data);
  }

  public function result(SearchRequest $req) {
    //親テーブル sales
    //子テーブル① sales_details
    //子テーブル② products
    if(($req->id == null) && ($req->rec_food == null)) { //使うテーブル:sales
      //期間のみで検索
      $data = DB::table('sales')
        ->select('date', DB::raw('SUM(price) as total_price'))
        ->whereBetween('date', [$req->sdate, $req->edate])
        ->groupBy('date')
        ->get();
      $data = [
        'data' => $data,
        'sdate' => $req->sdate,
        'edate' => $req->edate,
      ];
    }else if($req->id == null) { //使うテーブル:sales_details products
      //期間と一押し食材で検索
      $data = DB::table('sales_details')
        ->join('products', 'sales_details.product_id', '=', 'products.id')
        ->select('date', 'products.name', DB::raw('SUM(quantity) as total_quantity'), DB::raw('SUM(product_price) as total_price'))
        ->whereBetween('date', [$req->sdate, $req->edate])
        ->where('products.rec_food', '=', $req->rec_food)
        ->groupBy('date', 'products.name')
        ->get();
      $data = [
        'data' => $data,
        'rec_food' => $req->rec_food,
        'sdate' => $req->sdate,
        'edate' => $req->edate,
      ];
    }else { //使うテーブル:sales_details products
      //期間と商品名で検索
      $data = DB::table('sales_details')
        ->join('products', 'sales_details.product_id', '=', 'products.id')
        ->select('date', DB::raw('SUM(quantity) as total_quantity'), DB::raw('SUM(product_price) as total_price'))
        ->whereBetween('date', [$req->sdate, $req->edate])
        ->where('product_id', '=', $req->id)
        ->groupBy('date')
        ->get();
      $name = DB::table('products')->where('id', $req->id)->first();
      $data = [
        'data' => $data,
        'name' => $name->name,
        'sdate' => $req->sdate,
        'edate' => $req->edate,
      ];
    }
    return view('sale.result', $data);
  }
}
