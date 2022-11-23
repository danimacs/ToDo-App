<div class="col-md-4 col-12 card-stacked">
    <div class="card shadow-line mb-3 chat">
        <div class="chat-user-detail">
            <div class="p-3 chat-header">
                <div class="w-100">
                    <div class="d-flex pl-0">
                        <div class="d-flex flex-row mt-1 mb-1">
                            <span class="margin-auto mr-2">
                                <a class="user-undetail-trigger btn btn-sm btn-icon btn-light active text-dark ml-2"
                                   href="#">
                                    <svg class="feather" fill="none" height="18"
                                         stroke="currentColor" stroke-linecap="round"
                                         stroke-linejoin="round" stroke-width="2"
                                         viewBox="0 0 24 24" width="18">
                                        <polyline points="15 18 9 12 15 6"></polyline>
                                    </svg>
                                </a>
                            </span>
                            <p class="margin-auto fw-400 text-dark-75">Profile</p>
                        </div>
                        <div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

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

        @livewire('templates.index-families')
    </div>
</div>
