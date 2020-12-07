@extends('layouts.app')

@section('content')
    <table class="table table-striped">
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
                </tr>
            @endforeach
        </tbody>
        </table>
@endsection