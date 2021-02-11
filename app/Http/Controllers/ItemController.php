<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Collection;
use App\Item;
use PDF;

class ItemController extends Controller
{
    public function insertItems(Request $request){

        $filename = request()->avatar->getClientOriginalName();
        request()->avatar->storeAs('item_imgs',$filename,'public');

        $validatedData = $request->validate([
            'item_name' => 'required|string',
            'type' => 'required',
            'price' => 'required',
            'desc' => 'required',  //regex to accept only  10 digits starting from 0
            'avatar' => 'image|mimes:jpeg,jpg|max:5120',

        ]);

            $item = new Item;  //Creating a model instance
            $item->name = request('item_name');
            $item->type = request('type');
            $item->price = request('price');
            $item->description = request('desc');
            $item->image = request()->avatar->getClientOriginalName();

            //$employee->avatar = request('');
            $item->save(); // Save function

        // Validation fails and redirecting back to add employee with inputs,Errors

        return redirect('/show-food-and-bev-items');
    }

    public function show(){
        $items = Item::all()->where('type','food and beverages');
        return view('showitems',compact('items'));
    }

    public function getOne($id){
        $item = Item::findorFail($id);
        return view('confirm',['items' => $item]);
     }

     public function getAllItems(){
        $items = Item::all()->where('type','food and beverages');
        return view('admin.showAllFBItems',compact('items'));
    }

    public function deleteItem($id){
        $item = Item::find($id);
        $item->delete();
        return redirect()->back();
    }

    public function getOneForUpdate($id){
        $item = Item::findorFail($id);
        return view('admin.updateItem',['items' => $item]);
    }

    public function updateItems(Request $request,$id){

        $validatedData = $request->validate([
            'item_name' => 'required|string',
            'type' => 'required',
            'price' => 'required',
            'desc' => 'required',  //regex to accept only  10 digits starting from 0
            // 'avatar' => 'image|mimes:jpeg,jpg|max:5120',

        ]);

        $filename = request()->avatar->getClientOriginalName();
        request()->avatar->storeAs('item_imgs',$filename,'public');

            $item = Item::find($id);  //Creating a model instance
            $item->name = request('item_name');
            $item->type = request('type');
            $item->price = request('price');
            $item->description = request('desc');
            $item->image = request()->avatar->getClientOriginalName();
            //$employee->avatar = request('');
            $item->save(); // Save function

        // Validation fails and redirecting back to add employee with inputs,Errors

        return redirect('/show-food-and-bev-items');
    }

    public function downloadItemPDF(){
        $items = Item::all();
        $pdf = PDF::loadView('itempdf',compact('items'));
        return $pdf->download('Items.pdf');
    }

    public function searchItem(Request $request){
        $search = $request->get('search');
        $items = DB::table('items')->where('name', 'like','%'.$search.'%')->paginate(10);   
        return view('admin.showAllFBItems', ['items' => $items]);
        //$cpackage = DB::table('catering_packages')->paginate(5);  
    }

    public function getOneDelivery($id){
        $item = Item::findorFail($id);
        return view('confirmdelivery',['items' => $item]);
     }

     

}
