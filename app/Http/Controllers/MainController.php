<?php

namespace App\Http\Controllers;

use App\Models\Phonebook;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index()
    {
        $users = Phonebook::query()->orderBy('name')->paginate(10);
        return view('home', compact('users'));
    }

    public function search(Request $request)
    {
        $s = $request->s;
        $users = Phonebook::query()->where('name', 'LIKE', "%$s%")->paginate(10);
        return view('home', compact('users'));
    }
}
