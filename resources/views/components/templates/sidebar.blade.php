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
                <div class="flex-shrink-0 margin-auto">
                    <a class="btn btn-sm btn-icon btn-light active text-dark ml-2" href="#">
                        <svg class="feather" fill="none" height="15" stroke="currentColor"
                             stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                             viewBox="0 0 24 24" width="15">
                            <rect height="15" rx="2" ry="2" width="20" x="2" y="7"></rect>
                            <polyline points="17 2 12 7 7 2"></polyline>
                        </svg>
                    </a>
                    <a class="btn btn-sm btn-icon btn-light active text-dark ml-2" href="#">
                        <svg class="feather" fill="none" height="15" stroke="currentColor"
                             stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                             viewBox="0 0 24 24" width="15">
                            <path d="M12 20h9"></path>
                            <path
                                d="M16.5 3.5a2.121 2.121 0 0 1 3 3L7 19l-4 1 1-4L16.5 3.5z"></path>
                        </svg>
                    </a>
                    <a class="btn btn-sm btn-icon btn-light active text-dark ml-2" href="#">
                        <svg class="feather" fill="none" height="15" stroke="currentColor"
                             stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                             viewBox="0 0 24 24" width="15">
                            <circle cx="12" cy="12" r="1"></circle>
                            <circle cx="12" cy="5" r="1"></circle>
                            <circle cx="12" cy="19" r="1"></circle>
                        </svg>
                    </a>
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

        <x-templates.index-families/>
    </div>
</div>
