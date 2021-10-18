<html>
<ul>
 @foreach($pilih as $data)
  Id : {{$data['id']}}<br>
  Nama : {{$data['name']}}<br>
  Username : {{$data['username']}}<br>
  Email : {{$data['email']}}<br>
  Alamat : {{$data['alamat']}}<br>
  Mata pelajaran:
    @foreach($data['mapel'] as $mapel)
    <li>{{$mapel}}</li>
    @endforeach
   <hr>
 @endforeach
 </ul>
</html>
