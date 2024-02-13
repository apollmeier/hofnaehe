<x-layout>
    <section class="p-4">
        <div class="max-w-sm w-full mx-auto">
            @if ($location )
                <h2>{{ $location->name }}</h2>
                <address>
                    <p>{{ $location->street }}</p>
                    <p>{{ $location->zipcode }} {{ $location->city }}</p>
                    <p>{{ $location->country->name }}</p>
                </address>
                @if ( $location->email )
                    <p>{{ $location->email }}</p>
                @endif
                @if ( $location->phone )
                    <p>{{ $location->phone }}</p>
                @endif
                @if ( $location->website )
                    <p>{{ $location->website }}</p>
                @endif
            @endif

            <a href="{{ route('locations.index') }}">Zurück</a>
        </div>
    </section>
</x-layout>
