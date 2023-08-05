<?php

namespace App\Http\Controllers\Chat;

use App\Http\Controllers\Controller;
use App\Models\Messages;
use App\Models\User;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    public function __invoke(Request $request, $user_to)
    {
        $data = $request->validate([
            'message' => ''
        ]);

        $user_from = auth()->user()->id;

        $new_message = new Messages([
            'user_from' => $user_from,
            'user_to' => $user_to,
            'text' => $data['message']
        ]);
        $new_message->save();

        dd('123');
    }
}
