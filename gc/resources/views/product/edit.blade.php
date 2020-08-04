@extends('layouts.app')<!-- layouts/app.blade.phpを継承 -->
@section('title', '商品変更')<!-- 画面名の表示 -->

<!-- ↓中身のコンテンツ開始↓ -->
@section('content')
  @section('header', '商品変更')<!-- 見出し -->
  <!-- ↓code start↓ -->
  <!-- 商品詳細画面へ遷移 -->
  <a href="{{ route('product_detail', $data->id) }}">
    <button type="button" class="btn btn-primary text-dark mt-5 mb-3">戻る</button>
  </a>

  <div class="row">
    <div class="col-8 offset-2 offset-2">
      <form action="{{ route('product_update') }}" method="post">
        {{ csrf_field() }}
        <table class="table table-bordered">
          <tbody>
            <tr>
              <th scope="row" class="text-center align-middle" style="width:50%;"><big>商品名</big></th>
              <td class="text-left" style="width:50%;">
                <input class="form-control" type="text" name="name" value="{{ old('name', $data->name) }}">
                @if ($errors->has('name'))
                  <div class="text-danger">
                    {{ $errors->first('name') }}
                  </div>
                @endif
              </td>
            </tr>
            <tr>
              <th scope="row" class="text-center align-middle"><big>単価</big></th>
              <td class="text-left">
                <input class="form-control" type="text" name="cost" value="{{ old('cost', $data->cost) }}">
                @if ($errors->has('cost'))
                  <div class="text-danger">
                    {{ $errors->first('cost') }}
                  </div>
                @endif
              </td>
            </tr>
            <tr>
              <th scope="row" class="text-center align-middle"><big>一押し食材</big></th>
              <td class="text-left">
                <input class="form-control" type="text" name="rec_food" value="{{ old('rec_food', $data->rec_food) }}">
                @if ($errors->has('rec_food'))
                  <div class="text-danger">
                    {{ $errors->first('rec_food') }}
                  </div>
                @endif
              </td>
            </tr>
            <tr>
              <th scope="row" class="text-center align-middle"><big>販売状態</big></th>
              @if($data->flg == 0)
                <td class="text-left align-middle">
                  <select class="form-control" name="flg">
                    <option value="0" selected>停止中</option>
                    <option value="1">販売中</option>
                  </select>
                </td>
              @else
                <td class="text-left align-middle">
                  <select class="form-control" name="flg">
                    <option value="0">停止中</option>
                    <option value="1" selected>販売中</option>
                  </select>
                </td>
              @endif
            </tr>
          </tbody>
        </table>
        <input type="hidden" name="id" value="{{ $data->id }}">
        <button type="submit" class="btn btn-success text-dark">更新</button>
      </form>
    </div>
  </div>
  <!-- ↑code end↑ -->
@endsection
<!-- ↑中身のコンテンツ終了↑ -->

@section('script')<!-- スクリプトの読み込み -->
