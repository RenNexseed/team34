@extends('layouts.app')  <!-- layouts.appを呼び出している -->
@section('style')  <!-- layout.appのスタイルを呼び出している -->
@endsection

  <link href="{{ asset('css/explain.css') }}" rel="stylesheet">
@section('content')
  <div class="container" style="margin-top: 70px">
    <main>
      <img>
    </main>

    <nav>
      <ul>
        <li id="play">Play</li>
        <li id="pause" class="hidden">Pause</li>
        <li id="prev">&lt;</li>
        <li id="next">&gt;</li>

      </ul>
    </nav>

    <ul class="thumbnails"></ul>
                <p><a href="{{ url('home') }}" class="btn btn-primary btn-lg">はじめる</a></p>

  </div>

  <script src="{{ asset('js/explain.js') }}" defer></script>
@endsection