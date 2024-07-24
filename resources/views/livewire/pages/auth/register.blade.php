<?php

use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Livewire\Attributes\Layout;
use Livewire\Volt\Component;

new #[Layout('layouts.guest')] class extends Component
{
    public string $name = '';
    public string $email = '';
    public string $password = '';
    public string $password_confirmation = '';

    /**
     * Handle an incoming registration request.
     */
    public function register(): void
    {
        $validated = $this->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:'.User::class],
            'password' => ['required', 'string', 'confirmed', Rules\Password::defaults()],
        ]);

        $validated['password'] = Hash::make($validated['password']);

        event(new Registered($user = User::create($validated)));

        Auth::login($user);
        session()->flash('success', "Akun Berhasil Terdaftar, Selamat Datang" . \auth()->user()->name);
        $this->redirect(RouteServiceProvider::HOME, navigate: true);
    }
}; ?>


<!--
  Heads up! 👋

  Plugins:
    - @tailwindcss/forms
-->

<section class="bg-white">
    <div class="lg:grid lg:min-h-screen lg:grid-cols-12">
        <aside class="relative block h-16 lg:order-last lg:col-span-5 lg:h-full xl:col-span-6">
            <img
                    alt=""
                    src="https://pklsmk.com/wp-content/uploads/2021/12/rsz_1_gedung_1.jpg"
                    class="absolute inset-0 h-full w-full object-cover"
            />
        </aside>

        <main
                class="flex items-center justify-center px-8 py-8 sm:px-12 lg:col-span-7 lg:px-16 lg:py-12 xl:col-span-6"
        >
            <div class="max-w-xl lg:max-w-3xl">
                <a class="block text-blue-600" href="#">
                    <span class="sr-only">Home</span>
                    <img class="w-1/6" src="https://images.glints.com/unsafe/glints-dashboard.s3.amazonaws.com/company-logo/571c2d3473f3fa843f61e92f2dc20b23.png" alt="" srcset="">
                </a>

                <h1 class="mt-6 text-2xl font-bold text-gray-900 sm:text-3xl md:text-4xl">
                    Welcome to PPDB SMK WIKRMA BOGOR
                </h1>

                <p class="mt-4 leading-relaxed text-gray-500">
                    Silahkan Daftar Terlebih dahulu
                </p>

                <form wire:submit="register" class="mt-8 grid grid-cols-6 gap-6">
                    <div class="col-span-6 sm:col-span-3">
                        <label for="name" :value="__('Name')" class="block text-sm font-medium text-gray-700">
                            Name
                        </label>

                        <x-text-input wire:model="name" id="name"
                                class="mt-1 w-full rounded-md border-gray-200 bg-white text-sm text-gray-700 shadow-sm"
                        />
                        <x-input-error :messages="$errors->get('name')" class="mt-2" />


                    </div>


                    <div class="col-span-6">
                        <x-input-label for="email" :value="__('Email')" class="block text-sm font-medium text-gray-700"/>

                        <x-text-input wire:model="email" id="email" class="block mt-1 w-full" type="email" name="email" required autocomplete="username"

                                class="mt-1 w-full rounded-md border-gray-200 bg-white text-sm text-gray-700 shadow-sm"
                        />

                        <x-input-error :messages="$errors->get('email')" class="mt-2" />
                    </div>

                    <div class="col-span-6 sm:col-span-3">
                        <x-input-label for="password" :value="__('Password')"  class="block text-sm font-medium text-gray-700"/>

                        <x-text-input wire:model="password" id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                required autocomplete="new-password"
                                class="mt-1 w-full rounded-md border-gray-200 bg-white text-sm text-gray-700 shadow-sm"
                        />

                        <x-input-error :messages="$errors->get('password')" class="mt-2" />
                    </div>

                    <div class="col-span-6 sm:col-span-3">
                        <x-input-label for="password_confirmation" :value="__('Confirm Password')"  for="PasswordConfirmation" class="block text-sm font-medium text-gray-700"/>

                        <x-text-input wire:model="password_confirmation" id="password_confirmation" class="block mt-1 w-full"
                                      type="password"
                                      name="password_confirmation" required autocomplete="new-password"
                                      class="mt-1 w-full rounded-md border-gray-200 bg-white text-sm text-gray-700 shadow-sm"
                        />

                        <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                    </div>

                    <div class="col-span-6">
                        <label for="MarketingAccept" class="flex gap-4">
                            <input
                                    type="checkbox"
                                    id="MarketingAccept"
                                    name="marketing_accept"
                                    class="size-5 rounded-md border-gray-200 bg-white shadow-sm"
                            />

                            <span class="text-sm text-gray-700">
                I want to receive emails about events, product updates and company announcements.
              </span>
                        </label>
                    </div>

                    <div class="col-span-6">
                        <p class="text-sm text-gray-500">
                            By creating an account, you agree to our
                            <a href="#" class="text-gray-700 underline"> terms and conditions </a>
                            and
                            <a href="#" class="text-gray-700 underline">privacy policy</a>.
                        </p>
                    </div>

                    <div class="col-span-6 sm:flex sm:items-center sm:gap-4">
                        <button
                                class="inline-block shrink-0 rounded-md border border-blue-600 bg-blue-600 px-12 py-3 text-sm font-medium text-white transition hover:bg-transparent hover:text-blue-600 focus:outline-none focus:ring active:text-blue-500"
                        >
                            Create an account
                        </button>

                        <p class="mt-4 text-sm text-gray-500 sm:mt-0">
                            Already have an account?
                            <a href="/login" class="text-gray-700 underline">Log in</a>.
                        </p>
                    </div>
                </form>
            </div>
        </main>
    </div>
</section>
