@extends('AdminLayout/index')
@section('content')

<center> <h2>  Tabel Mahasiswa Informatika </h2> </center>
<br>

    <table class="table table-bordered">
        <thead class="thead-dark">
          <tr>
            <th scope="col">ID</th>
            <th scope="col"><center>NPM</center></th>
            <th scope="col"><center>Name</center></th>
            <th scope="col"><center>Class</center></th>
            <th scope="col"><center>Organization</center></th>
            <th scope="col"><center>Address</center></th>  
        </tr>
        </thead>
        <tbody>



            @foreach ($mahasiswa as $item)
          
            <tr>
            <th scope="row">{{$item->id}}</th>
            <td>{{$item->NPM}}</td>
            <td>{{$item->Name}}</td>
            <td><center>{{$item->Class}}</center></td>
            <td>{{$item->Organization}}</td>
            <td>{{$item->Address}}</td>
        
            @endforeach

        </tbody>
      </table>
    @endsection