<?php

namespace App\Http\Controllers;

use App\DanhMuc;
use Illuminate\Http\Request;

class DanhMucController extends Controller
{
    public function getDanhMuc(){
        $danhmucs = DanhMuc::all();
        return view('danhmuc',['danhmucs'=>$danhmucs]);
    }
    public function ThemNhanVien ( Request $request){
        $this->validate($request);
            $nhanvien = new nhanvien;

            $nhanvien->ten=$request->name;
            $nhanvien_>
            $nhanvien->save();

            return back()->withInput();
    }
    public  function suaDanhMuc($id){
        $danhmuc = DanhMuc::find($id);
        return view('suadanhmuc',['danhmuc'=>$danhmuc]);
    }
    public function luuDanhMuc(Request $request,$id){
        $danhmuc = DanhMuc::find($id);

        $danhmuc->ten = $request->name;

        $danhmuc->save();

        return redirect()->route('danhmuc');
    }
    public function xoaDanhMuc($id){
        $danhmuc=DanhMuc::where('id',$id)->delete();
        return redirect()->route('danhmuc');
    }
}
