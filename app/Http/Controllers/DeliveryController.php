<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Customer;
use App\Order;
use App\Item;
use PDF;

class DeliveryController extends Controller
{
    
    public function index(){
        
        $session_id = session('orderId');
  
        return view('delivery.index',
            ['order' => $session_id]
        );}

        public function store($id,$total,$quan){

            
            $payment = request('payment');
            $orderId = request('orderId');
            $session_id = $id;   
            $customerName = request('name');

            $customer = new Customer();
            $customer->name = request('name');
            $customer->telephone =request('phone');
            $customer->email = request('email');
            $customer->address = request('address');

            $order = new Order();
            $order->item_id = $id;
            $order->type = "Online delivery";
            $order->status = "incomplete";
            $order->number_of_units = $quan;
            $order->total_price = $total;
            $customer->save();
            $customer->order()->save($order);

            $item = Item::find($id);
            $name = $item->name;
            
            $order = Order::orderBy('created_at', 'desc')->first();
            $orderId = $order->id;
         
            return redirect('/delivery/closed')->with(['msg' => 'completed','name' => $customerName,'orderId' => $orderId]); 
    
        }

        public function show(){

            $session_id = session('msg');
            $name = session('name');
            $orderId = session('orderId');
            
            return view('delivery.show',[',msg' => $session_id]);
        }

        public function delivery(){

            $orders = Order::all()->where('type','Online delivery')->where('status','incomplete');
            
            return view('admin.onlinedelivery',['orders' => $orders]); 
        }

        public function detail(){

            
            $ordId = request('b1');
            $order = Order::findorFail($ordId);
            $orders = Order::all()->where('type','Online delivery')->where('status','Pending');
            $item = $order->item_id;
            $items = Item::findorFail($item);
            $itemName = $items->name;
            $customerId = $order->customer_id;
            $customer = Customer::findorFail($customerId);
            $customerName = $customer->name;
            $customerAddress = $customer->address;
            $customerPhone = $customer->telephone;
            $time = $order->created_at;
             

           return view('admin.onlinedeliveryview',['orders' => $orders,'time'=>$time,'packname'=>$itemName,'orderId' => $ordId,'name' =>$customerName,'address' =>$customerAddress,'phone'=>$customerPhone]); 
        
        }



        public function complete(){

           
             $completeOrderID = request('completebtn');
             $orders = Order::findorFail($completeOrderID);
             $orders->status = "completed";
             $orders->save();

             $orders = Order::all()->where('type','Online delivery')->where('status','completed');
            
            
    
            
             return view('admin.onlinedeliverycomplete',['completes' => $orders]);
        }
        public function downloadPDF(){
            $delivery = Order::all()->where('type','Online delivery')->where('status','Pending');

            $pdf = PDF::loadView('delivery.reportpdf',compact('delivery'));
            return $pdf->download('delivery_report.pdf');
        }
        public function completedownloadPDF(){
            $delivery = Order::all()->where('type','Online delivery')->where('status','completed');

            $pdf = PDF::loadView('delivery.reportpdf',compact('delivery'));
            return $pdf->download('complete_delivery_report.pdf');
        }
}
