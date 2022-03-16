@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header text-5xl">{{ __('Chats') }}</div>

                <div class="card-body">
                    <div class="flex justify-between">
                    <div class=" text-2xl bg-white">{{ __('Broadcasts Lists') }}</div>
                    <a href="/chat" class="text-red-600">Group chat</a>
                    </div>

                    <hr class="my-2" />

                    <div class="chat-card bg-white p-4 ">
                        <div class="flex justify-between shadow-2xl p-4">
                            <div class="grid grid-cols-2">
                                <div class="avatar">
                                    <img src="{{ asset('assets/me.jpg') }}" class="w-10 h-10 rounded-circle" alt="avatar" />
                                </div>
                                <div class="chat-info">
                                    <p>{{ auth()->user()->name }}</p>
                                    <p>Good morning!</p>
                                </div>
                            </div>

                            <div>
                                <p>07:58</p>
                                <p class="bg-red-300 w-sm p-2 text-center rounded-circle small">10</p>
                            </div>
                        </div>
                    </div>

                    <div class="chat-card bg-white p-4">
                        <div class="flex justify-between shadow-2xl p-4">
                            <div class="grid grid-cols-2">
                                <div class="avatar">
                                    <img src="{{ asset('assets/me.jpg') }}" class="w-10 h-10 rounded-circle" alt="avatar" />
                                </div>
                                <div class="chat-info">
                                    <p>{{ auth()->user()->name }}</p>
                                    <p>Good morning!</p>
                                </div>
                            </div>

                            <div>
                                <p>07:58</p>
                                <p class="bg-red-300 w-sm p-2 text-center rounded-circle small">10</p>
                            </div>
                        </div>
                    </div>

                    <div class="chat-card bg-white p-4">
                        <div class="flex justify-between shadow-2xl p-4">
                            <div class="grid grid-cols-2">
                                <div class="avatar">
                                    <img src="{{ asset('assets/me.jpg') }}" class="w-10 h-10 rounded-circle" alt="avatar" />
                                </div>
                                <div class="chat-info">
                                    <p>{{ auth()->user()->name }}</p>
                                    <p>Good morning!</p>
                                </div>
                            </div>

                            <div>
                                <p>07:58</p>
                                <p class="bg-red-300 w-sm p-2 text-center rounded-circle small">10</p>
                            </div>
                        </div>
                    </div>



                </div>
            </div>
        </div>
    </div>
</div>
@endsection
