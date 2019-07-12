@extends('layouts.app')
@section('title')
@endsection
@section('content')

<table>

  @foreach($products as $product)
                        
  <td>{{ $product->id }}</td>
  <td> <img src="storage/{{ $product->picture_path }}"> </td>
  <td> {{ $product->description }}</td>

  @yield('list')
  @endforeach

</table>

@endsection