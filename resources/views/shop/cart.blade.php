<!DOCTYPE html>
<html>
<head>
  <title></title>
</head>
<body>


  @foreach($carts as $cart)
  <p> {{ $cart->amount }} </p>
  <p> {{ $cart->id }} </p>
  @endforeach

</body>
</html>