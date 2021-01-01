@extends('layouts.app')

@section('content')
<div class="mt-5 col-sm-6 mx-auto">
    
    <form action="{{ route('reminders.update', ['reminder' => $reminder->id]) }}" method="POST">

        <!-- CSRF token -->
        @csrf
        @method('PUT')

        
        <div class="form-group">
            <label for="numberOfDays">Reminders</label>
            <input value="{{ $reminder->number_of_days }}" name="number_of_days" type="text" class="form-control" id="numberOfDays">
            @if ($errors->has('number_of_days'))
                <span class="text-danger">{{ $errors->first('number_of_days') }}</span>
            @endif
        </div>

        

        <button type="submit" class="btn btn-primary float-right">Save</button>
        <a href="{{ route('reminders.index') }}" class="btn btn-link">Cancel</a>
    </form>
</div>
@endsection