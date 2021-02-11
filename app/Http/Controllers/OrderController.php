<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Collection;
use App\Order;
use App\Customer;
use App\NormalReports;
use PDF;

class OrderController extends Controller
{
    public function getAllOrders(){
        $orders = Order::all()->where('type','take_away')->where('status','incomplete');
        $count = Order::all()->where('type','take_away')->where('status','completed')->count();
        return view('admin.takeaway',(['orders'=> $orders,'count' => $count]));
        }
    

    public function getOneOrder($id){
        $order = Order::findorFail($id);
      return view('admin.vieworder',['order' => $order]);
     }

     public function destroy($id){
        $order = Order::findorFail($id);
        $order->delete();
        return redirect('/')->with('msg' ,'Order is deleted');
     }

     public function getAllForReport(){
         $orders = Order::all();
         return view('reportpdf',compact('orders'));
     }

     public function downloadPDF(){
         $orders = Order::all();
         $pdf = PDF::loadView('reportpdf',compact('orders'));
         return $pdf->download('take_away_orders.pdf');
     }

     public function getCompletedOrders(){
        $orders = Order::all()->where('type','take_away')->where('status','completed');
        $count = Order::all()->where('type','take_away')->where('status','incomplete')->count();
        return view('admin.completedorders',['orders' => $orders,'count'=>$count]);
        }

        public function markAsCompleted($id){
            $orders = Order::findorFail($id);
            $orders->status = "completed";
            $orders->save();

            return redirect('/view-all-orders');
        }

        public function sendCusMail($id){
            $order = Order::findorFail($id);
            session()->put('message','Email has been sent');

            $details = [
                'name'=>$order->customer->name,
                'price'=>$order->total_price,
                'cus_id'=>$order->customer_id,
                'item_quantity'=>$order->number_of_units,
                'item_name'=>$order->item->name
            ];
            \Mail::to($order->customer->email)->send(new \App\Mail\CustomerMail($details));
            return redirect()->back();
        }
        //Search function
        public function searchTakeAway(Request $request){

            $search = $request->get('search');
            $order = DB::table('orders')->where('total_price', 'like','%'.$search.'%')->where('type','take_away')->where('status','incomplete')->paginate(10);   
            return view('admin.searchResults', ['orders' => $order]);

        }

        //Hiruni
        public function getorderpay()
    {
        $orders = Order::all();
        return view('admin.shownormalorders',compact('orders'));

    }


    public function calcTotIncome(){
        $calcTot = DB::table('orders')->sum('total_price');
        $income = new NormalReports();
        $income->amount = $calcTot;
        $income->save();

       return redirect()->back()->with('msg','Total income has been calculated');

    }

   
    public function deleteOderPayment($id)
    {
        $orders = Order::find($id);
        $orders->delete();
        return redirect()->back();
    }

    public function searchTakeAwayAll(Request $request){
        $search = $request->get('search');
        $order = DB::table('orders')->where('type', 'like','%'.$search.'%')->paginate(10);   
        return view('admin.shownormalorders', ['orders' => $order]);
    }

    public function downloadTakeAwayPDF(){
        $orders = Order::all();
        $pdf = PDF::loadView('alltakeaways',compact('orders'));
        return $pdf->download('all_take_away_orders.pdf');
    }
    /*public function showNormalOderPayDetails()
    {
        $orders= Orders::all();
        return view('orders',compact('orders')); 


    }*/

        
}
