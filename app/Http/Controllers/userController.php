<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Employee;

use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;
class userController extends Controller
{
    //
    public function index(){
        $users = DB::select('select * from employees');
        return view('main',['users'=>$users]);
        
        }
        public function destroy($id) {
            DB::delete('delete from employees where id = ?',[$id]);
            echo "Record deleted successfully.
            ";
            echo 'Click Here to go back.';
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
                // DB::insert('insert into employees (name, phone, email, language, gender, decription) values(?)',[$name,$phone,$email,$language,$gender,$decription]);
                
                // DB::update('update employees set name = ?,phone=?,email=?,language=?,gender=?, decription=? where id = ?',[$name,$phone,$email,$language,$gender,$decription,$id]);
                // echo "Record updated successfully.
                // ";
               
               
                
                }
            public function show($id) {
                $users = DB::select('select * from employees where id = ?',[$id]);
                return view('main2',['users'=>$users]);
                }
                public function edit(Request $request,$id) {
                $name = $request->input('name');
                $phone = $request->input('phone');
                $email = $request->input('email');
                $language = $request->input('language');
                $gender = $request->input('Gender');
                $decription = $request->input('decription');

                
                /*$data=array('first_name'=>$first_name,"last_name"=>$last_name,"city_name"=>$city_name,"email"=>$email);*/
                /*DB::table('student')->update($data);*/
                /* DB::table('student')->whereIn('id', $id)->update($request->all());*/
                DB::update('update employees set name = ?,phone=?,email=?,language=?,gender=?, decription=? where id = ?',[$name,$phone,$email,$language,$gender,$decription,$id]);
                echo "Record updated successfully.
                ";
                echo 'Click Here to go back.';
                }
}
