@extends('layouts.app')<!-- layouts/app.blade.phpを継承 -->
@section('title', 'ホーム')<!-- 画面名の表示 -->

<!-- ↓中身のコンテンツ開始↓ -->
@section('content')
  @section('header', 'ケーキ屋さんの会計計算')<!-- 見出し -->
  <!-- ↓code start↓ -->
  <a href="{{ route('product_index') }}"><button class="btn btn-primary text-dark w-50 mt-5">商品一覧</button></a>

  <a href="{{ route('image_reading') }}"><button class="btn btn-primary text-dark w-50 mt-5">画像識別</button></a>

  <a href="{{ route('sale_condition') }}"><button class="btn btn-primary text-dark w-50 mt-5">売上検索</button></a>

  <!-- ↑code end↑ -->
@endsection
<!-- ↑中身のコンテンツ終了↑ -->

@section('script')<!-- スクリプトの読み込み -->
