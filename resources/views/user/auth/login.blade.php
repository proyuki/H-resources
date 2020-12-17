@extends('layouts.logo_header')

@section('title', 'スタッフログイン H-resources')

@section('content')
<section class="sign-up container">
  <div class="sign-up-box">
    <h2 class="sign-up-context">シフト提出・打刻・給料明細を<br>アプリで簡単管理</h2>

    <form class="sign-up-form" method="POST" action="{{ route('user.login') }}">
      @csrf

      <h3 class="sign-up-sub-context">ログイン</h3>
      <dl class="sign-up-list">

        <dt class="sign-up-item-title">メールアドレス</dt>
        <dd class="sign-up-item-input">
          <input id="email" type="email" name="email" value="{{ old('email') }}" required autocomplete="email"
            autofocus>

          @error('email')
          <span>
            <strong>{{ $message }}</strong>
          </span>
          @enderror
        </dd>

        <dt class="sign-up-item-title">パスワード</dt>
        <dd class="sign-up-item-input">
          <input id="password" type="password" name="password" required autocomplete="current-password">

          @error('password')
          <span>
            <strong>{{ $message }}</strong>
          </span>
          @enderror
        </dd>
      </dl>

      <div class="user-login">
        <button class="button-link" type="submit">確定</button>
      </div>
    </form>

    <div class="user-login-under">
      <button class="button-link" type="submit">管理者の方はこちら</button>
    </div>
    
  </div>
</section>
@endsection