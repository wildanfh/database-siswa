@extends('app')
@section('content')
<main class="bg-gray-100 min-h-screen">
  <div class="container mx-auto px-4 py-12">
    <div class="mx-auto max-w-md bg-white rounded-lg shadow-lg">
      <h3 class="text-center text-2xl font-medium text-gray-700 pt-8">Login</h3>
      <div class="px-8 py-6">
        <form method="POST" action="{{ route('login.custom') }}">
          @csrf
          <div class="mt-4">
            <label for="email" class="block text-gray-700 font-medium">Email</label>
            <input type="email" id="email" class="form-input mt-1 block w-full input-login" name="email" required autofocus>
            @if ($errors->has('email'))
            <span class="text-red-500 text-sm">{{ $errors->first('email') }}</span>
            @endif
          </div>
          <div class="mt-4">
            <label for="password" class="block text-gray-700 font-medium">Password</label>
            <input type="password" id="password" class="form-input mt-1 block w-full input-login" name="password" required>
            @if ($errors->has('password'))
            <span class="text-red-500 text-sm">{{ $errors->first('password') }}</span>
            @endif
          </div>
          <div class="mt-4">
            <label for="remember_me" class="inline-flex items-center">
              <input type="checkbox" name="remember_me" id="remember_me" class="form-checkbox h-5 w-5 text-gray-600" {{ old('remember_me') ? 'checked' : '' }}>
              <span class="ml-2 text-gray-700 font-medium">Remember me</span>
            </label>
          </div>
          <div class="mt-6">
            <button type="submit" class="w-full py-2 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-gray-700 hover:bg-gray-800 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-500">
              Sign in
            </button>
          </div>
          @if (session('error'))
          <div id="error-notification" class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative mt-3" role="alert" x-data="{ show: true, dismiss: function() { this.show = false; } }" x-show="show">
            <strong class="font-bold">Error!</strong>
            <span class="block sm:inline">{{ session('error') }}</span>
            <span id="error-close-btn" class="absolute top-0 bottom-0 right-0 px-4 py-3 cursor-pointer" x-on:click="dismiss()">
              <svg class="fill-current h-6 w-6 text-red-500" role="button" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                <title>Close</title>
                <<path d="M14.348 5.652a.999.999 0 1 0-1.414 1.414L10 9.414l-2.93 2.93a.999.999 0 1 0 1.414 1.414L11.414 11l2.93 2.93a.999.999 0 1 0 1.414-1.414L12.828 11l2.52-2.52z" />
              </svg>
            </span>
          </div>
          @endif
        </form>
      </div>
    </div>
  </div>
</main>
@endsection
