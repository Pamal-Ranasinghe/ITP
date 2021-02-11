<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CateringReports;
use PDF;

class CateringReportController extends Controller
{
    public function getAllCateringOrderReports(){
        $reports = CateringReports::all();
        return view('admin.cateringordersincome',['reports'=> $reports]);
    }

    public function destroyCateringOrderReport($id){
        $reports = CateringReports::findorFail($id);
        $reports->delete();
        return redirect()->back();
     }

     public function getOneCateringOrderReports($id){
        $reports = CateringReports::find($id);
        return view('admin.editcateringorderreport',['report'=> $reports]);
    }

     public function editOneCateringOrderReports(Request $request,$id){
        $validatedData = $request->validate([
            'date' => 'required',
            'amount' => 'required',
        ]);

        $reports = CateringReports::find($id);
        $reports->created_at = request('date');
        $reports->amount = request('amount');
        $reports->save();

        return redirect('/get-all-catering-income');
    }

    public function downloadCateringReportsPDF(){
        $reports = CateringReports::all();
        $pdf = PDF::loadView('pdfcateringreports',compact('reports'));
        return $pdf->download('all_catering_reports.pdf');
    }

}
