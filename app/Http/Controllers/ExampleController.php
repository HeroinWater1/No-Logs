<?php

namespace App\Http\Controllers;

use App\Events\SendMessageEvent;
use Illuminate\Http\Request;

class ExampleController extends Controller
{
    public function __invoke()
    {
        return redirect()->route('chat.index');
    }
}
