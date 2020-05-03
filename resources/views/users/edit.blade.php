@extends('layouts.app')

@section('content')

   
            <div class="card">
                <div class="card-header">My profile</div>

                <div class="card-body">
                    @include('partials.errors')
     <form action="{{route('users.update-profile')}}" method="POST">
     @csrf
     @method('PUT')           
      <div class="form-group">
        <label for="name">Name</label>
        <input type="text" class="form-control" name="name" id="name" value="{{$user->name}}">
      </div>
      <div class="form-group">
        <label for="about">About me</label>
        <textarea name="about" id="about" class="form-control">
            {{$user->about}}
        </textarea>
    <button type="submit" class="btn btn-success mt-2">Update profile</button>    

</div>
      </div>
                </div>
            </div>
   

@endsection
