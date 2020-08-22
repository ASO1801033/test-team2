@extends('layouts.app')<!-- layouts/app.blade.phpを継承 -->
@section('title', '商品登録')<!-- 画面名の表示 -->

<!-- ↓中身のコンテンツ開始↓ -->
@section('content')
  @section('header', '商品登録')<!-- 見出し -->
  <!-- ↓code start↓ -->
  <!-- 商品一覧画面へ遷移 -->
  <a href="{{ route('product_index') }}">
    <button class="btn btn-primary text-dark mt-5 mb-3">戻る</button>
  </a>

  <div class="row">
    <div class="col-8 offset-2 offset-2">
      <form action="{{ route('product_insert') }}" method="post">
        {{ csrf_field() }}
        <table class="table table-bordered">
          <tbody>
            <tr>
              <th scope="row" class="text-center align-middle" style="width:50%;"><big>商品名</big></th>
              <td class="text-left" style="width:50%;">
                <input class="form-control" type="text" name="name" value="{{ old('name') }}">
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
                <input class="form-control" type="text" name="cost" value="{{ old('cost') }}">
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
                <input class="form-control" type="text" name="rec_food" value="{{ old('rec_food') }}">
                @if ($errors->has('rec_food'))
                  <div class="text-danger">
                    {{ $errors->first('rec_food') }}
                  </div>
                @endif
              </td>
            </tr>
            <tr>
              <th scope="row" class="text-center align-middle"><big>商品認識タグ</big></th>
              <td class="text-left">
                <input class="form-control" type="text" name="tag" value="{{ old('tag') }}">
                @if ($errors->has('tag'))
                  <div class="text-danger">
                    {{ $errors->first('tag') }}
                  </div>
                @endif
              </td>
            </tr>
          </tbody>
        </table>
        <button class="btn btn-primary text-dark" type="submit">登録</button>
      </form>
    </div>
  </div>
  <!-- ↑code end↑ -->
@endsection
<!-- ↑中身のコンテンツ終了↑ -->

@section('script')<!-- スクリプトの読み込み -->
