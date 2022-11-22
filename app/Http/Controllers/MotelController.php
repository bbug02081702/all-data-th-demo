<?php

namespace App\Http\Controllers;

use App\Models\Motel;
use Illuminate\Http\Request;

class MotelController extends Controller
{
    public function index(){
        $data = Motel::paginate(5);
        return view('motel.index',compact('data'));
    }
    
    public function create(){
        return view('motel.create-motel');
    }
    
    public function store(Request $request){
        $data = Motel::create($request->all());
        if($request->hasFile('images')){
            $request->file('images')->move('photocreate/', $request->file('images')->getClientOriginalName());
            $data->images = $request->file('images')->getClientOriginalName();
            $data->save();
        }
        return redirect()->route('manager-motel')->with('Thongbao', 'Them motel thanh cong');
    }

    public function edit($id){
        $data = Motel::find($id);
        return view('motel.create-motel',compact('data'));
    }

    public function update(Request $request, $id){
        $data = Motel::find($id);
        $data->update($request->all());
        return redirect()->route('manager-motel')->with('Thongbao','Update motel thanh cong');
    }

    public function destroy($id){
        $data = Motel::find($id);
        $data->delete();
        return redirect()->route('manager-motel')->with('Thongbao', 'Xoa motel thanh cong');
    }

}
