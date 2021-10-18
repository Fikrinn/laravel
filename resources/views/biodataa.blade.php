<html><body>
<center><h1>Data Post</h1></center>
@foreach($query as $item)
  <h2>{{$item->id}}</h2>
  <p>{{$item->nama}}</p>
  {{$item->gender}}
  {{$item->address}}
  {{$item->religion}}
  {{$item->age}}
  {{$item->hobby}}
    <hr>
@endforeach
</body>
</html>
