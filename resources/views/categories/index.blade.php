@extends('layouts.app')

@section('content')
    <a href="{{ route('categories.create') }}" class="btn btn-primary mt-5">Add</a>
    <table class="table table-striped mt-3">
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
                    <td>
                        <a class="btn btn-outline-primary" href="{{ route('categories.show', ['category' => $category->id]) }}">Details</a>
                        <a class="btn btn-outline-primary" href="{{ route('categories.edit', ['category' => $category->id]) }}">Edit</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
        </table>
@endsection