<div wire:click="$emit('changeFamily', '{{ $name }}', {{ $tasks }}, {{ $family }})" class="chat-item active d-flex pl-3 pr-0 pt-3 pb-3">
    <div class="w-100">
        <div class="d-flex pl-0">
            <img class="rounded-circle avatar-sm mr-3" src="https://ui-avatars.com/api/?name={{ $name }}">
            <p class="margin-auto fw-400 text-dark-75">{{ $name }}</p>
        </div>
    </div>
    <div class="flex-shrink-0 margin-auto pl-2 pr-3">
        <div class="d-flex flex-column">
            <span class="round badge badge-light-success margin-auto">{{ $tasks->count() }}</span>
        </div>
    </div>
</div>
