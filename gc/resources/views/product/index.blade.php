@extends('layouts.app')<!-- layouts/app.blade.phpを継承 -->
@section('title', '商品一覧')<!-- 画面名の表示 -->

<!-- ↓中身のコンテンツ開始↓ -->
@section('content')
  @section('header', '商品一覧')<!-- 見出し -->
  <!-- ↓code start↓ -->
  <!-- ホームへ遷移 -->
  <a href="{{ route('home') }}">
    <button class="btn btn-primary text-dark mt-5" style="width:130px;">戻る</button>
  </a>
  <!-- 商品登録画面へ遷移 -->
  <a href="{{ route('product_create') }}">
    <button class="btn btn-primary text-dark mt-5" style="width:130px;">商品登録</button>
  </a>

  <div class="row mt-5">
    <div class="col-10 offset-1 offset-1">
      <table class="table table-bordered" style="table-layout:fixed;">
        <thead>
          <tr>
            <th scope="col" style="width:50%;"><big>商品名</big></th>
            <th scope="col" style="width:50%;"><big>販売状態</big></th>
          </tr>
        </thead>
        <tbody>
          @foreach($cakes as $d)
            <tr>
              <!-- 商品詳細へ遷移 -->
              <td class="align-middle">
                <a href="{{ route('product_detail', $d->id) }}" class="text-primary">{{ $d->name }}</a>
              </td>
              @if($d->flg == 0)
                <td class="align-middle">
                  <form action="{{ route('product_flg') }}" method="post">
                    {{ csrf_field() }}
                    <input type="hidden" name="id" value="{{ $d->id }}">
                    <button type="submit" class="btn btn-warning text-dark">停止中</button>
                  </form>
                </td>
              @else
                <td class="align-middle">
                  <form action="{{ route('product_flg') }}" method="post">
                    {{ csrf_field() }}
                    <input type="hidden" name="id" value="{{ $d->id }}">
                    <button type="submit" class="btn btn-success text-dark">販売中</button>
                  </form>
                </td>
              @endif
            </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>
  <!-- ↑code end↑ -->
@endsection
<!-- ↑中身のコンテンツ終了↑ -->

@section('script')<!-- スクリプトの読み込み -->
