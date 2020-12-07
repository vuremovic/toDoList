@extends('layouts.app')

@section('content')
    <table class="table table-striped">
        <thead>
            <tr>
            <th scope="col">Id</th>
            <th scope="col">Status name</th>
            </tr>
        </thead>
            @foreach ($statuses-> items() as $status)
                <tr>
                    <td>{{$status->id}}</td>
                    <td>{{$status->name}}</td>
                </tr>
            @endforeach
        </tbody>
        </table>
@endsection