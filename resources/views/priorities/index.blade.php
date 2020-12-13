@extends('layouts.app')

@section('content')
    <a href="{{ route('priorities.create') }}" class="btn btn-primary mt-5">Add</a>
    <table class="table table-striped mt-3">
        <thead>
            <tr>
            <th scope="col">Id</th>
            <th scope="col">Priority name</th>
            <th>Actions</th>
            </tr>
        </thead>
            @foreach ($priorities-> items() as $priority)
                <tr>
                    <td>{{$priority->id}}</td>
                    <td>{{$priority->name}}</td>
                    <td>
                        <a class="btn btn-outline-primary" href="{{ route('priorities.show', ['priority' => $priority->id]) }}">Details</a>
                        <a class="btn btn-outline-primary" href="{{ route('priorities.edit', ['priority' => $priority->id]) }}">Edit</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
        </table>
@endsection