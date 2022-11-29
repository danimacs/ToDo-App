<div class="col-md-8 col-12 card-stacked">
    <div class="card shadow-line mb-3 chat chat-panel">
        <div class="p-3 chat-header">
            <div class="d-flex">
                <div class="w-100 d-flex pl-0">
                    <img class="rounded-circle shadow avatar-sm mr-3 chat-profile-picture"
                         src="https://user-images.githubusercontent.com/35243461/168796877-f6c8819a-5d6e-4b2a-bd56-04963639239b.jpg">

                    <div class="d-flex align-items-center mr-3">
                        <p class="fw-400 mb-0 text-dark-75">{{ $family->name }}</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="d-flex flex-row mb-3 navigation-mobile scrollable-chat-panel chat-panel-scroll">
            <div class="w-100 p-3">
                <div class="text-center letter-space drop-shadow text-uppercase fs-12 w-100 mb-3">
                    Today
                </div>

                @foreach($family->tasks->where('finished', true) as $task)
                    @livewire('templates.task-container', ['task' => $task, 'class' => 'left-chat-message'])
                @endforeach

                @foreach($family->tasks->where('finished', false) as $task)
                    @livewire('templates.task-container', ['task' => $task, 'class' => 'right-chat-message', 'flexRowReverse' => 'true'])
                @endforeach
            </div>
        </div>

        <div class="chat-input chat-input-tasks pl-3 pr-3">
            <form action="{{ route('task.store') }}" method="POST">
                @csrf
                <div class="input-group">
                    <input class="form-control" placeholder="Tarea" type="text" name="description">
                    <input type="hidden" name="finished" value="0">
                    <input type="hidden" name="family_id" value="{{ $family->id }}">
                </div>
            </form>
        </div>
    </div>
</div>
