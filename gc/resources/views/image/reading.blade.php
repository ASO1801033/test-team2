@extends('layouts.app')<!-- layouts/app.blade.phpを継承 -->
@section('title', '画像識別')<!-- 画面名の表示 -->

<!-- ↓中身のコンテンツ開始↓ -->
@section('content')
  @section('header', '画像識別')<!-- 見出し -->
  <!-- ↓code start↓ -->
  <!DOCTYPE html>
    <div class="camera">
      <video id="video"></video>
    </div>
    <div class="mt-3">
      <a href="{{ route('home') }}"><button class="btn btn-success text-dark">戻る</button></a>
      <button id="startbutton" class="btn btn-success text-dark">撮影</button>
    </div>
    <canvas id="canvas"></canvas>
  <script>
    let width = 320    // We will scale the photo width to this
    let height = 0     // This will be computed based on the input stream

    let streaming = false

    let video = null
    let canvas = null
    let photo = null
    let startbutton = null
    let constrains = { video: true, audio: false }
    /**
    * ユーザーのデバイスによるカメラ表示を開始し、
    * 各ボタンの挙動を設定する
    *
    */
    function startup() {
      video = document.getElementById('video')
      canvas = document.getElementById('canvas')
      photo = document.getElementById('photo')
      startbutton = document.getElementById('startbutton')

      videoStart()

      video.addEventListener('canplay', function(ev){
        if (!streaming) {
          height = video.videoHeight / (video.videoWidth/width)

          video.setAttribute('width', width)
          video.setAttribute('height', height)
          canvas.setAttribute('width', width)
          canvas.setAttribute('height', height)
          streaming = true
        }
    }, false)

    // 「撮影」ボタンをとる挙動を定義
    startbutton.addEventListener('click', function(ev){
      takepicture()
      ev.preventDefault()
    }, false);

    clearphoto()
    }

    /**
    * カメラ操作を開始する
    */
    function videoStart() {
    streaming = false
    navigator.mediaDevices.getUserMedia(constrains)
    .then(function(stream) {
        video.srcObject = stream
        video.play()
    })
    .catch(function(err) {
        console.log("An error occured! " + err)
    })
    }
    /**
    * canvasの写真領域を初期化する
    */
    function clearphoto() {
      let context = canvas.getContext('2d')
      context.fillStyle = rgba(0,0,0,0)
      context.fillRect(0, 0, canvas.width, canvas.height)
    }

    /**
    * カメラに表示されている現在の状況を撮影する
    */
    function takepicture() {
      let context = canvas.getContext('2d')
        canvas.width = width
        canvas.height = height
        context.drawImage(video, 0, 0, width, height)
        send()
    }
    var imageType = "image/png";
    var fileName = Date.now();

    function send() {
      // base64エンコードされたデータを取得 「data:image/png;base64,iVBORw0k～」
      var base64 = canvas.toDataURL();
      // base64データをblobに変換
      var blob = Base64toBlob(base64);
      // blobデータをa要素を使ってダウンロード
      saveBlob(blob, fileName);
    }

    // Base64データをBlobデータに変換
    function Base64toBlob(base64)
    {
      // カンマで分割して以下のようにデータを分ける
      // tmp[0] : データ形式（data:image/png;base64）
      // tmp[1] : base64データ（iVBORw0k～）
      var tmp = base64.split(',');
      // base64データの文字列をデコード
      var data = atob(tmp[1]);
      // tmp[0]の文字列（data:image/png;base64）からコンテンツタイプ（image/png）部分を取得
      var mime = tmp[0].split(':')[1].split(';')[0];
      //  1文字ごとにUTF-16コードを表す 0から65535 の整数を取得
      var buf = new Uint8Array(data.length);
      for (var i = 0; i < data.length; i++) {
        buf[i] = data.charCodeAt(i);
      }
      // blobデータを作成
      var blob = new Blob([buf], { type: mime });
      return blob;
    }

    // 画像のダウンロード
    function saveBlob(blob, fileName)
    {
      var url = (window.URL || window.webkitURL);
      // ダウンロード用のURL作成
      var dataUrl = url.createObjectURL(blob);
      // イベント作成
      var event = document.createEvent("MouseEvents");
      event.initMouseEvent("click", true, false, window, 0, 0, 0, 0, 0, false, false, false, false, 0, null);
      // a要素を作成
      var a = document.createElementNS("http://www.w3.org/1999/xhtml", "a");
      // ダウンロード用のURLセット
      a.href = dataUrl;
      // ファイル名セット
      a.download = fileName;
      // イベントの発火
      a.dispatchEvent(event);
      //オブジェクトURLの削除
      URL.revokeObjectURL(dataUrl);

      location.href = "http://127.0.0.1:8000/image/judgment";
    }
    startup()
</script>
  <!-- ↑code end↑ -->
@endsection
<!-- ↑中身のコンテンツ終了↑ -->

@section('script')<!-- スクリプトの読み込み -->
