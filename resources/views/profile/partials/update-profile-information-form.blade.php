<section>
    <header>
        <h2 class="text-lg font-medium text-gray-900">
            {{ __('Profile Information') }}
        </h2>

        <p class="mt-1 text-sm text-gray-600">
            {{ __("Update your account's profile information and email address.") }}
        </p>
    </header>

    <form id="send-verification" method="post" action="{{ route('verification.send') }}">
        @csrf
    </form>

    <form method="post" action="{{ route('profile.update') }}" class="mt-6 space-y-6">
        @csrf
        @method('patch')

        <div>
            <x-input-label for="given_name" :value="__('Given Name')" />
            <x-text-input id="given_name" name="given_name" type="text" class="mt-1 block w-full"
                          :value="old('given_name', $user->given_name)"
                          required autofocus autocomplete="given_name" />
            <x-input-error class="mt-2" :messages="$errors->get('given_name')" />
        </div>

        <div>
            <x-input-label for="family_name" :value="__('Family Name')" />
            <x-text-input id="family_name" name="family_name" type="text" class="mt-1 block w-full"
                          :value="old('family_name', $user->family_name)"
                          autofocus autocomplete="family_name" />
            <x-input-error class="mt-2" :messages="$errors->get('family_name')" />
        </div>

        <div>
            <x-input-label for="nickname" :value="__('Preferred Name/Nickname (Default: Given Name)')" />
            <x-text-input id="nickname" name="nickname" type="text" class="mt-1 block w-full"
                          :value="old('nickname', $user->nickname)"
                          autofocus autocomplete="nickname" />
            <x-input-error class="mt-2" :messages="$errors->get('nickname')" />
        </div>

        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" name="email" type="email" class="mt-1 block w-full" :value="old('email', $user->email)" required autocomplete="username" />
            <x-input-error class="mt-2" :messages="$errors->get('email')" />

            @if ($user instanceof \Illuminate\Contracts\Auth\MustVerifyEmail && ! $user->hasVerifiedEmail())
                <div>
                    <p class="text-sm mt-2 text-gray-800">
                        {{ __('Your email address is unverified.') }}

                        <button form="send-verification" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                            {{ __('Click here to re-send the verification email.') }}
                        </button>
                    </p>

                    @if (session('status') === 'verification-link-sent')
                        <p class="mt-2 font-medium text-sm text-green-600">
                            {{ __('A new verification link has been sent to your email address.') }}
                        </p>
                    @endif
                </div>
            @endif
        </div>

        <div class="flex items-center gap-4">
            <x-primary-button>{{ __('Save') }}</x-primary-button>

            @if (session('status') === 'profile-updated')
                <p
                    x-data="{ show: true }"
                    x-show="show"
                    x-transition
                    x-init="setTimeout(() => show = false, 2000)"
                    class="text-sm text-gray-600"
                >{{ __('Saved.') }}</p>
            @endif
        </div>
    </form>
</section>
