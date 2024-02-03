<x-layout>
    <section class="p-4">
        <div class="max-w-sm w-full mx-auto">
            <h1>Neuen Standort anlegen</h1>

            <form action="{{ route('locations.update', $location) }}" method="post" class="flex flex-col gap-4">
                @csrf
                @method('put')

                <input type="text" name="name" id="name" placeholder="Name" value="{{ old('name', $location->name) }}"/>
                <input type="text" name="street" id="street" placeholder="Straße" value="{{ old('street', $location->street) }}"/>
                <input type="text" name="zipcode" id="zipcode" placeholder="PLZ" value="{{ old('zipcode', $location->zipcode) }}"/>
                <input type="text" name="city" id="city" placeholder="Ort" value="{{ old('city', $location->city) }}"/>
                <input type="text" name="website" id="website" placeholder="Webseite" value="{{ old('website', $location->website) }}"/>
                <input type="email" name="email" id="email" placeholder="E-Mail-Adresse" value="{{ old('email', $location->email) }}"/>
                <input type="text" name="phone" id="phone" placeholder="Telefon" value="{{ old('phone', $location->phone) }}"/>

                <button>Speichern</button>
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
