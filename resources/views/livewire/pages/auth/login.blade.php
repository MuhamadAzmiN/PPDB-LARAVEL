<?php

use App\Livewire\Forms\LoginForm;
use App\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\Session;
use Livewire\Attributes\Layout;
use Livewire\Volt\Component;

new #[Layout('layouts.guest')] class extends Component
{
    public LoginForm $form;

    /**
     * Handle an incoming authentication request.
     */
    public function login(): void
    {
        $this->validate();

        $this->form->authenticate();

        Session::regenerate();
        \session()->flash('success', "Selamat Datang " . auth()->user()->name );
        $this->redirectIntended(default: RouteServiceProvider::HOME, navigate: true);
    }
}; ?>


<!--
  Heads up! 👋

  Plugins:
    - @tailwindcss/forms
-->

<div class="w-full h-full f   bg-white dark:bg-gray-800 shadow-md overflow-hidden sm:rounded-lg">
    <section class="relative flex flex-wrap lg:h-screen lg:items-center ">
        <div class="w-full px-6 py-8 sm:px-12 sm:py-16 lg:w-1/2 lg:px-8 lg:py-24">
            <div style="display: flex;align-items: center;justify-content: center" class="mx-auto max-w-md text-center">
                <img class="w-1/2" src="https://images.glints.com/unsafe/glints-dashboard.s3.amazonaws.com/company-logo/571c2d3473f3fa843f61e92f2dc20b23.png" alt="" srcset="">

{{--                <p class="mt-4 text-gray-500">--}}
{{--                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Et libero nulla eaque error neque--}}
{{--                    ipsa culpa autem, at itaque nostrum!--}}
{{--                </p>--}}
            </div>
                <h1 class="text-2xl font-bold sm:text-3xl text-center">Welcome </h1>

            <form wire:submit="login" class="mx-auto mb-0 mt-8 max-w-md space-y-4">
                <div>
                    <x-input-label for="email" :value="__('Email')" class="sr-only"/>

                    <div class="relative">
                        <input
                                x-text-input wire:model="form.email" id="email" type="email" name="email" required autofocus autocomplete="username"
                                class="w-full rounded-lg border-gray-200 p-4 text-sm shadow-sm"
                                placeholder="Enter email"
                        />
                        <x-input-error :messages="$errors->get('form.email')" class="mt-2" />

                        <span class="absolute inset-y-0 right-0 grid place-content-center px-4">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-gray-400" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M10 2a8 8 0 100 16 8 8 0 000-16zM8 10a2 2 0 114 0 2 2 0 01-4 0z" clip-rule="evenodd" />
                            </svg>
                        </span>
                    </div>
                </div>

                <div>
                    <x-input-label for="password" :value="__('Password')"/>

                    <div class="relative">
                        <x-text-input wire:model="form.password" id="password" class="block mt-1 w-full"
                                      type="password"
                                      name="password"
                                      required autocomplete="current-password"
                        />
                        <x-input-error :messages="$errors->get('form.password')" class="mt-2" />

                        <span class="absolute inset-y-0 right-0 grid place-content-center px-4">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-gray-400" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M15 12a3 3 0 11-6 0 3 3 0 016 0zM2 10a8 8 0 1116 0 8 8 0 01-16 0z" clip-rule="evenodd" />
                            </svg>
                        </span>
                    </div>
                </div>

                <div class="flex items-center justify-between">
                    <p class="text-sm text-gray-500">
                        No account?
                        <a class="underline" href="/register">Sign up</a>
                    </p>

                    <button
                            type="submit"
                            class="inline-block rounded-lg bg-blue-500 px-5 py-3 text-sm font-medium text-white"
                    >
                        Sign in
                    </button>
                </div>
            </form>
        </div>

        <div class="relative h-64 w-full sm:h-96 lg:h-full lg:w-1/2">
            <img
                    alt=""
                    src="https://1.bp.blogspot.com/-Rr76B01JCp8/X0xxNVtdC2I/AAAAAAAAAY8/N2_2o3iOAaUZ0u_S8KjSQHcm8jyMCYW9QCLcBGAsYHQ/s2048/2.%2BGedung%2B2.jpg"
                    class="absolute inset-0 h-full w-full object-cover"
            />
        </div>
    </section>
</div>
