<x-layout>
    <section class="p-4">
        <div class="max-w-sm w-full mx-auto">
            <h1>Registrieren</h1>

            <form action="{{ route('register') }}" method="post" class="flex flex-col gap-4">
                @csrf

                <input type="text" name="email" id="email" placeholder="E-Mail-Adresse"/>
                <input type="password" name="password" id="password" placeholder="Passwort"/>
                <input type="password" name="password_confirmation" id="password_confirmation" placeholder="Passwort wiederholen"/>

                <button>Registrieren</button>
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

            <a href="{{ route('login') }}">Zurück zur Anmeldung</a>
        </div>
    </section>
</x-layout>
