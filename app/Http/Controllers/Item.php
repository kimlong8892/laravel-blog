<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Item as ItemModel;

class Item extends Controller
{
    public function showDetail(Request $request, $nameUrl , $id)
    {
        $item = ItemModel::where('id', $id)->where('name_url', $nameUrl)->first();
        if(!$item)
            abort(404);
        return view('item.detail', compact('item'));
    }
    public function Search(Request $request)
    {
        $txtSearch = $request->txtSearch;
        $listItem = ItemModel::where('name', 'like', '%'.$txtSearch.'%')->orWhere('content', 'like', '%'.$txtSearch.'%')->paginate(12)->appends(request()->query());;
        return view('item.search', compact('listItem', 'txtSearch'));
    }
}
