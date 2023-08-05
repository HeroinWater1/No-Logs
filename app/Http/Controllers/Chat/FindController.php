<?php

namespace App\Http\Controllers\Chat;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class FindController extends Controller
{
    public function __invoke($id)
    {
        if (User::where('custom_id', $id)->exists()){
            $user_to = User::where('custom_id', $id)->first()->id;
//            dd($user_to);
            return view('chat.chat', compact('user_to'));
        } else {
            return redirect()->back()->withErrors(['id_error' => 'This ID is not exists']);
        }
    }
}
