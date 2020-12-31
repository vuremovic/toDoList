@extends('layouts.app')

@section('content')
<div class="mt-5 col-sm-6 mx-auto">
    
    <form action="{{ route('users.update', ['user' => $user->id]) }}" method="POST">

        <!-- CSRF token -->
        @csrf
        @method('PUT')

        <!-- user First name -->
        <div class="form-group">
            <label for="first_name">First Name</label>
            <input value="{{ $user->first_name }}" name="first_name" type="text" class="form-control" id="first_name">
            @if ($errors->has('name'))
                <span class="text-danger">{{ $errors->first('name') }}</span>
            @endif
        </div>

        <!-- user Last name -->
        <div class="form-group">
            <label for="last_name">Last Name</label>
            <input value="{{ $user->last_name }}" name="last_name" type="text" class="form-control" id="last_name">
            @if ($errors->has('name'))
                <span class="text-danger">{{ $errors->first('name') }}</span>
            @endif
        </div>

        <!-- email -->
        <div class="form-group">
            <label for="email">Email</label>
            <input value="{{ $user->email }}" name="email" type="text" class="form-control" id="email">
            @if ($errors->has('email'))
                <span class="text-danger">{{ $errors->first('email') }}</span>
            @endif
        </div>

        <div class="form-group">
            <label for="role">Role</label>
            {{ Form::select('role_id', $roles, $user->role_id, ['class' => 'form-control', 'id' => 'role']) }}
        </div>

        <div class="mt-4">
            <button type="submit" class="btn btn-primary float-right">Save</button>
            <a href="{{ route('users.index') }}" class="btn btn-link">Cancel</a>
        </div>
    </form>
</div>
@endsection