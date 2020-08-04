<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Http\Requests\CreateRequest;
use App\Http\Requests\UpdateRequest;
use Validator;
use App\Product;

class ProductController extends Controller
{
    public function index() {
        $cakes = Product::all();
        $cakes = ['msg' => '商品名', 'cakes' => $cakes];
    return view('product.index',$cakes);
  }

  public function flg(Request $req) {
      //$cakes = Product::find($id)->first();
      $cakes = DB::table('products')->where('id', $req->id)->first();
      //dd($cakes);
      if($cakes->flg == 0) {
        //$cakes->flg = 1;
        DB::table('products')->where('id', $req->id)->update(['flg' => 1]);
      }else {
        //$cakes->flg = 0;
        DB::table('products')->where('id', $req->id)->update(['flg' => 0]);
      };
      //$cakes->save();
      return redirect('/product/index');
  }

  public function create() {
    return view('product.create');
  }

  public function insert(CreateRequest $req) {
    $param = [
        'name' => $req->name,
        'cost' => $req->cost,
        'rec_food' => $req->rec_food,
        'tag' => $req->tag,
    ];
    DB::table('products')->insert($param);
    return redirect('/product/index');
  }

  public function detail(Request $req) {
      $cakes = DB::table('products')->where('id', $req->id)->get();
      $data = [
          'cakes' => $cakes
      ];
    return view('product.detail',$data);
  }

  public function edit($id) {
      $data = Product::find($id);
      $data = [
          'data' => $data
      ];
      return view('product.edit', $data);
  }

  public function update(UpdateRequest $req) {
      $data = [
          'name' => $req->name,
          'cost' => $req->cost,
          'rec_food' => $req->rec_food,
          'flg' => $req->flg,
      ];
      DB::table('products')->where('id', $req->id)->update($data);
      return redirect('/product/index');
  }

  public function delete(Request $id) {
    //DB::table('products')->where('product_id', $req->product_id)->delete();
    //return redirect('/product/index');
    $data = Product::find($id)->first();
    $data->delete();
    return redirect('/product/index');
  }
}
