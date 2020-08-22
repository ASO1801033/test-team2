@extends('layouts.app')<!-- layouts/app.blade.phpを継承 -->
@section('title', '商品詳細')<!-- 画面名の表示 -->

<!-- ↓中身のコンテンツ開始↓ -->
@section('content')
  @section('header', '商品詳細')<!-- 見出し -->
  <!-- ↓code start↓ -->
  <!-- 商品一覧画面へ遷移 -->
  <a href="{{ route('product_index') }}">
    <button class="btn btn-primary text-dark mt-5 mb-3">戻る</button>
  </a>

  <div class="row">
    <div class="col-8 offset-2 offset-2">
      <table class="table table-bordered"><!-- striped -->
        <tbody>
          @foreach ($cakes as $d)
            <tr>
              <th scope="row" class="text-center align-middle" style="width:50%;"><big>商品名</big></th>
              <td class="text-center" style="width:50%;">{{ $d->name }}</td>
            </tr>
            <tr>
              <th scope="row" class="text-center align-middle"><big>単価</big></th>
              <td class="text-center">{{ number_format($d->cost) }}円</td>
            </tr>
            <tr>
              <th scope="row" class="text-center align-middle"><big>一押し食材</big></th>
              <td class="text-center">{{ $d->rec_food }}</td>
            </tr>
            <tr>
              <th scope="row" class="text-center align-middle"><big>販売状態</big></th>
              @if($d->flg == 0)
                <td class="text-center">停止中</td>
              @else
                <td class="text-center">販売中</td>
              @endif
            </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>

  <button type="button" class="btn btn-danger text-dark" data-toggle="modal" data-target="#testModal">削除</button>
  <!-- 変更画面へ遷移 -->
  <a href="{{ route('product_edit', $d->id) }}">
    <button class="btn btn-success text-dark" type="button">編集</button>
  </a>

  <!-- ↓モーダル開始 -->
  <div class="modal fade" id="testModal" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h4>商品削除確認</h4>
        </div>
        <div class="modal-body">
          <label>本当に削除しますか？<br>関連する売上明細情報も削除されます！</label>
        </div>
        <div class="modal-footer">
          <form action="{{ route('product_delete') }}" method="post">
            {{ csrf_field() }}
            <button type="button" class="btn btn-default text-dark" data-dismiss="modal">キャンセル</button>
            <input type="hidden" name="id" value="{{ $d->id }}">
            <button type="submit" class="btn btn-danger text-dark">削除する</button>
          </form>
        </div>
      </div>
    </div>
  </div>
  <!-- ↑モーダル終了 -->
  <!-- ↑code end↑ -->
@endsection
<!-- ↑中身のコンテンツ終了↑ -->

@section('script')<!-- スクリプトの読み込み -->
