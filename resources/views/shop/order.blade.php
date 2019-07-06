<!DOCTYPE html>
<html>
<head>

  <title></title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>

  <p>カートのページじゃけんが</p>
  <table>
    <tr><th>カートの中身</th></tr>
  @foreach($orders as $order)
      <tr>
        <!-- <td>   {{ $order->id }} </td> -->
        <!-- <td>   {{ $order->amount }} </td> -->
        <td>   {{ $order->amount }}                     </td>
        <td>  {{ $order->product->description}}</td>
        <td> <img src="storage/{{ $order->product->picture_path }}"> </td>
        <!-- <td> <img src="storage/{{ $order->picture_path }}"> </td>
        <td> <a href="/orders/{{ $order->id }}/delete" class="btn btn-danger my-2">削除</td> -->
        <td> <a href="/orders/{{ $order->id }}/delete" class="btn btn-danger my-2">削除</td>
          
       </tr>
  @endforeach     
  </table> 

</body>
</html>