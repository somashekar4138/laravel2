<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Employee;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;
class UserDeleteController extends Controller
{
    //
    public function destroy($id) {
        DB::delete('delete from employees where id = ?',[$id]);
        echo "Record deleted successfully.
        ";
        echo 'Click Here to go back.';
        }
    public function index(){
        $users = DB::select('select * from employees');
        return $users;
        }
        public function mam(Request $request) {
            $employee = new Employee;
            $employee->name = $request->input('Name');
            $employee->phone = $request->input('Phone');
            $employee->email = $request->input('Email');
            $employee->language = $request->input('language');
            $employee->gender = $request->input('Gender');
            $employee->decription = $request->input('Description');
            $employee->save();
            }
        public function edit(Request $request,$id) {
            $name = $request->input('name');
            $phone = $request->input('phone');
            $email = $request->input('email');
            $language = $request->input('language');
            $gender = $request->input('Gender');
            $decription = $request->input('decription');
            DB::update('update employees set name = ?,phone=?,email=?,language=?,gender=?, decription=? where id = ?',[$name,$phone,$email,$language,$gender,$decription,$id]);
            echo "Record updated successfully.
            ";
            echo 'Click Here to go back.';
            }
}
