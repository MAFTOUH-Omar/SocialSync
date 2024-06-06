@extends('layouts.app')

@section('content')
<div class="bg-white shadow rounded p-4">
    <h2 class="text-xl font-semibold text-gray-800">{{ __('Create Post') }}</h2>
    <form method="POST" action="{{ route('posts.store') }}" enctype="multipart/form-data" class="mt-4">
        @csrf
        <div class="form-group mb-4">
            <label for="post_name" class="block text-gray-700">Post Name</label>
            <input type="text" name="post_name" id="post_name" class="form-control w-full rounded border-gray-300 p-2" required>
        </div>
        <div class="form-group mb-4">
            <label for="type" class="block text-gray-700">Type</label>
            <input type="text" name="type" id="type" class="form-control w-full rounded border-gray-300 p-2" required>
        </div>
        <div class="form-group mb-4">
            <label for="content" class="block text-gray-700">Content</label>
            <textarea name="content" id="content" rows="5" class="form-control w-full rounded border-gray-300 p-2" required></textarea>
        </div>
        <div class="form-group mb-4">
            <label for="image" class="block text-gray-700">Image</label>
            <input type="file" name="image" id="image" class="form-control w-full rounded border-gray-300 p-2">
        </div>
        <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">Create Post</button>
    </form>
</div>
@endsection
