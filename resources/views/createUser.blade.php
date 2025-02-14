@extends('layout.master')
@section('content')
    <h1>
        Create User
    </h1>


    <div class="contact-form">
        <form action="{{ route('saveUser') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="">Name</label>
                <input type="text" class="form-control
                 @error('name') is-invalid @enderror"
                  name="name" id=""
                    placeholder="Enter Name">
                @error('name')
                    <span class='alert-danger'>
                        {{$message}}
                    </span>
                @enderror
            </div>
            <div class="form-group">
                <label for="">Phone</label>
                <input type="text" class="form-control @error('name') is-invalid @enderror"  name="phone" id="" placeholder="Enter Phone Number">
                @error('phone')
                <span class='alert-danger'>
                    {{$message}}
                </span>
            @enderror
            </div>
            <div class="form-group">
                <label for="">Address</label>
                <input type="textextra" class="form-control @error('name') is-invalid @enderror" name="address" id="" placeholder="Address">
                @error('address')
                <span class='alert-danger'>
                    {{$message}}
                </span>
            @enderror
            </div>
            <div class="form-group">
                <label for="">Date of Birth</label>
                <input type="date" class="form-control @error('name') is-invalid @enderror" name="dob" id="" placeholder="enter dob">
                @error('dob')
                <span class='alert-danger'>
                    {{$message}}
                </span>
            @enderror
            </div>
            <div class="form-group">
                <label for="">Status</label>
                <select class="form-select"name="status">
                    <option value="1">Active</option>
                    <option value="0">InActive</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection
