<?php

namespace App\Http\Controllers;

use App\Models\tambah;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TambahController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function insertdata2(Request $request){
        //dd($request->all());
        $data = tambah::create($request->all());
        if($request->hasFile('foto')){
            $request->file('foto')->move('fotosesuatu/', $request->file('foto')->getClientOriginalName());
            $data->foto = $request->file('foto')->getClientOriginalName();
            $data->save();
        }
        return redirect()->route('dashboard')->with('success','Data Berhasi Ditambahkan !');
    }
    public function insertdata(Request $request){
        //dd($request->all());
        $data = tambah::create($request->all());
        
            $data->save();

        return redirect()->route('dashboard')->with('success','Data Berhasi Ditambahkan !');
    }
}
