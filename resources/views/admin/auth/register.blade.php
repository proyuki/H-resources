@extends('layouts.logo_header')

@section('title', 'アカウント新規作成 H-resources')

@section('content')
<section class="sign-up">
  <div class="sign-up-box">
    <h2 class="sign-up-context">シフト提出・打刻・給料明細を<br>アプリで簡単管理</h2>

    <form class="sign-up-form" method="POST" action="{{ route('admin.register') }}">
      @csrf

      <h3 class="sign-up-sub-context">アカウント新規作成</h3>
      <dl class="sign-up-list">

        <dt class="sign-up-item-title">会社名</dt>
        <dd class="sign-up-item-input">
          <input id="company" type="text" name="company" value="{{ old('company') }}"  required autocomplete="company" autofocus>

          @error('company')
          <span>
            <strong>{{ $message }}</strong>
          </span>
          @enderror
        </dd>

        <dt class="sign-up-item-title">代表者名</dt>
        <dd class="sign-up-item-input">
          <input id="representative" type="text" name="representative" value="{{ old('representative') }}" required autocomplete="representative">

          @error('representative')
          <span>
            <strong>{{ $message }}</strong>
          </span>
          @enderror
        </dd>

        <dt class="sign-up-item-title">メールアドレス</dt>
        <dd class="sign-up-item-input">
          <input id="email" type="email" name="email" value="{{ old('email') }}" required autocomplete="email">
        </dd>

        <dt class="sign-up-item-title">パスワード</dt>
        <dd class="sign-up-item-input">
          <input id="password" type="password" name="password" required autocomplete="new-password">

          @error('password')
          <span>
            <strong>{{ $message }}</strong>
          </span>
          @enderror
        </dd>

        <dt class="sign-up-item-title">パスワード(確認)</dt>
        <dd class="sign-up-item-input">
          <input id="password-confirm" type="password" name="password_confirmation" required autocomplete="new-password">
        </dd>
      </dl>
      <div class="sign-up-send">
        <button class="button-link" type="submit">登録</button>
      </div>
    </form>
  </div>
</section>
@endsection