<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Log;
use App\Models\Item;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index()
    {
        $items = Item::all();
        return view('pages.index', [
            'items' => $items
        ]);
    }

    public function destroy($id)
    {
        Item::find($id)->delete();
        return redirect('/');
    }

    public function getItem($id)
    {
        $item = Item::where('id', $id)->first();
        return view('pages.item', [
            'item' => $item
        ]);
    }

    public function updateItem(Request $request, $id)
    {
        Item::where('id', $id)->update($request->all());
        return redirect('/');
    }
}
