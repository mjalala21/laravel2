@extends('layout.master')
@section('content')
<h1>

   User View

</h1>

<div class="card">
    <div class="card-body">
         <ul>
            <li> Name : {{  $user->name}}</li>
            <li> Phone : {{ $user->phone}}</li>
            <li> Email: {{ $user->email}}</li>
        </ul>
        <ul>
            <li>
                Education : {{ $user->userDetails->education}}
            </li>
            <li>
                Country : {{ $user->userDetails->country}}

            </li>
            <li>
                State: {{ $user->userDetails->state}}

            </li>
        </ul> 
        {{-- <ul>
            <li> Name : {{ $userDetails->user->name}}</li>
            <li> Phone : {{ $userDetails->user->phone}}</li>
            <li> Email: {{ $userDetails->user->email}}</li>
        </ul>
        <ul>
            <li>
                Education : {{ $userDetails->education}}
            </li>
            <li>
                Country : {{ $userDetails->country}}

            </li>
            <li>
                State: {{ $userDetails->state}}

            </li>
        </ul> --}}
    </div>
</div>
@endsection