<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\NormalReports;
use PDF;

class NormalReportController extends Controller
{
    public function getAllNormalOrderReports(){
        $reports = NormalReports::all();
        return view('admin.normalordersincome',['reports'=> $reports]);
    }

    public function destroyNormalOrderReport($id){
        $reports = NormalReports::findorFail($id);
        $reports->delete();
        return redirect()->back();
     }

     public function getOneNormalOrderReports($id){
        $reports = NormalReports::find($id);
        return view('admin.editnormalorderreport',['report'=> $reports]);
    }

    public function editOneNormalOrderReports(Request $request,$id){
        $validatedData = $request->validate([
            'date' => 'required',
            'amount' => 'required',
        ]);

        $reports = NormalReports::find($id);
        $reports->created_at = request('date');
        $reports->amount = request('amount');
        $reports->save();

        return redirect('/get-normal-order-income');
    }

    public function downloadNormalReportsPDF(){
        $reports = NormalReports::all();
        $pdf = PDF::loadView('incomereport',compact('reports'));
        return $pdf->download('all_Normal_reports.pdf');
    }
}
