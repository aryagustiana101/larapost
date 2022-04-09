@extends('layout.app')

@section('page_title', 'User Post Page')

@section('content')
<div class="flex justify-center mb-4">
    <div class="w-8/12 bg-white p-6 rounded-lg">
        <h1 class="text-xl font-semibold mb-1">{{ $user->name }}</h1>
        <p class="text-sm">Posted {{ $posts->count() }} {{ Str::plural('post', $posts->count()) }}</p>
        <p class="text-sm">Like earn {{ $user->receivedLikes()->count() }}
            {{ Str::plural('like', $user->receivedLikes()->count()) }}
        </p>
    </div>
</div>

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
            <p>This User Has No Post Yet!</p>
        </div>
    </div>
</div>
@endif

@endsection