<div wire:click="$emit('changeFamily', {{ $family }})" class="chat-item active d-flex pl-3 pr-0 pt-3 pb-3">
    <div class="w-100">
        <div class="d-flex pl-0">
            <img class="rounded-circle shadow avatar-sm mr-3"
                 src="https://user-images.githubusercontent.com/35243461/168796877-f6c8819a-5d6e-4b2a-bd56-04963639239b.jpg">
            <p class="margin-auto fw-400 text-dark-75">{{ $family->name }}</p>
        </div>
    </div>
    <div class="flex-shrink-0 margin-auto pl-2 pr-3">
        <div class="d-flex flex-column">
            <span class="round badge badge-light-success margin-auto">{{ count($family->tasks) }}</span>
        </div>
    </div>
</div>
