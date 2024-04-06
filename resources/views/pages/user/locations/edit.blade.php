<x-layout>
    <section class="p-4">
        <div class="max-w-sm w-full mx-auto">
            <h1>Neuen Standort anlegen</h1>

            <form action="{{ route('locations.update', $location) }}" method="post" class="flex flex-col gap-4">
                @csrf
                @method('put')

                <select name="location_type" id="location_type">
                    <option value="" @selected(!old('location_type', $location->locationType->id)) disabled>Typ auswählen</option>
                    @foreach ($location_types as $type)
                        <option value="{{ $type['id'] }}" @selected(old('location_type', $location->locationType->id) == $location['id'])>{{ $type['name'] }}</option>
                    @endforeach
                </select>
                <input type="text" name="name" id="name" placeholder="Name" value="{{ old('name', $location->name) }}"/>
                <input type="text" name="street" id="street" placeholder="Straße" value="{{ old('street', $location->street) }}"/>
                <input type="text" name="zipcode" id="zipcode" placeholder="PLZ" value="{{ old('zipcode', $location->zipcode) }}"/>
                <input type="text" name="city" id="city" placeholder="Ort" value="{{ old('city', $location->city) }}"/>
                <select name="country" id="country">
                    <option value="" @selected(!old('country', $location->country->id)) disabled>Land auswählen</option>
                    @foreach ($countries as $country)
                        <option value="{{ $country['id'] }}" @selected(old('country', $location->country->id) == $country['id'])>{{ $country['name'] }}</option>
                    @endforeach
                </select>
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
