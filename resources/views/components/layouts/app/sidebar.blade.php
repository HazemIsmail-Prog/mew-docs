<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" dir="{{ app()->getLocale() === 'ar' ? 'rtl' : 'ltr' }}" class="dark">
    <head>
        @include('partials.head')
    </head>
    <body class="min-h-screen bg-white dark:bg-zinc-800">
        <flux:sidebar sticky stashable class="border-e border-zinc-200 bg-zinc-50 dark:border-zinc-700 dark:bg-zinc-900">
            <flux:sidebar.toggle class="lg:hidden" icon="x-mark" />

            <a href="{{ route('dashboard') }}" class="me-5 flex items-center space-x-2 rtl:space-x-reverse">
                <x-app-logo />
            </a>

            <flux:navlist variant="outline">

                <flux:navlist.group :heading="__('')" class="grid">
                    <flux:navlist.item icon="home" :href="route('dashboard')" :current="request()->routeIs('dashboard')">{{ __('Dashboard') }}</flux:navlist.item>
                </flux:navlist.group>

                <flux:navlist.group :heading="__('Admin')" class="grid">
                    <flux:navlist.item icon="shield-check" :href="route('permissions')" :current="request()->routeIs('permissions')" >{{ __('Permissions') }}</flux:navlist.item>
                    <flux:navlist.item icon="shield-check" :href="route('roles')" :current="request()->routeIs('roles')" >{{ __('Roles') }}</flux:navlist.item>
                    <flux:navlist.item icon="users" :href="route('users')" :current="request()->routeIs('users')" >{{ __('Users') }}</flux:navlist.item>
                </flux:navlist.group>

                <flux:navlist.group :heading="__('Data')" class="grid">
                    <flux:navlist.item icon="shield-check" :href="route('contracts')" :current="request()->routeIs('contracts')" >{{ __('Contracts') }}</flux:navlist.item>
                    <flux:navlist.item icon="shield-check" :href="route('stakeholders')" :current="request()->routeIs('stakeholders')" >{{ __('Stakeholders') }}</flux:navlist.item>
                    <flux:navlist.item icon="shield-check" :href="route('tags')" :current="request()->routeIs('tags')" >{{ __('Tags') }}</flux:navlist.item>
                    <flux:navlist.item icon="shield-check" :href="route('documents')" :current="request()->routeIs('documents')" >{{ __('Documents') }}</flux:navlist.item>
                    <flux:navlist.item icon="shield-check" :href="route('letters')" :current="request()->routeIs('letters')" >{{ __('Letters') }}</flux:navlist.item>
                </flux:navlist.group>
                
            </flux:navlist>

            <flux:spacer />



            <!-- Desktop User Menu -->
            <flux:dropdown class="hidden lg:block" position="bottom" align="start">
                <flux:profile
                    :name="auth()->user()->name"
                    :initials="auth()->user()->initials()"
                    icon:trailing="chevrons-up-down"
                />

                <flux:menu class="w-[220px]">
                    <flux:menu.radio.group>
                        <div class="p-0 text-sm font-normal">
                            <div class="flex items-center gap-2 px-1 py-1.5 text-start text-sm">
                                <span class="relative flex h-8 w-8 shrink-0 overflow-hidden rounded-lg">
                                    <span
                                        class="flex h-full w-full items-center justify-center rounded-lg bg-neutral-200 text-black dark:bg-neutral-700 dark:text-white"
                                    >
                                        {{ auth()->user()->initials() }}
                                    </span>
                                </span>

                                <div class="grid flex-1 text-start text-sm leading-tight">
                                    <span class="truncate font-semibold">{{ auth()->user()->name }}</span>
                                    <span class="truncate text-xs">{{ auth()->user()->email }}</span>
                                </div>
                            </div>
                        </div>
                    </flux:menu.radio.group>

                    <flux:menu.separator />

                    <flux:menu.radio.group>
                        <flux:menu.item :href="route('settings.profile')" icon="cog">{{ __('Settings') }}</flux:menu.item>
                    </flux:menu.radio.group>

                    <flux:menu.separator />

                    <flux:radio.group x-data variant="segmented" x-model="$store.language.language" @change="$store.language.setLanguage()">
                        <flux:radio value="ar">{{ __('Arabic') }}</flux:radio>
                        <flux:radio value="en">{{ __('English') }}</flux:radio>
                    </flux:radio.group>

                    <flux:menu.separator />


                    <form method="POST" action="{{ route('logout') }}" class="w-full">
                        @csrf
                        <flux:menu.item as="button" type="submit" icon="arrow-right-start-on-rectangle" class="w-full">
                            {{ __('Log Out') }}
                        </flux:menu.item>
                    </form>
                </flux:menu>
            </flux:dropdown>
        </flux:sidebar>

        <!-- Mobile User Menu -->
        <flux:header class="lg:hidden">
            <flux:sidebar.toggle class="lg:hidden" icon="bars-2" inset="left" />

            <flux:spacer />

            <flux:dropdown position="top" align="end">
                <flux:profile
                    :initials="auth()->user()->initials()"
                    icon-trailing="chevron-down"
                />

                <flux:menu>
                    <flux:menu.radio.group>
                        <div class="p-0 text-sm font-normal">
                            <div class="flex items-center gap-2 px-1 py-1.5 text-start text-sm">
                                <span class="relative flex h-8 w-8 shrink-0 overflow-hidden rounded-lg">
                                    <span
                                        class="flex h-full w-full items-center justify-center rounded-lg bg-neutral-200 text-black dark:bg-neutral-700 dark:text-white"
                                    >
                                        {{ auth()->user()->initials() }}
                                    </span>
                                </span>

                                <div class="grid flex-1 text-start text-sm leading-tight">
                                    <span class="truncate font-semibold">{{ auth()->user()->name }}</span>
                                    <span class="truncate text-xs">{{ auth()->user()->email }}</span>
                                </div>
                            </div>
                        </div>
                    </flux:menu.radio.group>

                    <flux:menu.separator />

                    <flux:menu.radio.group>
                        <flux:menu.item :href="route('settings.profile')" icon="cog">{{ __('Settings') }}</flux:menu.item>
                    </flux:menu.radio.group>

                    <flux:menu.separator />

                    <flux:radio.group x-data variant="segmented" x-model="$store.language.language" @change="$store.language.setLanguage()">
                        <flux:radio value="ar">{{ __('Arabic') }}</flux:radio>
                        <flux:radio value="en">{{ __('English') }}</flux:radio>
                    </flux:radio.group>

                    <flux:menu.separator />

                    <form method="POST" action="{{ route('logout') }}" class="w-full">
                        @csrf
                        <flux:menu.item as="button" type="submit" icon="arrow-right-start-on-rectangle" class="w-full">
                            {{ __('Log Out') }}
                        </flux:menu.item>
                    </form>
                </flux:menu>
            </flux:dropdown>
        </flux:header>

        {{ $slot }}

        @fluxScripts
    </body>
</html>
