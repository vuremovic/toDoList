@extends('layouts.app')

@section('content')
    <a href="{{ route('statuses.create') }}" class="btn btn-primary mt-5">Add</a>
    <table class="table table-striped mt-3">
        <thead>
            <tr>
            <th scope="col">Id</th>
            <th scope="col">Status name</th>
            </tr>
        </thead>
            @foreach ($statuses -> items() as $status)
                <tr>
                    <td>{{$status->id}}</td>
                    <td>{{$status->name}}</td>
                    <td>
                        <a class="btn btn-outline-primary" href="{{ route('statuses.show', ['status' => $status->id]) }}">Details</a>
                        <a class="btn btn-outline-primary" href="{{ route('statuses.edit', ['status' => $status->id]) }}">Edit</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
        </table>
@endsection