@extends('layouts.app')

@section('content')
    <div>
        <h3 class="mt-3">Reminder detail</h3>
        <ul class="list-unstyled">
            <li>Nuber of days: {{ $reminder->number_of_days }}</li>
        </ul>

        <a href="{{ url()->previous() }}" class="btn btn-outline-primary">Back</a>
    </div>
@endsection