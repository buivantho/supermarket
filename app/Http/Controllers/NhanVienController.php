<?php

namespace App\Http\Controllers;

use App\student;
use Illuminate\Http\Request;

class NhanVienController extends Controller
{
    public function getNhanVien(){
        $nhanviens = nhanvien::all();
        return view('nhanvien',['nhanvien'=>$nhanviens]);
    }
    public function student(){
        $students =  student::orderBy("id","ASC");
        return view("listStudent",compact('students'));
    }
    public function Themstudent(){
        $students = student::orderBy("author_name","ASC")->get();
        return view("themstudent",compact('students'));
    }
    public function luusach(Request $request){
        $messages = [
            "required" => "Bắt buộc phải nhập thông tin",
            "string"    => "Phải nhập vào 1 chuỗi",
            "numeric"   => "Phải nhập vào 1 số",
            "min"   => "Giá trị tối thiểu 0 hoặc 6 ký tự",
            "max"   => "Tối đa 255 ký tự",
            "unique" => "Đã tồn tại giá trị này"
        ];
        $rules = [
            "book_name" => "required|string|max:255|unique:book",
            "qty"   => "required|numeric|min:0",
            "author_id"=> "required|numeric",
            "nxb_id"    => "required|numeric"
        ];
        $this->validate($request,$rules,$messages);
        try{
            student::create([
                "name"=> $request->get("name"),
                "age"=> $request->get("age"),
                "address"=> $request->get("address"),
                "telephone"=> $request->get("telephone"),
            ])->save();
        }catch (\Exception $e){
            die($e->getMessage());
        }
        return redirect("/student");
    }
}
