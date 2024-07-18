<form method="post" action="{{ route('profile.update') }}" class="mt-6 space-y-6">
    @csrf
    @method('patch')

    <div>
        <label for="name">{{ __('Nome') }}</label>
        <input id="name" name="name" type="text" class="mt-1 block w-full" value="{{ old('name', $user->name) }}" required autofocus autocomplete="name">
        @error('name')
            <div class="text-red-500 mt-2">{{ $message }}</div>
        @enderror
    </div>

    <div>
        <label for="email">{{ __('Email') }}</label>
        <input id="email" name="email" type="email" class="mt-1 block w-full" value="{{ old('email', $user->email) }}" required autocomplete="username">
        @error('email')
            <div class="text-red-500 mt-2">{{ $message }}</div>
        @enderror

        @if ($user instanceof \Illuminate\Contracts\Auth\MustVerifyEmail && ! $user->hasVerifiedEmail())
            <div>
                <p class="text-sm mt-2 text-gray-800 dark:text-gray-200">
                    {{ __('Il tuo indirizzo email non è verificato.') }}

                    <button form="send-verification" class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-indigo-200">
                        {{ __('Clicca qui per inviare di nuovo l\'email di verifica.') }}
                    </button>
                </p>
            </div>
        @endif
    </div>

    <div class="flex items-center gap-4">
        <button type="submit" class="btn btn-primary">{{ __('Salva') }}</button>

        @if (session('status') === 'profile-updated')
            <p class="text-sm text-gray-600">{{ __('Profilo aggiornato con successo.') }}</p>
        @endif
    </div>
</form>
