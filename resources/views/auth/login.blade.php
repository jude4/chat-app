@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-5 mt-12">
            <div class="card">
                <div class="w-full">
                    <p class="p-4 font-semibold text-3xl text-center">Login to your Chat app</p>
                    <hr class="w-56 mx-auto" />
                    <p class="mt-4 text-center text-2xl font-semibold text-gray-600">Welcome Back!</p>
                    <form method="POST" action="{{ route('login') }}" class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
                        @csrf
                        <div class="mb-4">
                            <label class="block text-gray-700 text-sm font-bold mb-2" for="email">
                                Email address
                            </label>
                            <input value="{{ old('email') }}" name="email" class="@error('email') border-red-500 text-red-500 @enderror shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="email" type="text" placeholder="email">
                            @error('email')
                            <span class="text-red-500" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="mb-6">
                            <label class="block text-gray-700 text-sm font-bold mb-2" for="password">
                                Password
                            </label>
                            <input name="password" class="@error('password') border-red-500 text-red-500 @enderror shadow appearance-none border border-red-500 rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline" id="password" type="password" placeholder="******************">
                            @error('password')
                            <span class="text-red-500" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="flex items-center justify-between">
                            <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit">
                                Sign In
                            </button>
                            {{-- @if (Route::has('password.request'))
                            <a class="inline-block align-baseline font-bold text-sm text-blue-500 hover:text-blue-800" href="{{ route('password.request') }}">
                            Forgot Password?
                            </a>
                            @endif --}}
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
