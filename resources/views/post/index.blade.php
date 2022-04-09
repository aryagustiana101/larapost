@extends('layout.app')

@section('page_title', 'Post Page')

@section('content')
@auth
<div class="flex justify-center mb-4">
    <div class="w-8/12 bg-white p-6 rounded-lg">
        <p class="text-left text-2xl font-bold mb-4">
            Post Form
        </p>
        <form action="{{ route('post') }}" method="post">
            <div class="mb-4">
                @csrf
                <label for="body" class="sr-only">Body</label>
                <textarea name="body" id="body" cols="30" rows="4"
                    class="bg-gray-100 border-2 w-full p-4 rounded-lg @error('body') border-red-500 @enderror focus:outline-none focus:ring-4 focus:ring-gray-100"
                    placeholder="Type Something..."></textarea>
                @error('body')
                <div class="text-red-500 mt-2 text-sm">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-4">
                <button type="submit"
                    class="bg-blue-500 text-white font-semibold px-4 py-2 rounded w-auto">Post</button>
            </div>
        </form>
    </div>
</div>
@endauth

@if ($posts->count())
@foreach ($posts as $post)
<x-post :post="$post" />
@endforeach
<div class="flex justify justify-center mb-4">
    <div class="w-8/12 p-6 rounded-lg">
        <div class="mb-4">
            {{ $posts->links() }}
        </div>
    </div>
</div>
@else
<div class="flex justify-center mb-4">
    <div class="w-8/12 bg-white p-6 rounded-lg">
        <div class="mb-4">
            <p>No Post Yet!</p>
        </div>
    </div>
</div>
@endif
@endsection