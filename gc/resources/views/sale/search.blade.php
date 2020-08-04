@extends('layouts.app')<!-- layouts/app.blade.phpを継承 -->
@section('title', '条件選択')<!-- 画面名の表示 -->

<!-- ↓中身のコンテンツ開始↓ -->
@section('content')
  @section('header', '条件選択')<!-- 見出し -->
  <!-- ↓code start↓ -->
  <!-- ホーム画面へ遷移 -->
  <a href="{{ route('home') }}">
    <button type="button" class="btn btn-primary text-dark mt-5 mb-3">戻る</button>
  </a>

  <form action="{{ route('sale_result') }}" method="post" class="mt-5">
    {{ csrf_field() }}
    <div>
      <div class="row">
        <div class="col-lg-3"></div>
        <div class="col-lg-6">
          <h4>絞り込み条件（必須）</h4>
        </div>
        <div class="col-lg-3"></div>
      </div>

      <div class="row">
        <div class="col-lg-2 mb-3"></div>
        <div class="col-lg-4 mb-3">
          <div>
            @if ($errors->has('sdate'))
              <label>開始日</label>
              <input type="date" name="sdate" value="{{ old('sdate') }}" style="height: 30px; width: 180px;"></input>
              <div class="text-danger">
                {{ $errors->first('sdate') }}
              </div>
            @else
              <label>開始日</label>
              <input type="date" name="sdate" value="{{ old('sdate') }}" style="height: 30px; width: 180px;"></input>
            @endif
          </div>
        </div>

        <div class="col-lg-4 mb-3">
          <div>
            @if ($errors->has('edate'))
              <label>終了日</label>
              <input type="date" name="edate" value="{{ old('edate') }}" style="height: 30px; width: 180px;"></input>
              <div class="text-danger">
                {{ $errors->first('edate') }}
              </div>
            @else
              <label>終了日</label>
              <input type="date" name="edate" value="{{ old('edate') }}" style="height: 30px; width: 180px;"></input>
            @endif
          </div>
        </div>
        <div class="col-lg-2 mb-3"></div>
      </div>
    </div>

    <div class="row">
      <div class="col-lg-3"></div>
      <div class="col-lg-6">
        <h4>絞り込み条件（任意）</h4>
      </div>
      <div class="col-lg-3"></div>
    </div>

    <div class="row">
      <div class="col-lg-2 mb-3"></div>
      <div class="col-lg-4 mb-3">
        <input type="checkbox"> 商品名
        <p>
          <select name="id" style="height: 30px; width: 235px;">
            <option selected></option>
              @foreach ($name as $n)
                <option value="{{ $n->id }}">{{ $n->name }}</option>
              @endforeach
          </select>
        </p>
      </div>

      <div class="col-lg-4 mb-3">
        <input type="checkbox"> 一押し食材
        <p>
          <select name="rec_food" style="height: 30px; width: 235px;">
            <option selected></option>
              @foreach ($rec_food as $r)
                <option value="{{ $r->rec_food }}">{{ $r->rec_food }}</option>
              @endforeach
          </select>
        </p>
        <div class="col-lg-2 mb-3"></div>
      </div>
    </div>

    <div class="mb-3">
      <button type="submit" class="btn btn-primary text-dark">検索</button>
    </div>
  </form>
  <!-- ↑code end↑ -->
@endsection
<!-- ↑中身のコンテンツ終了↑ -->

@section('script')<!-- スクリプトの読み込み -->
