<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Home') }}
        </h2>
    </x-slot>

    @section('content')
    <div class="flex justify-center items-center h-screen">
            <div class="container mx-auto my-4 p-4">
            @if($posts->isEmpty())
                <p class="text-gray-600">No posts available.</p>
            @else
                @foreach ($posts as $post)
                    <div class="post mb-6 bg-white p-4 rounded-lg shadow-md">
                        <div class="flex items-center mb-4">
                            <img src="{{ $post->user->profile ? asset('profile_images/'.$post->user->profile) : asset('assets/icons/user.svg') }}" alt="User Avatar" class="w-6 h-6 rounded-full mr-3">
                            <div>
                                <h5 class="text-lg font-semibold text-gray-900">{{ $post->user ? $post->user->fullName : 'Unknown User' }}</h5>
                                <p class="text-gray-600 text-sm">{{ $post->created_at ? $post->created_at->diffForHumans() : 'Unknown Time' }}</p>
                            </div>
                        </div>
                        <p class="text-gray-800 mb-2">{{ $post->content }}</p>
                        @if ($post->image)
                        <img src="{{ asset('/posts/images/' . $post->image) }}" class="w-48 h-auto rounded-lg mb-1" alt="Post Image">
                        @endif
                        <div class="flex items-center justify-between mt-2">
                            <div class="flex items-center">
                                <p class="text-gray-600 mr-2"><i class="fa fa-heart text-red-500"></i> {{ $post->likes_number }}</p>
                                <p class="text-gray-600 mr-2"><i class="fa fa-comment text-blue-500"></i> {{ $post->comments->count() }}</p>
                                <p class="text-gray-600"><i class="fa fa-share text-green-500"></i> {{ $post->shares_number }}</p>
                            </div>
                            <div class="flex items-center">
                                <button class="text-blue-500 hover:underline">Like</button>
                                <button class="text-blue-500 hover:underline ml-4">Comment</button>
                                <button class="text-blue-500 hover:underline ml-4">Share</button>
                            </div>
                        </div>
                        <hr class="my-4">
                        <h6 class="text-lg font-semibold text-gray-800">Comments:</h6>
                        @foreach ($post->comments as $comment)
                            <div class="comment mb-4 bg-gray-100 p-3 rounded-lg">
                                <small class="text-gray-600">
                                    <div class="flex items-center mb-4">

                                    @if($comment->user && $comment->user->profile)
                                        <img src="{{ asset('profile_images/'.$comment->user->profile) }}" class="w-6 h-6 rounded-full mr-1" alt="User Avatar">
                                    @else
                                        <img src="{{ asset('assets/icons/user.svg') }}" class="w-6 h-6 rounded-full mr-1" alt="User Avatar">
                                    @endif
                                    <div class="text-lg font-semibold text-gray-900">{{ $comment->user ? $comment->user->fullName : 'Unknown User' }}
                                    </div>  
                                    {{ $comment->created_at ? $comment->created_at->diffForHumans() : 'Unknown Time' }}
                                </div>  
                                </small>
                                <p class="text-gray-800">{{ $comment->comment }}</p>
                               
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
            @endif
    </div>
</div>
    @endsection
    
</x-app-layout>
