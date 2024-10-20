<section>
    <header>
        <h2 class="text-lg font-medium text-gray-900">
            {{ __('Profile\'s Photo') }}
        </h2>

        <p class="mt-1 text-sm text-gray-600">
            {{ __("Update your profile's photo.") }}
        </p>
    </header>

    <form wire:submit="update" class="mt-6 space-y-6">

        <label for="photoImage" class="relative flex items-center justify-center flex-auto mb-4 overflow-hidden border-4 border-white rounded-lg shadow cursor-pointer group h-[300px] bg-slate-300/75 group-hover:bg-slate-300" style="box-shadow: inset 0 0 10px 2px rgba(0,0,0,0.7);">
            @if ($getImage)
                <img src="{{ $getImage->temporaryUrl() }}" alt="photo" class="object-contain max-w-full max-h-full border border-slate-300" style="box-shadow: 0 0 10px 2px #000; filter: drop-shadow(0 0 10px rgba(0,0,0,0.5));" />
            @elseif ($photo !== null && Storage::disk('public')->exists($photo))
                <img src="{{ asset('storage/' . $photo) }}" alt="photo" class="object-contain max-w-full max-h-full border border-slate-300" style="box-shadow: 0 0 10px 2px #000" />
            @else
                <img src="{{ asset('img/upload.svg') }}" alt="photo" class="absolute object-cover w-40 h-40 opacity-50 group-hover:opacity-75" style="filter: drop-shadow(0 0 2px rgba(0,0,0,.5))" />
            @endif
            <input wire:model='getImage' type="file" name="photoImage" id="photoImage" class="absolute opacity-0 -z-10" />
        </label>


        <div class="flex items-center gap-4">
            <x-primary-button>{{ __('Save') }}</x-primary-button>

            <x-action-message class="me-3" on="profile-updated">
                {{ __('Saved.') }}
            </x-action-message>
        </div>
    </form>
</section>
