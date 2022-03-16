@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card ">
                <div class="card-header">{{ $reciever->name }}</div>
                <div class="card-body bg-gray-100" style="height: 500px; overflow-y: auto">
                    <personal-chat :chats="messages" :user="{{ Auth()->user() }}"></personal-chat>
                </div>
                <div class="card-footer">
                    <personal-chat-form v-on:personalMessageSent="addPersonalMessage" :reciever="{{ $reciever }}" :sender="{{ Auth::user() }}"></personal-chat-form>

                </div>
            </div>

        </div>

    </div>
</div>
@endsection
