<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Item;

class Home extends Controller
{
    public function Index()
    {
        $listItem = Item::paginate(12);
        return view('home', compact('listItem'));
    }
}
