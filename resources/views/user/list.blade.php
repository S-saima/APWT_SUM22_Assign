@extends('layouts.main')
@section('content')
<table border="1">
    <tr>
        <th>Id</th>
        <th>Name</th>
        <th>email</th>
    </tr>
    @foreach($customers as $st)
        <tr>
            <td>{{$st->id}}</td>
            <td><a href="{{route('user.details',['id'=>$st->id])}}">{{$st->name}}</a></td>
            <td>{{$st->email}}</td>
        </tr>
    @endforeach
</table>
@endsection