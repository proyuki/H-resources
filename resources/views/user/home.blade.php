@extends('layouts.user.app')

@section('title', '通知一覧 H-resources')

@section('content')
<!-- 通知一覧 -->
<section class="user-main-box">
  <div class="main-box-top">
    <h3 class="main-box-top-left">通知一覧</h3>
    <ul class="main-box-top-right">
      <li class="main-box-top-box">全て</li>
      <li class="main-box-top-box">2020-11-30</li>
    </ul>
  </div>

  <ul class="notification-lists">
    <li class="notification-list">
      <datetime class="datetime" datetime="2020-12-01 11:00:00">2020-12-01 11:00</datetime>
      <div class="stamping-box miss-attendance">打刻忘れ</div>
      <p class="notification-list-context">出勤打刻が漏れています。</p>
    </li>
    <li class="notification-list">
      <datetime class="datetime" datetime="2020-11-30 22:47:00">2020-11-30 22:47</datetime>
      <div class="stamping-box leave">退勤打刻</div>
      <p class="notification-list-context">退勤の打刻を行いました。</p>
    </li>
    <li class="notification-list">
      <datetime class="datetime" datetime="2020-11-30 10:50:00">2020-11-30 10:50</datetime>
      <div class="stamping-box attendance">出勤打刻</div>
      <p class="notification-list-context">出勤の打刻を行いました。</p>
    </li>
    <li class="notification-list">
      <datetime class="datetime" datetime="2020-11-28 17:15:00">2020-11-28 17:15</datetime>
      <div class="stamping-box shift-submission">シフト提出</div>
      <p class="notification-list-context">シフトの提出を行いました。</p>
    </li>
    <li class="notification-list">
      <datetime class="datetime" datetime="2020-11-27 22:47:00">2020-11-27 22:47</datetime>
      <div class="stamping-box leave">退勤打刻</div>
      <p class="notification-list-context">退勤の打刻を行いました。</p>
    </li>
    <li class="notification-list">
      <datetime class="datetime" datetime="2020-11-27 10:50:00">2020-11-27 10:50</datetime>
      <div class="stamping-box attendance">出勤打刻</div>
      <p class="notification-list-context">出勤の打刻を行いました。</p>
    </li>
    <li class="notification-list">
      <datetime class="datetime" datetime="2020-11-26 22:47:00">2020-11-26 22:47</datetime>
      <div class="stamping-box leave">退勤打刻</div>
      <p class="notification-list-context">退勤の打刻を行いました。</p>
    </li>
    <li class="notification-list">
      <datetime class="datetime" datetime="2020-11-26 10:50:00">2020-11-26 10:50</datetime>
      <div class="stamping-box attendance">出勤打刻</div>
      <p class="notification-list-context">出勤の打刻を行いました。</p>
    </li>
    <li class="notification-list">
      <datetime class="datetime" datetime="2020-11-25 22:47:00">2020-11-25 22:47</datetime>
      <div class="stamping-box leave">退勤打刻</div>
      <p class="notification-list-context">退勤の打刻を行いました。</p>
    </li>
    <li class="notification-list">
      <datetime class="datetime" datetime="2020-11-25 10:50:00">2020-11-25 10:50</datetime>
      <div class="stamping-box attendance">出勤打刻</div>
      <p class="notification-list-context">出勤の打刻を行いました。</p>
    </li>
  </ul>
</section>
@endsection