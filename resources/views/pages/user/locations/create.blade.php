<x-layout>
    <section class="p-4">
        <div class="max-w-sm w-full mx-auto">
            <h1>Neuen Standort anlegen</h1>

            <form action="{{ route('locations.store') }}" method="post" class="flex flex-col gap-4">
                @csrf

                <select name="location_type" id="location_type">
                    <option value="" @selected(!old('location_type')) disabled>Typ auswählen</option>
                    @foreach ($location_types as $type)
                        <option value="{{ $type['id'] }}" @selected(old('location_type') === $type['id'])>{{ $type['name'] }}</option>
                    @endforeach
                </select>
                <input type="text" name="name" id="name" placeholder="Name" value="{{ old('name') }}"/>
                <input type="text" name="street" id="street" placeholder="Straße" value="{{ old('street') }}"/>
                <input type="text" name="zipcode" id="zipcode" placeholder="PLZ" value="{{ old('zipcode') }}"/>
                <input type="text" name="city" id="city" placeholder="Ort" value="{{ old('city') }}"/>
                <select name="country" id="country">
                    <option value="" @selected(!old('country')) disabled>Land auswählen</option>
                    @foreach ($countries as $country)
                        <option value="{{ $country['id'] }}" @selected(old('country') === $country['id'])>{{ $country['name'] }}</option>
                    @endforeach
                </select>
                <input type="text" name="website" id="website" placeholder="Webseite" value="{{ old('website') }}"/>
                <input type="email" name="email" id="email" placeholder="E-Mail-Adresse" value="{{ old('email') }}"/>
                <input type="text" name="phone" id="phone" placeholder="Telefon" value="{{ old('phone') }}"/>

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
