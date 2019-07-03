@extends('layouts.app')
@section('title')
一覧
@endsection
@section('content')
  <h1 class="text-center">絶対にサービスを完成させるぞ</h1>
  <div class="container">
<table>
  <tr><th>Name</th><th>Price</th></tr>
  @foreach($products as $product)
  <tr>
  <td>   {{ $product->name }} </td>
  <td>   {{ $product->price}} </td>
  <td> <a href="/home/{{ $product->id }}" class="btn btn-primary">詳細へ</a></td>
</tr>
  @endforeach
</table>
@endsection