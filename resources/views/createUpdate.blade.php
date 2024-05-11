<!-- resources/views/updates.blade.php -->

@extends('layouts.app')

@section('content')
    <div>
        <div class="w-4/5 p-4 align-middle">
            <h1 class="text-xl text-blue-800 text-center font-bold">Create an Update</h1>
            <br>
            @if ($errors->any())
                <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">
                    <strong class="font-bold">Holy smokes!</strong>
                    <br>
                    @foreach ($errors->all() as $error)
                        <span class="block sm:inline">{{ $error }}</span>
                    @endforeach
                    <span class="absolute top-0 bottom-0 right-0 px-4 py-3">
                    <svg class="fill-current h-6 w-6 text-red-500" role="button" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><title>Close</title><path d="M14.348 14.849a1.2 1.2 0 0 1-1.697 0L10 11.819l-2.651 3.029a1.2 1.2 0 1 1-1.697-1.697l2.758-3.15-2.759-3.152a1.2 1.2 0 1 1 1.697-1.697L10 8.183l2.651-3.031a1.2 1.2 0 1 1 1.697 1.697l-2.758 3.152 2.758 3.15a1.2 1.2 0 0 1 0 1.698z"/></svg>
                </span>
                </div>
                <br>
            @endif
            <br>
            <form method="POST" action="{{ route('updates.store') }}" enctype="multipart/form-data">
                @csrf
                <label class="text-xl text-blue-800">Title:</label>
                <input
                    type="text"
                    name="title"
                    class="rounded-2xl w-full p-3 my-1 shadow-md outline-none text-blue-800"
                    value="{{ old('title') }}"
                />
                <br>
                <br>
                <label class="text-xl text-blue-800">Content:</label>
                <br>
                <textarea name="content" class="rounded-2xl w-full p-3 my-1 shadow-md text-blue-800">{{ old('content') }}</textarea>
                <br>
                <input type="file" name="image" class="form-control mt-5">
                <br>
                <button type="submit" class="gradient font-bold rounded-2xl shadow-md p-3 my-1 w-2/6 text-white mt-5">
                    Add Update
                </button>
            </form>
            <h1 class="text-xl text-blue-800 my-2 text-center font-bold">All Updates</h1>
            <table class="table-auto border-2 border-green-800 p-2">
                <thead>
                <tr class="table-auto border-2 border-green-800 p-2">
                    <td class="table-auto border-2 border-green-800 p-2">Title</td>
                    <td class="table-auto border-2 border-green-800 p-2">Content</td>
                    <td class="table-auto border-2 border-green-800 p-2">Edit</td>
                </tr>
                </thead>
                <tbody>
                @foreach ($updates as $update)
                    <tr class="table-auto border-2 border-green-800 p-2">
                        <td class="table-auto border-2 border-green-800 p-2">{{ $update->title }}</td>
                        <td class="table-auto border-2 border-green-800 p-2">{{ $update->content }}</td>
                        <td class="table-auto border-2 border-green-800 p-2">
                            <form method="POST" action="{{ route('updates.destroy', $update->id) }}">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="gradient mx-auto lg:mx-0 hover:underline bg-white text-white font-bold rounded-full my-6 py-4 px-8 shadow-lg focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out">
                                    Delete
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
        <Line></Line>
    </div>
@endsection
