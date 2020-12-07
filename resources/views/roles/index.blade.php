<!-- Stored in resources/views/child.blade.php -->

@extends('layouts.app')

@section('content')
    <table class="table table-striped">
        <thead>
            <tr>
            <th scope="col">Id</th>
            <th scope="col">Role name</th>
            </tr>
        </thead>
            @foreach ($roles-> items() as $role)
                <tr>
                    <td>{{$role->id}}</td>
                    <td>{{$role->name}}</td>
                </tr>
            @endforeach
        </tbody>
        </table>
@endsection
    
    
