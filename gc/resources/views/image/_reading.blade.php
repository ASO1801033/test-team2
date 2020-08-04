@extends('layouts.app')<!-- layouts/app.blade.phpを継承 -->
@section('title', '画像識別')<!-- 画面名の表示 -->

<!-- ↓中身のコンテンツ開始↓ -->
@section('content')
  @section('header', '画像識別')<!-- 見出し -->
  <!-- ↓code start↓ -->
  <!-- enctype="multipart/form-data"はファイルデータをアップロードに必須 -->

  @if (session('success'))
    <div class="alert alert-success">

      <a href="{{ session('success') }}" target="_blank">{{ session('success') }}</a>
    </div>
  @endif

  <form method="POST" action="/image" enctype="multipart/form-data">
    {{ csrf_field() }}
    <input type="file" name="photo">
    <input type="submit">
  </form>

  <!-- ↓案1 -->
  <style>/*
  <button type="button" id="video_start1" class="demo">自分側のカメラの映像を表示</button>
  <button type="button" id="video_start2" class="demo">向こう側のカメラの映像を表示</button>
  <button type="button" id="video_stop" class="demo">表示を止める</button>

  <video id="camera" width="300" height="200" class="demo" autoplay playsinline ></video>

  <script>

  window.onload = () => {

      const video  = document.querySelector("#camera");

      // 手前のカメラの設定
      const constraints1 = {
        audio: false,
        video: {
          width: 300,
          height: 200,
          facingMode: "user",
        }
      };

      // 向こう側のカメラの設定
      const constraints2 = {
        audio: false,
        video: {
          width: 300,
          height: 200,
          facingMode: { exact: "environment" },
        }
      };


      //ボタンが押されたらカメラの映像を<video>に写す
      document.querySelector("#video_start1").addEventListener("click", () => {
        navigator.mediaDevices.getUserMedia(constraints1)
        .then( (stream) => {
          video.srcObject = stream;
        });
      });

      //ボタンが押されたら向こう側カメラの映像を<video>に写す
        document.querySelector("#video_start2").addEventListener("click", () => {
        navigator.mediaDevices.getUserMedia(constraints2)
        .then( (stream) => {
          video.srcObject = stream;
        });
      });

      //ボタンが押されたらカメラの映像を止める
      document.querySelector("#video_stop").addEventListener("click", () => {
        video.srcObject.getTracks().forEach(track => track.stop());
      });


    };
  </script>
  */</style>
  <!-- ↑案1 -->

  <!-- ↓案2 -->
  <div class="camera">
      <video id="video"></video>
  </div><br>
  <a href="/"><button class="btn btn-success text-dark mt-5 mb-3">戻る</button></a>
  <button id="startbutton" class="btn btn-success text-dark"><a href="/image/price">撮影</a></button><br>
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
if (width && height) {
  canvas.width = width
  canvas.height = height
  context.drawImage(video, 0, 0, width, height)
  send()
} else {
  clearphoto()
}
}
function send() {
  data = canvas.toDataURL('image/png').replace(/^.*,/, '')
  $.ajax('/read.php',{ //Ajaxリクエストを送信するURLを指定
      method: 'POST',
      data: {image: data}
  }).then(res => {
      $('#readStr').val(res)
  })
}
startup()
</script>
  <!-- ↑案2 -->
  <!-- ↑code end↑ -->
@endsection
<!-- ↑中身のコンテンツ終了↑ -->

@section('script')<!-- スクリプトの読み込み -->
