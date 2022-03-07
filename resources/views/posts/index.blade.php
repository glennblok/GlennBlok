<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">

                    @extends('posts.layout')

    <div class="row">
        <div class="col-lg-12 margin-tb">

            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('posts.create') }}"> Create New Post</a>
            </div>
        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <table class="table table-bordered">
        <tr>

            <th>Title</th>
            <th>Description</th>

        </tr>
        @foreach ($posts as $post)
            <tr>
                <td>{{ $post->titel }}</td>
                <td>{{ $post->content }}</td>
                <td>
                    <a class="btn btn-success" style="color:white;width:80px;" href="{{ route('posts.show',$post->id) }}">Show</a>
                    <a class="btn btn-info" style="color:white;width:80px;" href="{{ route('posts.edit',$post->id) }}">Edit</a>
                    <form action="{{ route('posts.destroy',$post->id) }}" method="POST">

                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
                </div>
            </div>
        </div>
    </div>
    </x-app-layout>
