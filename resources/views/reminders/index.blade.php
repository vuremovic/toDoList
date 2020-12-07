@extends('layouts.app')

@section('content')
    <table class="table table-striped">
        <thead>
            <tr>
            <th scope="col">Id</th>
            <th scope="col">Number of days</th>
            </tr>
        </thead>
            @foreach ($reminders-> items() as $reminder)
                <tr>
                    <td>{{$reminder->id}}</td>
                    <td>{{$reminder->number_of_days}}</td>
                </tr>
            @endforeach
        </tbody>
        </table>
@endsection