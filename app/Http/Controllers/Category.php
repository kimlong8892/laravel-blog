<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Item;
use App\Category as CategoryModel;
use Illuminate\Support\Facades\DB;

class Category extends Controller
{
    public function Detail(Request $request, $nameurl, $id)
    {
        $myCategory = CategoryModel::where('id', $id)->where('name_url', $nameurl)->first();
        if(!$myCategory)
            abort(404); 
        $listItem = Item::whereHas('Categorys', function ($query) use ($nameurl, $id) {
            $query->where('item_category.category_id', '=', $id)->where('category.name_url', '=', $nameurl);
        })->paginate(12);
        return view('category.detail', compact('listItem', 'myCategory'));
    }
}
