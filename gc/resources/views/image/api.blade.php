<!DOCTYPE html>
@extends('layouts.app')<!-- layouts/app.blade.phpを継承 -->
@section('title', '販売価格表示')<!-- 画面名の表示 -->
<html lang="ja">
<head>
<meta charset="utf-8">
<meta name="csrf-token" content="{{ csrf_token() }}">
<title>submit</title>
</head>
<!--
<script src="https://gateau-chocolat.cognitiveservices.azure.com/customvision/v3.0/prediction/c4e4cb71-6972-4fb5-9461-d2ae7949a486/detect/iterations/gc/image"></script>
-->



<!-- ↓中身のコンテンツ開始↓ -->
@section('content')
  @section('header', '商品合計')<!-- 見出し -->
  <!-- ↓code start↓ -->
  <!-- ↑code end↑ -->
@endsection
<!-- ↑中身のコンテンツ終了↑ -->

@section('script')<!-- スクリプトの読み込み -->
