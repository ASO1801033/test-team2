@extends('layouts.app')<!-- layouts/app.blade.phpを継承 -->
@section('title', '販売価格表示')<!-- 画面名の表示 -->

<!-- ↓中身のコンテンツ開始↓ -->
@section('content')
  @section('header', '商品合計')<!-- 見出し -->
  <!-- ↓code start↓ -->
  <form action="/image/reading" method="get">
  合計！
  <table border="1" align="center">
      <tr>
        <th>日付</th><th>商品名</th><th>単価</th><th>一押し素材</th><th>購入個数</th><th>金額</th>
      </tr>
      <tr>
        <td>
        2020/07/15
        </td>
        <td>
        高級肉
        </td>
        <td>
        5万
        </td>
        <td>
        肉
        </td>
        <td>
        100
        </td>
        <td>
        500万
        </td>
      </tr>
    </table>
    <br>
    <table border="1" align="center">
    <tr>
        <th>合計</th><th>100</th><th>500万</th>
      </tr>
    </table>
</form>
  <a href="/image"><button class="btn btn-success btn-sm">やり直し</button></a>
  <a href="/image"><button class="btn btn-success btn-sm">次に会計</button></a>
  <!-- ↑code end↑ -->
@endsection
<!-- ↑中身のコンテンツ終了↑ -->

@section('script')<!-- スクリプトの読み込み -->
