<x-guest-layout>
    <x-slot name="page">Home</x-slot>

    @livewire('guest.welcome.slides')
    <x-guest.welcome.matricula />
    <x-guest.welcome.mission-vision />
    <x-guest.welcome.why />
    <x-guest.welcome.segmentos />
    <x-guest.welcome.newsletter />
    <x-guest.welcome.store />
    @livewire('guest.school.slides')
    <x-guest.welcome.questions />

</x-guest-layout>
