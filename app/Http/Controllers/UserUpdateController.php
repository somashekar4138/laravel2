<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class UserUpdateController extends Controller
{
        public function show($id) {
        $users = DB::select('select * from employees where id = ?',[$id]);
        return view('main2',['users'=>$users]);
        }
        public function edit(Request $request,$id) {
        $first_name = $request->input('name');
        $last_name = $request->input('phone');
        $city_name = $request->input('email');
        $email = $request->input('language');
        /*$data=array('first_name'=>$first_name,"last_name"=>$last_name,"city_name"=>$city_name,"email"=>$email);*/
        /*DB::table('student')->update($data);*/
        /* DB::table('student')->whereIn('id', $id)->update($request->all());*/
        DB::update('update employees set name = ?,phone=?,email=?,language=? where id = ?',[$first_name,$last_name,$city_name,$email,$id]);
        echo "Record updated successfully.
        ";
        echo 'Click Here to go back.';
        }
        }