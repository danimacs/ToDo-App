<div class="col-md-4 col-12 card-stacked">
    <div class="card shadow-line mb-3 chat">
        <div class="p-3 chat-header">
            <div class="d-flex">
                <div class="w-100 d-flex pl-0">
                    <h1>TODO-APP</h1>
                </div>
            </div>
        </div>

        <div class="archived-messages d-flex py-3">
            <div class="w-100">
                <div class="chat-input pl-3 pr-3">
                    <form action="{{ route('family.store') }}" method="POST">
                        @csrf
                        <div class="input-group">
                            <input class="form-control" placeholder="Nombre de la familia" type="text" name="name">
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <div class="chat-user-panel">
            <div class="pb-3 d-flex flex-column navigation-mobile pagination-scrool chat-user-scroll">
                @livewire('templates.family-container', ['name' => "Tareas pasadas", 'tasks' => Auth::user()->tasksByExpirationDate(\App\TasksExpirationDate::PAST)], key("pastTasks"))

                @livewire('templates.family-container', ['name' => "Tareas para hoy", 'tasks' => Auth::user()->tasksByExpirationDate(\App\TasksExpirationDate::TODAY)], key("todayTasks"))

                @livewire('templates.family-container', ['name' => "Tareas futuras", 'tasks' => Auth::user()->tasksByExpirationDate(\App\TasksExpirationDate::FUTURE)], key("futureTasks"))

                @foreach(Auth::user()->families as $family)
                    @livewire('templates.family-container', ['family' => $family], key("task" . $family->id))
                @endforeach
            </div>
        </div>
    </div>
</div>
