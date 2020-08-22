@extends('layouts.app')<!-- layouts/app.blade.phpを継承 -->
@section('title', '画像選択')<!-- 画面名の表示 -->

<!-- ↓中身のコンテンツ開始↓ -->
@section('content')
  @section('header', '画像選択')<!-- 見出し -->
  <!-- ↓code start↓ -->
  <!-- enctype="multipart/form-data"はファイルデータをアップロードに必須 -->
  <!--
  @if (session('success'))
    <div class="alert alert-success">
      <a href="{{ session('success') }}" target="_blank">{{ session('success') }}</a>
    </div>
  @endif
-->

  @if ($errors->has('photo'))
    <div class="text-danger">
      {{ $errors->first('photo') }}
    </div>
  @endif

  <form method="POST" action="{{ route('send_image_judgment') }}" enctype="multipart/form-data">
    {{ csrf_field() }}
    <input type="file" name="photo"><br>
    <button type="submit" class="btn btn-primary text-dark">送信</button>
  </form>
  <a href="{{ route('image_reading') }}"><button type="submit" class="btn btn-success text-dark">撮影に戻る</button></a>
  <!-- ↑code end↑ -->
@endsection
<!-- ↑中身のコンテンツ終了↑ -->

@section('script')<!-- スクリプトの読み込み -->
