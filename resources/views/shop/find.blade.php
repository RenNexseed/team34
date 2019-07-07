<!DOCTYPE html>
<html>
<head>
  <title></title>
</head>
<body>


  
  <table>

  <td>{{ $products->name }}</td>
  <td> <img src="storage/{{ $products->picture_path }}"> </td>
  <td> {{ $products->description }}</td>

  </table>

</body>
</html>