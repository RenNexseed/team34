@extends('layouts.app')
@section('title')
@endsection
@section('content')
<div class="container-fluid bg-img">
    <aside id="fh5co-hero">
              <div class="text-center">
                <div class="slider-text-inner container1">
                  <img alt="logo" src="{{url('../images/logo2.png')}}" class="img2"><br>
                </div>
                  <a href="{{ url('home') }}" class="btn btn-primary btn-lg container2">はじめる</a>
              </div>
    </aside>
  </div>

@endsection