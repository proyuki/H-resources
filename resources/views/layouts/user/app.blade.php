<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  {{-- CSRF Token --}}
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>
    @yield('title')
  </title>

  {{-- Scripts --}}
  <script src="{{ asset('js/app.js') }}" defer></script>

  {{-- Style --}}
  <link rel="stylesheet" href="{{ asset('css/reset.css') }}">
  <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>

<body>

  {{-- header --}}
  <header class="header">
    <div class="main-header user-container">
      <div class="header-left">
        <div class="logo-container">
          <img src="../../images/logo.png" alt="ロゴ画像">
        </div>
        <h2 class="company-name">株式会社H-resources 山田太郎 様</h2>
      </div>
  
      <div class="header-right">
        <ul class="header-right-lists">
          <li class="header-right-list">通知一覧</li>
          <li class="header-right-list">シフト管理</li>
          <li class="header-right-list">打刻管理</li>
          <li class="header-right-list">給料管理</li>
          <li class="header-right-list">アカウント</li>
        </ul>
      </div>
    </div>
  </header>

  @yield('content')

</body>

</html>