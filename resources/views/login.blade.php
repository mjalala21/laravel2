@extends('layout.master')
@section('content')
<h1>
    Login
</h1>

<form method="POST" action="{{route(('do.login'))}}">
         @csrf
        <div class="form-group">
          <label for="exampleInputEmail1">Email address</label>
          <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
          <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Password</label>
          <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
        </div>
        <div class="form-group form-check">
          <input type="checkbox" class="form-check-input" id="exampleCheck1">
          <label class="form-check-label" for="exampleCheck1">Remember me</label>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
{{-- <h2>
    {{session()->get('message')}}
</h2>
<h2>
    User Name : {{ session()->get('username')}}
</h2>
<h2>
    User Id : {{ session()->get('userId')}}

</h2> --}}
@endsection