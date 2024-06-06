<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Home') }}
        </h2>
    </x-slot>

    @foreach ($posts as $post)
        <div class="post mb-6">
            <h5 class="text-lg font-semibold text-gray-900">{{ $post->post_name }}</h5>
            <p class="text-gray-600">by {{ $post->user->name }} | {{ $post->created_at->diffForHumans() }}</p>
            <p class="text-gray-800">{{ $post->content }}</p>
            @if ($post->image)
                <img src="{{ asset('storage/' . $post->image) }}" class="w-full h-auto mt-2 rounded" alt="Post Image">
            @endif
            <div class="flex items-center mt-2">
                <p class="text-gray-600">Likes: {{ $post->likes_number }} | Shares: {{ $post->shares_number }}</p>
            </div>
            <hr class="my-4">
            <h6 class="text-lg font-semibold text-gray-800">Comments:</h6>
            @foreach ($post->comments as $comment)
                <div class="comment mb-4">
                    <p class="text-gray-800">{{ $comment->comment }}</p>
                    <small class="text-gray-600">by {{ $comment->user->name }} | {{ $comment->created_at->diffForHumans() }}</small>
                </div>
            @endforeach
            <form method="POST" action="{{ route('comments.store') }}" class="mt-4">
                @csrf
                <input type="hidden" name="post_id" value="{{ $post->id }}">
                <div class="form-group">
                    <textarea class="form-control w-full rounded border-gray-300 p-2" name="comment" rows="2" placeholder="Add a comment..."></textarea>
                </div>
                <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded mt-2 hover:bg-blue-600">Comment</button>
            </form>
        </div>
    @endforeach
</x-app-layout>
