<x-layout>
    <section class="p-4">
        <div class="max-w-sm w-full mx-auto">
            <a href="{{ route('locations.create') }}">Neuer Standort</a>
            @if ($locations)
                <ul>
                    @foreach ($locations as $location)
                        <li class="mb-4 last:mb-0">
                            <h3>{{ $location->name }}</h3>
                            <address>
                                <p>{{ $location->street }}</p>
                                <p>{{ $location->zipcode }} {{ $location->city }}</p>
                                <p>{{ $location->country->name }}</p>
                            </address>
                            <a href="{{ route('locations.show', $location->id) }}">Anzeigen</a>
                            <a href="{{ route('locations.edit', $location->id) }}">Bearbeiten</a>
                            <form action="{{ route('locations.destroy', $location->id) }}" method="post">
                                @csrf
                                @method('delete')

                                <button>Löschen</button>
                            </form>
                        </li>
                    @endforeach
                </ul>
            @endif
        </div>
    </section>
</x-layout>
