@extends('layouts.admin.app')

@section('title', '通知一覧 H-resources')

@section('content')
<section class="main-box">
  <div class="main-box-top">
    <h3 class="main-box-top-left">通知一覧</h3>
    <ul class="main-box-top-right">
      <li class="main-box-top-box">全員</li>
      <li class="main-box-top-box">全て</li>
      <li class="main-box-top-box">2020-11-30</li>
    </ul>
  </div>

  <ul class="notification-lists">
    <li class="notification-list">
      <datetime class="datetime" datetime="2020-12-01 11:00:00">2020-12-01 11:00</datetime>
      <div class="stamping-box miss-attendance">打刻忘れ</div>
      <p class="notification-list-context">家電量販店A　山田 太郎さんの出勤打刻が漏れています。</p>
    </li>
    <li class="notification-list">
      <datetime class="datetime" datetime="2020-12-01 10:47:00">2020-12-01 10:47</datetime>
      <div class="stamping-box attendance">出勤打刻</div>
      <p class="notification-list-context">家電量販店A　佐藤 太郎さんが出勤の打刻を行いました。</p>
    </li>
    <li class="notification-list">
      <datetime class="datetime" datetime="2020-12-01 10:39:00">2020-12-01 10:39</datetime>
      <div class="stamping-box attendance">出勤打刻</div>
      <p class="notification-list-context">家電量販店A　吉田 太郎さんが出勤の打刻を行いました。</p>
    </li>

    <li class="notification-list">
      <datetime class="datetime" datetime="2020-11-30 22:47:00">2020-11-30 22:47</datetime>
      <div class="stamping-box leave">退勤打刻</div>
      <p class="notification-list-context">家電量販店A　山田 太郎さんが退勤の打刻を行いました。</p>
    </li>
    <li class="notification-list">
      <datetime class="datetime" datetime="2020-11-30 20:32:00">2020-11-30 20:32</datetime>
      <div class="stamping-box leave">退勤打刻</div>
      <p class="notification-list-context">家電量販店A　佐藤 太郎さんが退勤の打刻を行いました。</p>
    </li>
    <li class="notification-list">
      <datetime class="datetime" datetime="2020-11-30 20:10:00">2020-11-30 20:10</datetime>
      <div class="stamping-box leave">退勤打刻</div>
      <p class="notification-list-context">家電量販店A　吉田 太郎さんが退勤の打刻を行いました。</p>
    </li>

    <li class="notification-list">
      <datetime class="datetime" datetime="2020-11-30 10:50:00">2020-11-30 10:50</datetime>
      <div class="stamping-box attendance">出勤打刻</div>
      <p class="notification-list-context">家電量販店A　山田 太郎さんが出勤の打刻を行いました。</p>
    </li>
    <li class="notification-list">
      <datetime class="datetime" datetime="2020-11-30 10:47:00">2020-11-30 10:47</datetime>
      <div class="stamping-box attendance">出勤打刻</div>
      <p class="notification-list-context">家電量販店A　佐藤 太郎さんが出勤の打刻を行いました。</p>
    </li>
    <li class="notification-list">
      <datetime class="datetime" datetime="2020-11-30 10:39:00">2020-11-30 10:39</datetime>
      <div class="stamping-box attendance">出勤打刻</div>
      <p class="notification-list-context">家電量販店A　吉田 太郎さんが出勤の打刻を行いました。</p>
    </li>

    <li class="notification-list">
      <datetime class="datetime" datetime="2020-11-28 17:15:00">2020-11-28 17:15</datetime>
      <div class="stamping-box shift-submission">シフト提出</div>
      <p class="notification-list-context">家電量販店A　山田 太郎さんがシフトの提出を行いました。</p>
    </li>
    <li class="notification-list">
      <datetime class="datetime" datetime="2020-11-28 12:54:00">2020-11-28 12:54</datetime>
      <div class="stamping-box shift-submission">シフト提出</div>
      <p class="notification-list-context">家電量販店A　佐藤 太郎さんがシフトの提出を行いました。</p>
    </li>
    <li class="notification-list">
      <datetime class="datetime" datetime="2020-11-28 03:32:00">2020-11-28 03:32</datetime>
      <div class="stamping-box shift-submission">シフト提出</div>
      <p class="notification-list-context">家電量販店A　吉田 太郎さんがシフトの提出を行いました。</p>
    </li>

    <li class="notification-list">
      <datetime class="datetime" datetime="2020-11-27 22:47:00">2020-11-27 22:47</datetime>
      <div class="stamping-box leave">退勤打刻</div>
      <p class="notification-list-context">家電量販店A　山田 太郎さんが退勤の打刻を行いました。</p>
    </li>
    <li class="notification-list">
      <datetime class="datetime" datetime="2020-11-27 20:32:00">2020-11-27 20:32</datetime>
      <div class="stamping-box leave">退勤打刻</div>
      <p class="notification-list-context">家電量販店A　佐藤 太郎さんが退勤の打刻を行いました。</p>
    </li>
    <li class="notification-list">
      <datetime class="datetime" datetime="2020-11-27 20:10:00">2020-11-27 20:10</datetime>
      <div class="stamping-box leave">退勤打刻</div>
      <p class="notification-list-context">家電量販店A　吉田 太郎さんが退勤の打刻を行いました。</p>
    </li>

    <li class="notification-list">
      <datetime class="datetime" datetime="2020-11-27 10:50:00">2020-11-27 10:50</datetime>
      <div class="stamping-box attendance">出勤打刻</div>
      <p class="notification-list-context">家電量販店A　山田 太郎さんが出勤の打刻を行いました。</p>
    </li>
    <li class="notification-list">
      <datetime class="datetime" datetime="2020-11-27 10:47:00">2020-11-27 10:47</datetime>
      <div class="stamping-box attendance">出勤打刻</div>
      <p class="notification-list-context">家電量販店A　佐藤 太郎さんが出勤の打刻を行いました。</p>
    </li>
    <li class="notification-list">
      <datetime class="datetime" datetime="2020-11-27 10:39:00">2020-11-27 10:39</datetime>
      <div class="stamping-box attendance">出勤打刻</div>
      <p class="notification-list-context">家電量販店A　吉田 太郎さんが出勤の打刻を行いました。</p>
    </li>
  </ul>
</section>

@include('layouts.admin.right_column')
@endsection
