@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card ">
                <div class="card-header">Chats</div>
                <div class="card-body bg-gray-100" style="height: 500px; overflow-y: auto">
                    <chat-messages :messages="messages" :user="{{ Auth()->user() }}"></chat-messages>
                </div>
                <div class="card-footer">
                    <chat-form v-on:messagesent="addMessage" :user="{{ Auth::user() }}"></chat-form>
                </div>
            </div>

        </div>

    </div>
</div>
@endsection
