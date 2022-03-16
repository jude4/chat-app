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

                    <chat-card :user="{{ auth()->user() }}" :chats="{{ auth()->user()->recentChats() }}"></chat-card>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
