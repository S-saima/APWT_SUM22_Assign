@extends('layouts.main')
@section('content')
    <form method="post" action="">
        {{@csrf_field()}}
        
       
    
    Email: <input type="text" name="email_log" placeholder="email" value="{{old('email_log')}}"><br><br>
    @error('email')
        {{$message}} <br>
    @enderror
    
    Password: <input type="password" name="password_log" value="{{old('password_log')}}"><br><br>
    @error('password')
        {{$message}}<br>
    @enderror

    

        <input type="submit" value="create">
    </form>
@endsection