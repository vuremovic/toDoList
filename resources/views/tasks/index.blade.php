@extends('layouts.app')

@section('content')
    <a href="{{ route('tasks.create') }}" class="btn btn-primary mt-5">Add</a>
    <table class="table table-striped mt-3">
        <thead>
            <tr>
            <th scope="col">Id</th>
            <th scope="col">Task name</th>
            <th scope="col">Task description</th>
            <th scope="col">Notes</th>
            </tr>
        </thead>
            @foreach ($tasks-> items() as $task)
                <tr>
                    <td>{{$task->id}}</td>
                    <td>{{$task->task_name}}</td>
                    <td>{{$task->task_description}}</td>
                    <td>{{$task->notes}}</td>
                    <td>
                        <a class="btn btn-outline-primary" href="{{ route('tasks.show', ['task' => $task->id]) }}">Details</a>
                        <a class="btn btn-outline-primary" href="{{ route('tasks.edit', ['task' => $task->id]) }}">Edit</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
        </table>
@endsection