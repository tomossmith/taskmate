<x-guest-layout>
    <div class="text-center pt-5">
        <x-application-logo />
    </div>

    <div class="pt-5 text-center">
        @if (Auth::check())
        <a href="{{ route('dashboard') }}">
            <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 mx-2 rounded">
                View Tasks
            </button>
        </a>
        @else
        <a href="{{ route('login') }}">
            <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 mx-2 rounded">
                Login
            </button>
        </a>
        <a href="{{ route('register') }}">
            <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 mx-2 rounded">
                Register
            </button>
        </a>
        @endif
    </div>
</x-guest-layout>