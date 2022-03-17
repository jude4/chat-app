<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function messages()
    {
        return $this->hasMany(Message::class);
    }

    public function chats()
    {
        return $this->hasMany(Chat::class, 'sender_id')->orWhere('reciever_id', $this->id);
    }

    public function latestChat()
    {
        return $this->hasOne(Chat::class, 'reciever_id')->with('sender', 'reciever')->latestOfMany();
    }

    public function recentChats(): mixed
    {
        return $this->chats()->with('reciever', 'sender')->latest()->get();
    }

    public function chatRecieved($user = null)
    {
        return Chat::where('sender_id', '!=', $this->id)
                ->orWhere('reciever_id', auth()->id() ?? $user)
            ->with('sender')->latest()->get()->unique('sender_id');
    }
}