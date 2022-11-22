<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserBrowser;

class UserBrowserController extends Controller
{
    //
    public function index(Request $request){
       $data = UserBrowser::paginate(5);
       return view('userbrowser.index', compact('data'));
    }
    
    public function insertUser(){
        return view('userbrowser.add');
    }

    public function updateInsertUser(Request $request){
        $data = UserBrowser::create($request->all());
        // dd($data);
        return redirect()->route('user-agrent-browser');
    }

    public function edit($id){
        $data = UserBrowser::find($id);
        return view('userbrowser.edit',compact('data'));
    }
    
    public function update(Request $request, $id){
          $data = UserBrowser::find($id);
          $data->update($request->all());
          return redirect()->route('user-agrent-browser')->with('Thongbao','Sua thanh cong');
    }

    public function destroy($id){
        $data = UserBrowser::find($id);
        $data->delete();
        return redirect()->route('user-agrent-browser')->with('Thongbao','xoa thanh cong');
    }
}
