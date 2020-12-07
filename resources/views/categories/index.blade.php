@extends('layouts.app')

@section('content')
    <table class="table table-striped">
        <thead>
            <tr>
            <th scope="col">Id</th>
            <th scope="col">Category name</th>
            </tr>
        </thead>
            @foreach ($categories-> items() as $category)
                <tr>
                    <td>{{$category->id}}</td>
                    <td>{{$category->name}}</td>
                </tr>
            @endforeach
        </tbody>
        </table>
@endsection