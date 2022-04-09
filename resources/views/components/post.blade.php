<div class="flex justify-center mb-4">
    <div class="w-8/12 bg-white p-6 rounded-lg">
        <div class="mb-4">
            <a href="{{ route('user.post', $post->user) }}" class="font-bold">{{ $post->user->name }}</a> <span
                class="text-gray-600 text-sm">{{ $post->created_at->diffForHumans()}}</span>
            <p class="mb-2">
                {{ $post->body }}
            </p>
            <div class="flex items-start">
                @auth
                @if (!$post->likeBy(auth()->user()))
                <form action=" {{ route('post.likes', $post->id) }}" method="post" class="mr-1">
                    @csrf
                    <button type="submit" class="text-blue-500">Like</button>
                </form>
                @else
                <form action="{{ route('post.likes', $post->id) }}" method="post" class="mr-1">
                    @csrf
                    @method('delete')
                    <button type="submit" class="text-blue-500">Unlike</button>
                </form>
                @endif
                @endauth
                <span class="mr-1">{{ $post->likes->count() }} {{ Str::plural('like', $post->likes->count()) }}</span>
            </div>
            @auth
            @can('delete', $post)
            <form action="{{ route('post.destroy', $post->id) }}" method="post" class="mr-1">
                @csrf
                @method('delete')
                <div class="text-right">
                    <button type="submit" class="text-blue-500">Delete</button>
                </div>
            </form>
            @endcan
            @endauth
        </div>
    </div>
</div>