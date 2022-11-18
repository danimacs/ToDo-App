<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="main-wrapper py-6">
        <div class="container">
            <div class="page-content">
                <div class="container mt-5">
                    <div class="row">
                        <x-templates.sidebar/>

                        <div class="col-md-8 col-12 card-stacked">
                            <div class="card shadow-line mb-3 chat chat-panel">
                                <div class="p-3 chat-header">
                                    <div class="d-flex">
                                        <div class="w-100 d-flex pl-0">
                                            <img class="rounded-circle shadow avatar-sm mr-3 chat-profile-picture"
                                                 src="https://user-images.githubusercontent.com/35243461/168796877-f6c8819a-5d6e-4b2a-bd56-04963639239b.jpg">
                                            <div class="mr-3">
                                                <a href="!#">
                                                    <p class="fw-400 mb-0 text-dark-75">Beate Lemoine</p>
                                                </a>
                                                <p class="sub-caption text-muted text-small mb-0"><i
                                                        class="la la-clock mr-1"></i>last seen today at 09:15 PM</p>
                                            </div>
                                        </div>
                                        <div class="flex-shrink-0 margin-auto">
                                            <a class="btn btn-sm btn-icon btn-light active text-dark ml-2" href="#">
                                                <svg class="feather" fill="none" height="15" stroke="currentColor"
                                                     stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                     viewBox="0 0 24 24" width="15">
                                                    <circle cx="12" cy="12" r="10"></circle>
                                                    <line x1="12" x2="12" y1="16" y2="12"></line>
                                                    <line x1="12" x2="12.01" y1="8" y2="8"></line>
                                                </svg>
                                            </a>
                                            <a class="btn btn-sm btn-icon btn-light active text-dark ml-2" href="#">
                                                <svg class="feather" fill="none" height="15" stroke="currentColor"
                                                     stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                     viewBox="0 0 24 24" width="15">
                                                    <polygon points="23 7 16 12 23 17 23 7"></polygon>
                                                    <rect height="14" rx="2" ry="2" width="15" x="1" y="5"></rect>
                                                </svg>
                                            </a>
                                            <a class="btn btn-sm btn-icon btn-light active text-dark ml-2" href="#">
                                                <svg class="feather" fill="none" height="15" stroke="currentColor"
                                                     stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                     viewBox="0 0 24 24" width="15">
                                                    <circle cx="11" cy="11" r="8"></circle>
                                                    <line x1="21" x2="16.65" y1="21" y2="16.65"></line>
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
                                <div
                                    class="d-flex flex-row mb-3 navigation-mobile scrollable-chat-panel chat-panel-scroll">
                                    <div class="w-100 p-3">
                                        <div class="svg36 loader-animate3 horizontal-margin-auto mb-2"></div>
                                        <div
                                            class="text-center letter-space drop-shadow text-uppercase fs-12 w-100 mb-3">
                                            Today
                                        </div>
                                        <div class="left-chat-message fs-13 mb-2">
                                            <p class="mb-0 mr-3 pr-4">Hi, Quan</p>
                                            <div class="message-options">
                                                <div class="message-time">06:15</div>
                                                <div class="message-arrow"><i
                                                        class="text-muted la la-angle-down fs-17"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="d-flex flex-row-reverse mb-2">
                                            <div class="right-chat-message fs-13 mb-2">
                                                <div class="mb-0 mr-3 pr-4">
                                                    <div class="d-flex flex-row">
                                                        <div class="pr-2">Hey, Beate</div>
                                                        <div class="pr-4"></div>
                                                    </div>
                                                </div>
                                                <div class="message-options dark">
                                                    <div class="message-time">
                                                        <div class="d-flex flex-row">
                                                            <div class="mr-2">06:49</div>
                                                            <div class="svg15 double-check"></div>
                                                        </div>
                                                    </div>
                                                    <div class="message-arrow"><i
                                                            class="text-muted la la-angle-down fs-17"></i></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="chat-input chat-input-tasks pl-3 pr-3">
                                    <div class="input-group">
                                        <input class="form-control" placeholder="Write a message" type="text">

                                        <div class="input-group-append prepend-white">
                                            <span class="input-group-text pl-2 pr-2">
                                                <i class="chat-upload-trigger fs-19 bi bi-file-earmark-plus ml-2 mr-2"></i>
                                                <i class="fs-19 bi bi-emoji-smile ml-2 mr-2"></i>
                                                <i class="fs-19 bi bi-camera ml-2 mr-2"></i>
                                                <i class="fs-19 bi bi-cursor ml-2 mr-2"></i>
                                                <div class="chat-upload">
                                                    <div class="d-flex flex-column">
                                                        <div class="p-2">
                                                            <button
                                                                class="btn btn-secondary btn-md btn-icon btn-circle btn-blushing"
                                                                type="button">
                                                                <i class="fs-15 bi bi-camera"></i>
                                                            </button>
                                                        </div>
                                                        <div class="p-2">
                                                            <button
                                                                class="btn btn-success btn-md btn-icon btn-circle btn-blushing"
                                                                type="button">
                                                                <i class="fs-15 bi bi-file-earmark-plus"></i>
                                                            </button>
                                                        </div>
                                                        <div class="p-2">
                                                            <button
                                                                class="btn btn-warning btn-md btn-icon btn-circle btn-blushing"
                                                                type="button">
                                                                <i class="fs-15 bi bi-person"></i>
                                                            </button>
                                                        </div>
                                                        <div class="p-2">
                                                            <button
                                                                class="btn btn-danger btn-md btn-icon btn-circle btn-blushing"
                                                                type="button">
                                                                <i class="fs-15 bi bi-card-image"></i>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
