<x-layout>
    <section class="p-4">
        <div class="max-w-sm w-full mx-auto">
            <h1>Anmelden</h1>

            @if (session('status'))
                <div class="bg-green-200 p-2">
                    {{ session('status') }}
                </div>
            @endif

            <form action="{{ route('login') }}" method="post" class="flex flex-col gap-4">
                @csrf

                <input type="text" name="email" id="email" placeholder="E-Mail-Adresse"/>
                <input type="password" name="password" id="password" placeholder="Passwort"/>

                <button>Einloggen</button>
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

            <a href="{{ route('password.request') }}">Passwort vergessen</a><br>
            <a href="{{ route('register') }}">Hier registrieren</a>
        </div>
    </section>
</x-layout>
