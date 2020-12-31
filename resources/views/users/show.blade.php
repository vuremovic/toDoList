@extends('layouts.app')


@section('content')

<div class="mt-5">
    <h1 class="text-center">{{ $user->first_name }} {{ $user->last_name }}</h1>
    <img src="https://picsum.photos/300" alt="profile image" class="d-block mx-auto rounded-circle">
    
    
    
</div>

    

   
@endsection