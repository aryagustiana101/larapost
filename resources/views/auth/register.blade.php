@extends('layout.app')

@section('page_title', 'Register Page')

@section('content')
<div class="flex justify-center">

    <div class="w-4/12 bg-white p-6 rounded-lg">
        <p class="text-center text-3xl font-bold mb-4">
            Register Form
        </p>
        <form action="{{ route('register') }}" method="post">
            @csrf
            <div class="mb-4">
                <label for="name" class="sr-only">Name</label>
                <input type="text" name="name" id="name" placeholder="Type name..."
                    class="bg-gray-100 border-2 w-full p-4 rounded-lg font-semibold focus:outline-none focus:ring-4 focus:ring-gray-100 @error('name') border-red-500 @enderror"
                    value="{{ old('name') }}">
                @error('name')
                <div class="text-red-500 mt-2 text-sm">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="mb-4">
                <label for="username" class="sr-only">Username</label>
                <input type="text" name="username" id="username" placeholder="Type username..."
                    class="bg-gray-100 border-2 w-full p-4 rounded-lg font-semibold focus:outline-none focus:ring-4 focus:ring-gray-100 @error('username') border-red-500 @enderror"
                    value="{{ old('username') }}">
                @error('username')
                <div class="text-red-500 mt-2 text-sm">
                    {{ $message }}
                </div>
                @enderror
            </div>
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
                <label for="password_confirmation" class="sr-only">Password Confirmation</label>
                <input type="password" name="password_confirmation" id="password_confirmation"
                    placeholder="Repeat password..."
                    class="bg-gray-100 border-2 w-full p-4 rounded-lg font-semibold focus:outline-none focus:ring-4 focus:ring-gray-100">
            </div>
            <div class="mb-4">
                <button type="submit"
                    class="bg-blue-500 text-white font-semibold px-4 py-3 rounded w-full">Register</button>
            </div>
        </form>
    </div>

</div>
@endsection