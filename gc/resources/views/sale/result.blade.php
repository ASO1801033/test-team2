@extends('layouts.app')<!-- layouts/app.blade.phpを継承 -->
@section('title', '表示')<!-- 画面名の表示 -->

<!-- ↓中身のコンテンツ開始↓ -->
@section('content')
  @section('header', '売上表示')<!-- 見出し -->
  <!-- ↓code start↓ -->
  <!-- 条件選択画面へ遷移 -->
  <a href="{{ route('sale_condition') }}">
    <button class="btn btn-primary text-dark mt-5 mb-3">条件選択変更</button>
  </a>

  @if (count($data) == 0)
    <div class="text-danger mt-5">
      選択条件に該当するデータはありません
    </div>
  @else
    <div class="row mt-5">
      <div class="col-8 offset-2 offset-2">
        @if (empty ($rec_food) && empty ($name))
          <!-- 期間のみ -->
          <b>期間：{{ $sdate }} 〜 {{ $edate }}</b>
          <table class="table table-bordered mt-3">
            <thead>
              <tr>
                <th scope="col" style="width:50%;" class="text-center"><big>日付</big></th>
                <th scope="col" style="width:50%;" class="text-center"><big>金額</big></th>
              </tr>
            </thead>
            <tbody>
              @foreach($data as $d)
                <tr>
                  <td class="align-middle text-center">{{ $d->date }}</td>
                  <td class="align-middle text-center">{{ number_format($d->total_price) }}円</td>
                </tr>
              @endforeach
            </tbody>
          </table>
        @elseif (empty ($name))
          <!--期間＋一押し食材 -->
          <b>期間：{{ $sdate }} 〜 {{ $edate }}</b><br>
          <b>一押し食材：{{ $rec_food }}</b>
          <table class="table table-bordered mt-3">
            <thead>
              <tr>
                <th scope="col" style="width:20%;" class="text-center"><big>日付</big></th>
                <th scope="col" style="width:30%;" class="text-center"><big>商品名</big></th>
                <th scope="col" style="width:25%;" class="text-center"><big>個数</big></th>
                <th scope="col" style="width:25%;" class="text-center"><big>金額</big></th>
              </tr>
            </thead>
            <tbody>
              @foreach($data as $d)
                <tr>
                  <td class="align-middle text-center">{{ $d->date }}</td>
                  <td class="align-middle text-center">{{ $d->name }}</td>
                  <td class="align-middle text-center">{{ number_format($d->total_quantity) }}個</td>
                  <td class="align-middle text-center">{{ number_format($d->total_price) }}円</td>
                </tr>
              @endforeach
            </tbody>
          </table>
        @else
          <!--期間＋商品名 -->
          <b>期間：{{ $sdate }} 〜 {{ $edate }}</b><br>
          <b>商品名：{{ $name }}</b>
          <table class="table table-bordered mt-3">
            <thead>
              <tr>
                <th scope="col" style="width:33%;" class="text-center"><big>日付</big></th>
                <th scope="col" style="width:34%;" class="text-center"><big>個数</big></th>
                <th scope="col" style="width:33%;" class="text-center"><big>金額</big></th>
              </tr>
            </thead>
            <tbody>
              @foreach($data as $d)
                <tr>
                  <td class="align-middle text-center">{{ $d->date }}</td>
                  <td class="align-middle text-center">{{ number_format($d->total_quantity) }}個</td>
                  <td class="align-middle text-center">{{ number_format($d->total_price) }}円</td>
                </tr>
              @endforeach
            </tbody>
          </table>
        @endif
      </div>
    </div>
  @endif
  <!-- ↑code end↑ -->
@endsection
<!-- ↑中身のコンテンツ終了↑ -->

@section('script')<!-- スクリプトの読み込み -->
