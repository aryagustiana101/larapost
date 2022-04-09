@extends('layout.app')

@section('page_title', 'Login Page')

@section('content')
<div class="flex justify-center">

    <div class="w-4/12 bg-white p-6 rounded-lg">
        <p class="text-center text-3xl font-bold mb-4">
            Login Form
        </p>
        @if (session()->has('status'))
        <div class="bg-red-500 p-4 rounded-lg mb-4 text-white text-center">
            {{ session('status') }}
        </div>
        @endif
        <form action="{{ route('login') }}" method="post">
            @csrf
            <div class="mb-4">
                <label for="email" class="sr-only">Email</label>
                <input type="text" name="email" id="email" placeholder="Type email..."
                    class="bg-gray-100 border-2 w-full p-4 rounded-lg font-semibold focus:outline-none focus:ring-4 focus:ring-gray-100 @error('email') border-red-500 @enderror"
                    value="{{ old('email') }}">
                @error('email')
                <div class="text-red-500 mt-2 text-sm">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="mb-4">
                <label for="password" class="sr-only">Password</label>
                <input type="password" name="password" id="password" placeholder="Type password..."
                    class="bg-gray-100 border-2 w-full p-4 rounded-lg font-semibold focus:outline-none focus:ring-4 focus:ring-gray-100 @error('password') border-red-500 @enderror">
                @error('password')
                <div class="text-red-500 mt-2 text-sm">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="mb-4">
                <div class="flex items-center">
                    <input type="checkbox" name="remember" id="remember" class="mr-2">
                    <label for="remember">Remember Me</label>
                </div>
            </div>
            <div class="mb-4">
                <button type="submit"
                    class="bg-blue-500 text-white font-semibold px-4 py-3 rounded w-full">Login</button>
            </div>
        </form>
    </div>

</div>
@endsection