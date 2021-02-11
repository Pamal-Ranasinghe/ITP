<?php

namespace App\Http\Controllers;

use App\Employee;
use Illuminate\Http\Request;
use Validator;
use Auth;
use Storage;
use DateTime;
use PDF;


class EmployeeController extends Controller
{   

    public function store(Request $request){
        $filename = request()->avatar->getClientOriginalName();
        request()->avatar->storeAs('emp_img',$filename,'public');

        $validatedData = $request->validate([
            'name' => 'required|string',
            'email' => 'required|string|email|max:255|unique:employees',
            'designation' => 'required',
            'address' => 'required',
            'ph_no' => 'required|max:10|regex:/(0)[0-9]{9}/|unique:employees',  //regex to accept only  10 digits starting from 0
            'dob' => 'required',
           // 'avatar' => 'image|mimes:jpeg,jpg|max:5120',

        ]);

            // Save data to database

            $employee = new Employee;  //Creating a model instance
            $employee->name = request('name');
            $employee->email = request('email');
            $employee->designation = request('designation');
            $employee->address = request('address');
            $employee->ph_no = request('ph_no');
            $employee->dob = request('dob');
            $employee->avatar =request()->avatar->getClientOriginalName();
            $employee->save(); // Save function

        // Validation fails and redirecting back to add employee with inputs,Errors

        return redirect('/get-all-employees');
    }

    /**
     * 
     * This method is using fot getting all the emplyees in Employee table
     * Return the view manageEmployee.blade.php in admin view
     * Author:Wathma
     * 
     * 
     */
    public function getEmployees(){
        $employees = Employee::all();
        return view('admin.manageEmployee',compact('employees'));
    }
    /**
     * 
     * This method is using to edit current employee details inorder to employee ID
     * Return the view manageEmployee.blade.php in admin view
     * Author:Wathma
     * 
     */
    public function updateEmployee($id,Request $request){

        $filename = request()->avatar->getClientOriginalName();
        request()->avatar->storeAs('emp_img',$filename,'public');


        $validatedData = $request->validate([
            'name' => 'required|string',
            'email' => 'required|string|email|max:255',
            'designation' => 'required',
            'address' => 'required',
            'ph_no' => 'required|max:10|regex:/(0)[0-9]{9}/',  //regex to accept only  10 digits starting from 0
            'dob' => 'required',
           // 'avatar' => 'image|mimes:jpeg,jpg|max:5120',

        ]);

            $employee = Employee::find($id);
            $employee->name = request('name');
            $employee->email = request('email');
            $employee->designation = request('designation');
            $employee->address = request('address');
            $employee->ph_no = request('ph_no');
            $employee->dob = request('dob');
            $employee->avatar =request()->avatar->getClientOriginalName();
            $employee->save();

            return redirect('/get-all-employees');
      
         }
         /**
          * This method is using to get One employee details to use when it will be needed( Ex: Show one employee details in update form)
          */

    public function getOneEmployee($id){
        $employee = Employee::find($id);
        return view('admin.editEmployee',['employee' => $employee]);
    }
        /****
         * This method is using for delete one employee at a time in admin view
         * 
         */

    public function deleteEmployee($id){
        $employee = Employee::findorFail($id);
        $employee->delete();
        return redirect('/get-all-employees');
    }

        
    public function createPDF()
    { 
        // retreive all records from db
        $data = Employee::all();

        // share data to view
        view()->share('employee',$data);
        $pdf = PDF::loadView('employee_pdf', $data)->setPaper('a4', 'landscape');

        // download PDF file with download method
        return $pdf->download('employee_list.pdf');
    }

    public function showEmployees(){
        $employees = Employee::all();
        return view('ourstaff',['employees' => $employees]);
    }

    public function getOneInquiryEmployee($id){
        $employee = Employee::findorFail($id);
        return view('staffInquiry',['employee' => $employee]);
     }

}


