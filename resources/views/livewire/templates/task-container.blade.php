<div class="chat-message d-flex {{ $finished ? '' : 'flex-row-reverse' }} align-items-center">
    <div class="d-flex flex-col margin-auto pl-2 pr-3">
        <i wire:click="$emit('changeState', {{ $task }})" class="bi {{ $finished ? 'bi-check-circle-fill' : 'bi-check-circle' }}"></i>

        <a href="{{ route('task.delete', [$task->id]) }}">
            <i class="bi bi-trash"></i>
        </a>
    </div>

    <div class="{{ $finished ? 'left-chat-message' : 'right-chat-message' }} fs-13 mb-2">
        <form action="{{ route('task.update', $task->id) }}" method="POST">
            @csrf
            @method('PUT')

            <input value="{{ $task->description }}" type="text" name="description" class="mb-3 mr-3 pr-4">

            <div class="message-options">
                <input value="{{ $task->expiration_date }}" type="date" name="expiration_date" class="message-time"/>
            </div>

            <input type="submit" hidden/>
        </form>
    </div>
</div>
