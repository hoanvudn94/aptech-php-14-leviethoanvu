<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="{{ asset('css/BS4.css') }}" rel="stylesheet">
    
</head>
<body>
  <div class="container">
    <div class="row">
      <div class="col-12">
      <table class="table">
  <thead>
    <tr>
      <th scope="col">#id</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
    </tr>
  </thead>
  <tbody>
  @foreach ($nguoi_dung as $key => $user)
    <tr>
      <td>{{ $key+1 }}</td>
      <td>{{$user->name}} </td>
      <td>{{$user->email}} </td> 
      <td><form action="http://localhost/aptech-php-14-leviethoanvu/php/2018-09-29/public/xoaNguoiDung/{{$user->id}}" method="POST">
{{csrf_field()}}
<button>xoa</button>
</form></td> 
<td><form action="http://localhost/aptech-php-14-leviethoanvu/php/2018-09-29/public/xemMotNguoiDung/{{$user->id}}" method="POST">
{{csrf_field()}}
<button>xem</button>
</form></td> 
    </tr>
  @endforeach
  </tbody>
</table>

      </div>
    </div>
  </div>
  



</body>
</html>