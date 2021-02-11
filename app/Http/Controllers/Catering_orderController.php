<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Collection;
use App\Catering_order;
use App\CateringReports;
use App\Customer;

class Catering_orderController extends Controller
{
        // Show customer Detail name, email, tel, permanent address & package detail date, location, Bill amount
        public function adminShowAllCOrders(){
                $corder = Catering_order::all();
                return view('catering_orders.showcorder', ['corders' => $corder]);
            }

        public function adminViewAllCOrders($id){
            //$customer = Customer::find($id);
            $corder = Catering_order::findorFail($id);
            return view('catering_orders.viewcorder',['corders' => $corder]);
        }

        public function getCateringOrderPay()
        {
            $orders = Catering_order::all();
            return view('admin.allcateringorders',compact('orders'));
    
        }
    
    
       /* public function showCateringOderPayDetails()
        {
            $caterorders = Catering_order::all();
            return view('cateringorders',compact('caterorders'));
    
        }*/
    
        public function deleteCateringOderPayment($id)
        {
            $caterorders = Catering_order::find($id);
            $caterorders->delete();
            return redirect()->back();
        }

        public function searchCateringAll(Request $request){
            $search = $request->get('search');
            $order = DB::table('catering_orders')->where('name', 'like','%'.$search.'%')->paginate(10);   
            return view('admin.allcateringorders', ['orders' => $order]);
        }
    
        public function calcTotIncomeCatering(){
            $calcTotcatering = DB::table('catering_orders')->sum('amount');
            $incomecatering = new CateringReports();
            $incomecatering->amount = $calcTotcatering;
            $incomecatering->save();
    
           return redirect()->back()->with('msg','Total income has been calculated');
    
    }

    public function downloadCateringPDF(){
        $orders = Catering_order::all();
        $pdf = PDF::loadView('allcateringspdf',compact('orders'));
        return $pdf->download('all_catering_reports.pdf');
    }



}
