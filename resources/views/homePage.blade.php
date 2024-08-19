@extends('layout.master')
@section('content')
    <div class="row">
        <div class="col-md-12">
            @if (session()->has('message'))
                <span class="alert alert-success mt-2 mb-1">
                    {{ session()->get('message') }}
                </span>
            @endif
        </div>
        <div class="col-md-6">
            <h1 class="heading-1">
                List of Users</h1>
        </div>
        <div class="col-md-12 ">
            <img style="height:700px; width:100%" src="{{asset('Images/image2.avif')}}" alt="">
        </div>
        <p></p>
        <div class="col-md-6 text-end">
            <a class="btn btn-success" href="{{ route('createUser') }}"> Create New User</a>

        </div>
        <p></p>
        <div class="card">
            <div class="card-body">


            </div>

            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">Phone</th>
                        <th scope="col">Address</th>
                        <th scope="col">Date Of Birth</th>
                        <th scope="col">Status</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $user)
                        <tr>
                            {{-- <th scope="row">{{ $loop->iteration }}</th> --}}
                            <th scope="row">{{ $users->firstitem()+ $loop->index }}</th>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->phone }}</td>
                            <td>{{ $user->address }}</td>
                            <td>{{ $user->dob }}</td>
                            <td>
                                {{-- <span
                                    class="{{ $user->status == 1 ? 'text-success' : 'text-danger' }}">{{ $user->status_text }}
                                    </span> </td>
                            <td><a class="btn btn-primary"
                                    href="{{ route('editUser', ['id' => encrypt($user->userId)]) }}">Edit</a><a
                                    class="btn btn-danger"
                                    href="{{ route('deleteUser', ['id' => encrypt($user->userId)]) }}">Delete</a></a> --}}
                               @if ($user->trashed())
                               <span class="text-light fw-900 bg-danger p-2">Trashed</span>
                               @else
                               <span class="{{$user->status ==1 ? 'text-success' : 'text-danger'}}">
                                {{$user->statusText}}
                               </span>
                                </td>
                                @endif
                                <td>
                                    @if($user->trashed())
                                    <a class="btn btn-success mb-1" href="{{route('activateUser',['id'=>encrypt($user->userId)])}}">Activate User</a>
                                    @endif
                                    <a class="btn btn-primary" href="{{route('viewUser',['id'=>encrypt($user->userId)])}}">Edit</a>

                                    <a class="btn btn-dark" href="{{route('viewUser',['id'=>encrypt($user->userId)])}}">View</a>
                                    <a class="btn btn-warning" href="{{ route('deleteUser', ['id' => encrypt($user->userId)]) }}">Delete</a>
                                    <a class="btn btn-danger" href="{{ route('forceDelete', ['id' => encrypt($user->userId)]) }}"> Force Delete</a>
                                </td>
                        </tr>
                    @endforeach

                </tbody>
            </table>
            {{$users->links()}}
        </div>
    </div>
@endsection
