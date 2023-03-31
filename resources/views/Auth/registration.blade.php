@extends('app')
@section('content')
<main class="bg-gray-100 min-h-screen">
  <div class="container mx-auto px-4 py-12">
    <div class="mx-auto max-w-md bg-white rounded-lg shadow-lg">
      <h3 class="text-center text-2xl font-medium text-gray-700 pt-8">Register</h3>
      <div class="px-8 py-6">
        <form action="{{ route('register.custom') }}" method="POST">
          @csrf
          <div class="mt-4">
            <label for="name" class="block text-gray-700 font-medium">Name</label>
            <input type="text" id="name" class="form-input mt-1 block w-full input-login" name="name" required autofocus>
            @if ($errors->has('name'))
            <span class="text-red-500 text-sm">{{ $errors->first('name') }}</span>
            @endif
          </div>
          <div class="mt-4">
            <label for="email" class="block text-gray-700 font-medium">Email</label>
            <input type="email" id="email" class="form-input mt-1 block w-full input-login" name="email" required>
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
            <label for="remember" class="inline-flex items-center">
              <input type="checkbox" name="remember" id="remember" class="form-checkbox h-5 w-5 text-gray-600" {{ old('remember') ? 'checked' : '' }}>
              <span class="ml-2 text-gray-700 font-medium">Remember me</span>
            </label>
          </div>
          <div class="mt-6">
            <button type="submit" class="w-full py-2 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-gray-700 hover:bg-gray-800 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-500">
              Sign up
            </button>
            <a href="{{ route('login') }}" class="underline text-slate-600 hover:text-slate-800 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-500 text-base mt-3 inline-block font-normal">
              Login
            </a>
          </div>
        </form>
      </div>
    </div>
  </div>
</main>

@endsection
