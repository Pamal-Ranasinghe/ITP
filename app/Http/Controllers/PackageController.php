<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Item;
use App\Order;
use PDF;
class PackageController extends Controller
{

    public function index(){

        $packages = Item::all()->where('type','Package');

        return view('packages.index',[
            'packages' => $packages,
        ]);
    }



        public function packageadd(){

            return view('admin.packageadd');
        }
        public function packagestore(){
            $filename = request()->img->getClientOriginalName();
            request()->img->storeAs('images',$filename,'public');
           
            $package = new Item();
            $package->name = request('pname');
            $package->type = "Package";
            $package->price =  request('price');
            $package->image = request()->img->getClientOriginalName();
            $package->discount =  request('discount');
            $package->description = request('description');
            $package->save();
    
            return view('admin.index');
        }

        public function packageremove(){

            return view('admin.packageremove');
        }

        public function packagedestroy(){

            $packageName = request('pname');
            $package = Item::where('name', $packageName);
            $output = $package->delete();
            
         
            if($output == 1){
                
             return redirect('/package/add')->with(['msg'=>'Package Removed Successfully','check' => 1]);
            }
            else{
                
               return redirect('/package/add')->with(['msg'=>'Package Removed Unsuccessful','check' => 2]);
             }
        }
        public function store($id){

            $package = Item::findorFail($id);
            $packName = $package->name;
            $take = request('take');
            $quan = request('quantity');
            $price = $package->price;
            $discount = $package->discount;
            $dis = ($price * $quan) * $discount / 100.0;
            $total = ($price * $quan) - $dis;
            error_log($total);
             if(strcmp($take, 'Take Away') == 0)
             {
                return redirect('/package/takeaway')->with(['total' => $total,'price' => $price,'qty' => $quan,'packName' => $packName,'discount' => $dis]);
            }else{
                
                $order = new Order();
                $order->id = $id;
                $order->item_id = $id;
                $order->type = "Online Delivery";
                $order->number_of_units = $quan;
                $order->total_price = $total;
                $order->status = "Pending";
               
                $orderId = $order->id;
                error_log($orderId);
                return redirect('/delivery')->with(['orderId' => $id,'total' => $total,'packName' =>$packName,'quan' =>$quan]);
    
             }
    
            }
            public function takeaway(){

                return view('packages.takeaway');
    
            }
            public function getAllForReport(){
                $packages = Item::all()->where('type','Package');
                return view('packages.reportpdf',compact('packages'));
            }
       
            public function downloadPDF(){
                $packages = Item::all()->where('type','Package');

                $pdf = PDF::loadView('packages.reportpdf',compact('packages'));
                return $pdf->download('packages_report.pdf');
            }

    
}
