@extends('layouts.main')
@section('content')
    <form method="post" action="">
        {{@csrf_field()}}
        
        Name: <input type="text" name="name" placeholder="Name" value="{{old('name')}}"><br><br>
    @error('name')
        {{$message}}<br>
    @enderror
    
    Email: <input type="text" name="email" placeholder="email" value="{{old('email')}}"><br><br>
    @error('email')
        {{$message}} <br>
    @enderror
    
    Password: <input type="password" name="password" value="{{old('password')}}"><br><br>
    @error('password')
        {{$message}}<br>
    @enderror

    Confirm Password: <input type="password" name="conf_password" value="{{old('conf_password')}}"><br><br>
    @error('conf_password')
        {{$message}}<br>
    @enderror

    Type: <input type="radio" value="admin" name="type"> Admin <input type="radio" value="user" name="user">User<br>

        <input type="submit" value="Create">
    </form>
@endsection