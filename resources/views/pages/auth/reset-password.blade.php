<x-layout>
    <section class="p-4">
        <div class="max-w-sm w-full mx-auto">
            <h1>Passwort vergessen</h1>
            <form action="{{ route('password.update') }}" method="post" class="flex flex-col gap-4">
                @csrf

                <input type="hidden" name="token" id="token" value="{{ request()->route('token') }}"/>
                <input type="hidden" name="email" id="email" value="{{ request()->get('email') }}"/>

                <input type="password" name="password" id="password" placeholder="Passwort"/>
                <input type="password" name="password_confirmation" id="password_confirmation" placeholder="Passwort wiederholen"/>

                <button>Passwort zurücksetzen</button>
            </form>

            @if ($errors->any())
                <div class="bg-red-200 p-2">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
        </div>
    </section>
</x-layout>
