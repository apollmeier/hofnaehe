<x-layout>
    <section class="p-4">
        <div class="max-w-sm w-full mx-auto">
            <h1>Passwort vergessen</h1>
            <form action="{{ route('password.email') }}" method="post" class="flex flex-col gap-4">
                @csrf

                <input type="text" name="email" id="email" placeholder="E-Mail-Adresse"/>

                <button>Passwort anfragen</button>
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
