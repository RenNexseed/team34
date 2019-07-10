@extends('layouts.app')
@section('title')
@endsection
@section('content')

<table>

  <td>{{ $products->id }}</td>
  <td> <img src="storage/{{ $products->picture_path }}"> </td>
  <td> {{ $products->description }}</td>

</table>

@endsection