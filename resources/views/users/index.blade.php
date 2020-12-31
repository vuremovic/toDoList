@extends('layouts.app')

@section('content')
  <table class="table table-striped mt-5">
    <thead>
      <tr>
        <th>Id</th>
        <th>Name / Email</th>
        <th>Role</th>
        <th>Actions</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($users->items() as $user)
          <tr>
              <td>{{ $user->id }}</td>
              <td>{{ $user->first_name }} {{ $user->last_name }}<br />{{ $user->email }}</td>
              <td>{{ $user->role->name }}</td>
              <td>
                <a class="btn btn-outline-primary" href="{{ route('users.show', ['user' => $user->id]) }}">Details</a>
                <a class="btn btn-outline-primary" href="{{ route('users.edit', ['user' => $user->id]) }}">Edit</a>
                
              </td>
          </tr>
      @endforeach
    </tbody>
  </table>
@endsection