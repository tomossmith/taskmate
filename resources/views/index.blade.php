<x-guest-layout>
  <div class="min-h-screen flex flex-col justify-center items-center">
    <!-- Header -->
    <header class="mb-16">
      <h1 class="text-center">
        <x-application-logo />
      </h1>
      <p class="text-lg text-center text-gray-600 mt-4">
        The desktop companion to get things done!
      </p>
    </header>

    <!-- Buttons -->
    <div class="flex flex-col sm:flex-row justify-center items-center gap-4">
      @if (Auth::check())
        <a href="{{ route('dashboard') }}" class="btn btn-primary btn-lg rounded-full py-4 px-12 font-semibold bg-blue-300 hover:bg-gray-200 transition-colors duration-300">
          View Tasks
        </a>
      @else
        <a href="{{ route('register') }}" class="btn btn-primary btn-lg rounded-full py-4 px-12 font-semibold bg-blue-300 hover:bg-gray-200 transition-colors duration-300">
          Sign Up
        </a>
        <a href="{{ route('login') }}" class="btn btn-secondary btn-lg rounded-full py-4 px-12 font-semibold bg-blue-300 hover:bg-gray-200 transition-colors duration-300">
          Log In
        </a>
      @endif
    </div>
  </div>
</x-guest-layout>