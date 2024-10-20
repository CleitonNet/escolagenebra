<x-guest.schools.container>
    <x-guest.container class="grid gap-4 py-5 md:grid-cols-2 xl:grid-cols-4">
        @foreach ($schools as $school)
            <x-guest.schools.school :image="$school->image" :unity="$school->title" :enrollment="$school->enrollment" :segments="$school->segments" :address="$school->address">
                <ul>
                    @foreach ($school->segments as $segment) <!-- Use segments como propriedade -->
                        <li class="flex justify-between gap-1">
                            <div>{{ $segment->name }}</div>
                            <div class="flex-auto mb-2 border-b-2 border-dotted border-azul/50"></div>
                            <div class="font-semibold">{{ $segment->description }}</div>
                        </li>
                    @endforeach
                </ul>
            </x-guest.schools.school>
        @endforeach
    </x-container>
</x-schools.container>
