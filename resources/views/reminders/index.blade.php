@extends('layouts.app')

@section('content')
    <a href="{{ route('reminders.create') }}" class="btn btn-primary mt-5">Add</a>
    <table class="table table-striped mt-3">
        <thead>
            <tr>
            <th scope="col">Id</th>
            <th scope="col">Number of days</th>
            <th>Actions</th>
            </tr>
        </thead>
            @foreach ($reminders-> items() as $reminder)
                <tr>
                    <td>{{$reminder->id}}</td>
                    <td>{{$reminder->number_of_days}}</td>
                    <td>
                        <a class="btn btn-outline-primary" href="{{ route('reminders.show', ['reminder' => $reminder->id]) }}">Details</a>
                        <a class="btn btn-outline-primary" href="{{ route('reminders.edit', ['reminder' => $reminder->id]) }}">Edit</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
        </table>
@endsection