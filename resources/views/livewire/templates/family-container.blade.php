<div wire:click="$emit('changeFamily', '{{ $name }}', {{ $tasks }}, {{ $family }})" class="chat-item active d-flex pl-3 pr-0 pt-3 pb-3">
    <div class="d-flex w-100 pl-0">
        <img class="rounded-circle avatar-sm mr-3" src="https://ui-avatars.com/api/?name={{ $name }}">
        <p class="margin-auto fw-400 text-dark-75">{{ $name }}</p>
    </div>

    <div class="d-flex margin-auto pl-2 pr-3">
        @if($family != null && $family->id != null && $family->name != "First Family!")
            <a href="{{ route('family.delete', [$family->id]) }}" class="round badge badge-light-danger margin-auto">
                <i class="bi bi-trash"></i>
            </a>
            <span class="mx-2"></span>
        @endif

        <span class="round badge badge-light-success margin-auto">{{ $tasks->count() }}</span>
    </div>
</div>
