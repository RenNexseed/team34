@extends('layouts.app')
@section('title')
一覧
@endsection
@section('content')
  <h1 class="text-center">絶対にサービスを完成させるぞ</h1>
  <div class="container">

    <table class="table col-12 table-hover table-info table-bordered">
      <tr>
        <th>名前</th>
        <th>値段</th>
        <th>詳細</th>
        <th>削除</th>
        <th>写真</th>
      </tr>
      @foreach($products as $product)
      <tr>
        <td>   {{ $product->name }} </td>
        <td>   {{ $product->price}} </td>
        <td> <a href="/home/{{ $product->id }}" class="btn btn-primary">詳細へ</a></td>
        <td> <a href="/products/{{ $product->id }}/delete" class="btn btn-danger my-2">削除</td>
          <td> <img src="storage/{{ $product->picture_path }}"> </td>
        </tr>
        @endforeach
      </table>

