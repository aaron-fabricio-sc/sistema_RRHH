<x-guest-layout>
    @if (session('message'))
        <div class="alert alert-success">
            <strong>{{ session('message') }}</strong>
        </div>
    @endif
    @if (session('message-danger'))
        <div class="alert alert-danger">
            <strong>{{ session('message-danger') }}</strong>
        </div>
    @endif
    @livewire('attendance.attendance-create')


</x-guest-layout>
