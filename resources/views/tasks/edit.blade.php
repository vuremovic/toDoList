@extends('layouts.app')

@section('content')
<div class="mt-5 col-sm-6 mx-auto">
    
    <form action="{{ route('tasks.update', ['task' => $task->id]) }}" method="POST">

        <!-- CSRF token -->
        @csrf
        @method('PUT')

        <!--  Task name -->
        <div class="form-group">
            <label for="task_name">Task Name</label>
            <input value="{{ $task->task_name }}" name="task_name" type="text" class="form-control" id="task_name">
            @if ($errors->has('task_name'))
                <span class="text-danger">{{ $errors->first('task_name') }}</span>
            @endif
        </div>

        <!--  Task description -->
        <div class="form-group">
            <label for="task_description">Task description</label>
            <input value="{{ $task->task_description }}" name="task_description" type="text" class="form-control" id="task_description">
            @if ($errors->has('task_description'))
                <span class="text-danger">{{ $errors->first('task_description') }}</span>
            @endif
        </div>

        <!-- Notes -->
        <div class="form-group">
            <label for="notes">Notes</label>
            <input value="{{ $task->notes }}" name="notes" type="text" class="form-control" id="notes">
            @if ($errors->has('notes'))
                <span class="text-danger">{{ $errors->first('notes') }}</span>
            @endif
        </div>

        <div class="form-group">
            <label for="status">Status</label>
            {{ Form::select('status_id', $statuses, $task->status_id, ['class' => 'form-control', 'id' => 'status']) }}
        </div>

        <div class="form-group">
            <label for="priorities">Priority</label>
            {{ Form::select('priority_id', $priorities, $task->priority_id, ['class' => 'form-control', 'id' => 'priority']) }}
        </div>

        <div class="mt-4">
            <button type="submit" class="btn btn-primary float-right">Save</button>
            <a href="{{ route('tasks.index') }}" class="btn btn-link">Cancel</a>
        </div>
    </form>
</div>
@endsection