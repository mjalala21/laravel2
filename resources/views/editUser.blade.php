
@extends('layout.master')
@section('content')
<h1>
    Edit User
</h1>


  <div class="contact-form">  
<form action="{{route('updateUser')}}" method="POST">
    @csrf
    <input type="hidden" name="userId" value= "{{encrypt($user->userId)}}">
    <div class="form-group">
      <label for="">Name</label>
      <input type="text" class="form-control"  name="name" value="{{$user->name}}"id="" placeholder="Enter Name" required>
    </div>
    <div class="form-group">
      <label for="">Phone</label>
      <input type="text" class="form-control" name="phone" value="{{$user->phone}}" id="" placeholder="Enter Phone Number">
    </div>
    <div class="form-group">
        <label for="">Address</label>
        <input type="textextra" class="form-control"  name="address" value="{{$user->address}}"id="" placeholder="Address">
      </div>
      <div class="form-group">
        <label for="">Date of Birth</label>
        <input type="date" class="form-control" name="dob" value="{{$user->dob}}" id="" placeholder="enter dob">
      </div>
      <div class="form-group">
        <label for="">Status</label>
        <select class="form-select"name="status">
            <option @if($user->status == 1)selected @endif value="1">Active</option>
            <option @if($user->status == 0)selected @endif value="0">InActive</option>
        </select>
      </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>
@endsection