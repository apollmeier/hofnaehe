<x-layout>
    <section class="p-4">
        <div class="max-w-sm w-full mx-auto">
            <h1>E-Mail-Adresse bestätigen</h1>

            @if (session('status') == 'verification-link-sent')
                <div class="bg-green-200 p-2">
                    Sie haben einen neuen Bestätigungslink per E-Mail erhalten!
                </div>
            @endif

            <p>Vielen Dank für Ihre Registrierung! Bitte überprüfen Sie Ihr E-Mail-Postfach und klicken Sie auf den Bestätigungslink, den wir Ihnen gesendet haben, um Ihr Benutzerkonto zu aktivieren.</p>

            <form action="{{ route('verification.send') }}" method="post" class="flex flex-col gap-4">
                @csrf

                <button>Neue Bestätigungsmail anfordern</button>
            </form>
        </div>
    </section>
</x-layout>
