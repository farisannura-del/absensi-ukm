<x-guest-layout>

    <div class="w-full">

        <div class="text-center mb-8">

            <h1 class="text-3xl md:text-4xl font-bold text-cyan-500">

                🎨 UKM Seni & Budaya

            </h1>

            <p class="text-gray-500 mt-2">

                Sistem Absensi Anggota

            </p>

        </div>

        <!-- Session Status -->

        <x-auth-session-status
            class="mb-4"
            :status="session('status')" />

        <form method="POST" action="{{ route('login') }}">

            @csrf

            <!-- Email -->

            <div>

                <x-input-label
                    for="email"
                    :value="__('Email')" />

                <x-text-input
                    id="email"
                    class="block mt-2 w-full"
                    type="email"
                    name="email"
                    :value="old('email')"
                    required
                    autofocus
                    autocomplete="username"
                />

                <x-input-error
                    :messages="$errors->get('email')"
                    class="mt-2" />

            </div>

            <!-- Password -->

            <div class="mt-5">

                <x-input-label
                    for="password"
                    :value="__('Password')" />

                <x-text-input
                    id="password"
                    class="block mt-2 w-full"
                    type="password"
                    name="password"
                    required
                    autocomplete="current-password"
                />

                <x-input-error
                    :messages="$errors->get('password')"
                    class="mt-2" />

            </div>

            <!-- Remember -->

            <div class="mt-5 flex items-center justify-between">

                <label
                    for="remember_me"
                    class="inline-flex items-center">

                    <input
                        id="remember_me"
                        type="checkbox"
                        name="remember"
                        class="rounded border-gray-300 text-cyan-600">

                    <span class="ml-2 text-sm text-gray-600">

                        Remember me

                    </span>

                </label>

                @if (Route::has('password.request'))

                    <a
                        href="{{ route('password.request') }}"
                        class="text-sm text-cyan-600 hover:underline">

                        Forgot Password?

                    </a>

                @endif

            </div>

            <button
                type="submit"
                class="mt-6 w-full bg-cyan-500 hover:bg-cyan-600 text-white font-bold py-3 rounded-xl transition">

                Login

            </button>

        </form>

        <!-- Divider -->

        <div class="my-8 flex items-center">

            <div class="flex-grow border-t border-gray-300"></div>

            <span class="mx-4 text-gray-400 text-sm">

                ATAU

            </span>

            <div class="flex-grow border-t border-gray-300"></div>

        </div>

        <!-- Google Login -->

        <a
            href="{{ route('google.login') }}"
            class="w-full inline-flex justify-center items-center rounded-xl border border-gray-300 bg-white px-5 py-3 text-gray-700 font-semibold hover:bg-gray-100 transition">

            Login dengan Google

        </a>

    </div>

</x-guest-layout>