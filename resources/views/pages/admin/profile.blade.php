<x-app-layout> <x-slot name='title'>Profile</x-slot>
    <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-4">
        <div class="content"><livewire:profile.update-profile-photo-form /></div>
        <div class="content"><livewire:profile.update-profile-information-form /></div>
        <div class="content"><livewire:profile.update-password-form /></div>
        <div class="content col-span-full lg:col-span-1"><livewire:profile.delete-user-form /></div>
    </div>
</x-app-layout>
