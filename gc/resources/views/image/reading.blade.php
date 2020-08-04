@extends('layouts.app')<!-- layouts/app.blade.phpを継承 -->
@section('title', '画像識別')<!-- 画面名の表示 -->

<!-- ↓中身のコンテンツ開始↓ -->
@section('content')
  @section('header', '画像識別')<!-- 見出し -->
  <!-- ↓code start↓ -->

  <!DOCTYPE html>
<html lang="ja" dir="ltr" itemscope itemtype="http://schema.org/Article">
<head>
  <meta charset="utf-8">
  <meta name="csrf-token" content="{{ csrf_token() }}">
</head>
<body>
    <div class="camera">
        <video id="video"></video>
    </div><br>
    <a href="/"><button class="btn btn-success btn-sm">戻る</button></a>
    <button id="startbutton" class="btn btn-success btn-sm">撮影</button><br>
    <canvas id="canvas">
    <textarea id="readStr"></textarea>
    </canvas>
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
  context.fillStyle = "#AAA"
  context.fillRect(0, 0, canvas.width, canvas.height)
}

/**
 * カメラに表示されている現在の状況を撮影する
 */
function takepicture() {
  let context = canvas.getContext('2d')
//  if (width && height) {
    canvas.width = width
    canvas.height = height
    context.drawImage(video, 0, 0, width, height)
    send()
//  } else {
//    clearphoto()
//  }
}
function send() {
    data = canvas.toDataURL('image/png').replace(/^.*,/, '')
    alert('send timming start' + data);

    // ajaxのcsrfセットアップ
    $.ajaxSetup({
      headers:{
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      }
    });

    $.ajax({ url:'/image/price',
        type: 'POST',
        data: {image: data}
    }).success(function(){
      alert("success");
    }).error(function(){
      alert("error");
    });

    alert('send timming end');

    // $.ajax({ url:'/',
    //     type: 'POST',
    //     data: {image: data}
    // }).then(res => {
    //   alert('send timming done');
    //     $('#readStr').val(res)
    // })
}
startup()
</script>
</body>
<!--
<form method="POST" action="/reading" enctype="multipart/form-data" >
    {{ csrf_field() }}
    <input type="file" name="photo">
    <input type="submit">
</form>
-->
  <!-- ↑code end↑ -->
@endsection
<!-- ↑中身のコンテンツ終了↑ -->

@section('script')<!-- スクリプトの読み込み -->
