@extends('layouts.logo_header')

@section('title', 'H-resources')

@section('content')
<div class="user-container">

  <section class="top top-box">
    <div class="top-left-box">
      <h2 class="top-left-title">シフト提出・打刻・給料明細を<br>アプリで簡単管理</h2>
    </div>

    <div class="top-right-box">
      <div class="top-right-up-box">
        <h3 class="top-right-title">新規登録はこちら</h3>
        <button class="button-link"><a href="">新規登録</a></button>
      </div>
      <div class="top-right-down-box">
        <h3 class="top-right-title">ログインはこちら</h3>
        <div class="top-right-down-button-box">
          <button class="button-link"><a href="">スタッフ様</a></button>
          <button class="button-link"><a href="">管理者様</a></button>
        </div>
      </div>
    </div>
  </section>

  <div class="content">

    <section class="top content-box">
      <div class="content-image-box content-left-box">
        <img class="content-image" src="{{ asset('image/shift.png') }}" alt="シフト管理の画面">
      </div>
      <div class="content-text-box content-right-box">
        <p class="content-text">
          一目でシフトの確認ができる。<br>
          直感的な操作でシフト情報を編集。<br>
          スタッフへの共有もボタン一つ。
        </p>
      </div>
    </section>

    <section class="top content-box">
      <div class="content-text-box content-left-box">
        <p class="content-text">
          出退勤の管理を一画面で確認。<br>
          勤怠の見える化を実現。
        </p>
      </div>
      <div class="content-image-box content-right-box">
        <img class="content-image" src="{{ asset('image/stamping.png') }}" alt="打刻管理の画面">
      </div>
    </section>

    <section class="top content-box">
      <div class="content-image-box content-left-box">
        <img class="content-image" src="{{ asset('image/salary.png') }}" alt="給与管理の画面">
      </div>
      <div class="content-text-box content-right-box">
        <p class="content-text">
          スタッフ別の給料管理はもちろん、<br>
          法人全体の支払い情報も。
        </p>
      </div>
    </section>

  </div>

  <section class="top bottom-box">
    <p class="bottom-box-text">
      「シフト管理」「打刻管理」「給料管理」<br>
      ３つの機能を１つのアプリに集約。<br>
      業務の効率化はこちらから。
    </p>
    <button class="button-link"><a href="">新規登録</a></button>
  </section>

</div>

<footer class="footer">
  <p class="footer-text">© Copyright2020 H-resources All Rights Reserved.</p>
</footer>
@endsection