@extends('layouts.app')

@section('content')
    <table class="table table-striped">
        <thead>
            <tr>
            <th scope="col">Id</th>
            <th scope="col">Priority name</th>
            </tr>
        </thead>
            @foreach ($priorities-> items() as $priority)
                <tr>
                    <td>{{$priority->id}}</td>
                    <td>{{$priority->name}}</td>
                </tr>
            @endforeach
        </tbody>
        </table>
@endsection