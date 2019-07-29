@extends('base.index')
@section('content')
<div class="row">
    <div class="col">
    <h2>TABLA DE USUARIOS</h2>
    </div>
</div>
<div class="row">
    <div class="col-10">
    <a class="btn btn-danger" href="/users/create"> <i class="fas fa-user-plus"></i> Create New Users</a>
    <br>
    </div>
</div>
<div class="row">
    <div class="col">
    <table class="table">
    <thead class="thead-dark">
        <tr>
        <th scope="col">Nro</th>
        <th scope="col">Nombre</th>
        <th scope="col">Correo</th>
        <th scope="col"></th>
        </tr>
    </thead>
    <tbody>
    @foreach($users as $user)
       <tr>       
           <td>{{$user-> id}}</td>
           <td>{{$user-> name}}</td>
           <td>{{$user-> email}}</td>
           <td>            
            <a class='btn btn-info btn-xs'><span  class="glyphicon glyphicon-edit"></span> Edit</a>
            <a class="btn btn-danger btn-xs"><span class="glyphicon glyphicon-remove"></span>Supr</a>
           </td>
       </tr>
        @endforeach
    </tbody>       
    </table>
    </div>
</div>
@endsection()
