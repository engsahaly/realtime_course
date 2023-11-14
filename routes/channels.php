<?php

use App\Broadcasting\NewUserChannel;
use Illuminate\Support\Facades\Broadcast;

/*
|--------------------------------------------------------------------------
| Broadcast Channels
|--------------------------------------------------------------------------
|
| Here you may register all of the event broadcasting channels that your
| application supports. The given channel authorization callbacks are
| used to check if an authenticated user can listen to the channel.
|
*/

// Broadcast::channel('App.Models.User.{id}', function ($user, $id) {
//     return (int) $user->id === (int) $id;
// });

// PRIVATE CHANNEL AUTHORIZATION
Broadcast::channel('new_user_channel', function ($admin) {
    return $admin->type == 'super_admin';
}, ['guards' => ['admin']]);

// PRIVATE CHANNEL AUTHORIZATION (CHANNEL CLASS)
// Broadcast::channel('new_user_channel', NewUserChannel::class, ['guards' => ['admin']]);
