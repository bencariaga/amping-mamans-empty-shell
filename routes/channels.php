<?php

use Illuminate\Support\Facades\Broadcast;
use App\Models\User;

/*
|--------------------------------------------------------------------------
| Broadcast Channels
|--------------------------------------------------------------------------
|
| Here you may register all of the event broadcasting channels that your
| application supports. The given channel authorization callbacks are used
| to check if an authenticated user can listen to the channel.
|
*/

/*

Broadcast::channel('App.Models.User.{id}', function (User $user, $id) {
    return (int) $user->id === (int) $id;
});

// Example private channel for orders: only the order owner can listen
Broadcast::channel('orders.{orderId}', function (User $user, $orderId) {
    // replace with a proper check: load order and compare owner id
    // (simple demonstration)
    return $user->orders()->where('id', $orderId)->exists();
});

// Example presence channel that shares user info with others
Broadcast::channel('chat.room.{roomId}', function (User $user, $roomId) {
    // Allow only if user is a member of the room (implement the check)
    return $user->rooms()->where('rooms.id', $roomId)->exists() ? ['id' => $user->id, 'name' => $user->name] : false;
});

*/
