<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Item;

class ItemController extends Controller
{
    public function index()
    {
        $items = Item::orderBy('id', 'desc')->get();
        $total = Item::count();
        return view('admin.item.home', compact(['items', 'total']));
    }

    public function create()
    {
        return view('admin.item.create');
    }
    
    public function save(Request $request)
    {
        $validation = $request->validate([
            'title' => 'required',
            'cover_image' => 'required',
            'content' => 'required',
            'publishing_date' => 'required'
        ]);
       
        $data = Item::create($validation);
        if($data){
            session()->flash('success', 'Item created successfully');
            return redirect(route('admin/items'));
        }else{
            session()->flash('error', 'Item creation failed');
            return redirect(route('admin/items/create'));
        }
      
    }

    public function edit($id)
    {
        $item = Item::findOrFail($id);
        return view('admin.item.update', compact('item'));
    }

    public function delete($id)
    {
        $item = Item::findOrFail($id);
        $item->delete();
        session()->flash('success', 'Item deleted successfully');
        return redirect(route('admin/items'));
    }

    public function update(Request $request , $id)
    {
        $item = Item::findOrFail($id);
        $item->title = $request->title;
        $item->cover_image = $request->cover_image;
        $item->content = $request->content;
        $item->publishing_date = $request->publishing_date;
        $item->save();
        session()->flash('success', 'Item updated successfully');
        return redirect(route('admin/items'));
    }

    public function indexForUsers()
    {
        $items = Item::all();
        return view('items.index', compact('items'));
    }
}
