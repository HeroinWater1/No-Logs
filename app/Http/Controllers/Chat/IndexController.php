<?php

namespace App\Http\Controllers\Chat;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Haruncpi\LaravelIdGenerator\IdGenerator;

class IndexController extends Controller
{
    public function __invoke(Request $request)
    {
        $data = $request->validate([
            'nickname' => 'required',
            'login' => 'required|unique:users',
            'password' => 'required',
        ]);

        do {
            $custom_id = $this->unique_code(6);// Генерирует случайную строку длиной 6 символов
        } while (User::where('custom_id', $custom_id)->exists()); // Проверяет уникальность идентификатора в базе данных
        $data['custom_id'] = $custom_id;
//        dd ($data);
        $user = User::create($data);
        Auth::login($user);
        return redirect()->route('chat.authorised');
    }
    private function unique_code($limit)
    {
        return substr(base_convert(sha1(uniqid(mt_rand())), 16, 36), 0, $limit);
    }
}
