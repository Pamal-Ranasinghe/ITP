<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Item;
use App\User;
use App\Catering_package;

class UserController extends Controller
{
    public function __construct()
    {
        //$this->middleware('role:user');
    }

    public function index()
    {   
        $items = Item::orderBy('id', 'desc')->get();
        return view('user.index',['items' => $items]);
    }

    public function getAllUsers(){
        $users = User::all()->where('id','>',4);
        return view('admin.users',['users'=>$users]);
    }

    public function getAllCateringPackagesUser(){
        $c_packages = Catering_package::orderBy('id', 'desc')->get();
        return view('user.usercateringpackages',['c_packages'=>$c_packages]);
    }

    public function getAllFoodandBevUser(){
        $items = Item::where('type','food and beverages')->orderBy('id', 'desc')->get();
        return view('user.userfoodandbeverages',['items'=>$items]);
    }

    public function getAllPakagesUser(){
        $items = Item::where('type','Package')->orderBy('id', 'desc')->get();
        return view('user.userfamilypackages',['items'=>$items]);
    }

    public function getCusForEmail($id){
        $user = User::find($id);
        return view('admin.RegCusEmail',['user'=>$user]);
    }

    public function sendRegCusMail(Request $request,$id){
        $validateData = $request->validate([
            'title' => 'required',
            'content' => 'required'
        ]);
        
        $user = User::findorFail($id);
        $title = request('title');
        $content = request('content');
        //session()->put('message','Email has been sent');

        $details = [
            'name'=>$user->name,
            'title'=>$title,
            'content'=>$content,

        ];
        \Mail::to($user->email)->send(new \App\Mail\RegisteredCustomerMail($details));
        return redirect()->back();
    }
    
    public function searchRegCustomer(Request $request){
        $search = $request->get('search');
        $users = DB::table('users')->where('name', 'like','%'.$search.'%')->paginate(10);   
        return view('admin.users', ['users' => $users]);
    }
    
}
