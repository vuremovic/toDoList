@extends('layouts.app')

@section('content')
    <div>
        <h3 class="mt-3">Task detail</h3>
        <ul class="list-unstyled">
            <li>Name: {{ $task->task_name }}</li>
            <li>Description: {{ $task->task_description }}</li>
            <li>Notes: {{ $task->notes }}</li>
            <li>Status: {{$task->status->name}}</li>
            <li>Priority: {{$task->priority->name}}</li>
            <li>Category: {{ $task->category->name }}</li>
        </ul>

        <a href="{{ url()->previous() }}" class="btn btn-outline-primary">Back</a>
    </div>
@endsection