@extends('template')
@section('title','todo_show')
@section('todoView')
<table border="1" width="50%" cellpadding="10px">
    <tr>
        <td>Id</td>
        <td>name</td>
        <td>eamil</td>
        <td>phone no.</td>
        <td>pin no.</td>
        <td>edit</td>


    </tr>
    @foreach($todoArr as $todo)
    <tr>
        <td>{{$todo->id}}</td>
        <td>{{$todo->uname}}</td>
        <td>{{$todo->uemail}}</td>
        <td>{{$todo->uphone}}</td>
        <td>{{$todo->upin}}</td>
        <td><a href="./edit/{{$todo->id}}">edit</td>
        <td><a href="./delete/{{$todo->id}}">delete</td>

    </tr>

    @endforeach
</table>
@endsection