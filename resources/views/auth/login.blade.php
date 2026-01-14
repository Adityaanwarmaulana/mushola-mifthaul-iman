<x-guest-layout>
    <div class="min-h-screen flex items-center justify-center bg-gray-100 px-4">

        <div class="w-full max-w-md bg-white rounded-2xl shadow-lg p-8">

            <div class="text-center mb-6">
                <h1 class="text-2xl font-bold text-green-700">
                    Login Admin
                </h1>
                <p class="text-sm text-gray-500">
                    Mushola Miftahul Iman
                </p>
            </div>

            <x-auth-session-status class="mb-4" :status="session('status')" />

            <form method="POST" action="{{ route('login') }}">
                @csrf

                {{-- EMAIL --}}
                <div>
                    <x-input-label for="email" value="Email" />
                    <x-text-input id="email"
                        class="block mt-1 w-full"
                        type="email"
                        name="email"
                        required autofocus />
                </div>

                {{-- PASSWORD --}}
                <div class="mt-4">
                    <x-input-label for="password" value="Password" />
                    <x-text-input id="password"
                        class="block mt-1 w-full"
                        type="password"
                        name="password"
                        required />
                </div>

                {{-- REMEMBER --}}
                <div class="block mt-4">
                    <label class="flex items-center">
                        <input type="checkbox"
                            class="rounded border-gray-300"
                            name="remember">
                        <span class="ms-2 text-sm text-gray-600">
                            Ingat saya
                        </span>
                    </label>
                </div>

                {{-- BUTTON --}}
                <div class="mt-6">
                    <button
                        class="w-full bg-green-700 text-white py-3 rounded-lg hover:bg-green-800 transition">
                        Login
                    </button>
                </div>

            </form>
        </div>
    </div>
</x-guest-layout>