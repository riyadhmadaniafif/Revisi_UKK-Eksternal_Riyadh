<?php

namespace App\Http\Controllers;

use App\Models\Galeri;
use Illuminate\Http\Request;
use Database\Seeders\GaleriSeeder;

class GaleriController extends Controller
{
    public function index(){

        $data = Galeri::all();
        return view('dashboard',compact('data'));
    }
    public function index2(){

        $data = Galeri::all();
        return view('dashboard2',compact('data'));
    }

    public function tambahdata(){
        return view('tambahdata');
    }
    public function tambahdata2(){
        return view('tambahdata2');
    }

    public function insertdata2(Request $request){
        //dd($request->all());
        $data = Galeri::create($request->all());
        if($request->hasFile('foto')){
            $request->file('foto')->move('fotosesuatu/', $request->file('foto')->getClientOriginalName());
            $data->foto = $request->file('foto')->getClientOriginalName();
            $data->save();
        }
        return redirect()->route('dashboard')->with('success','Data Berhasi Ditambahkan !');
    }
    public function insertdata(Request $request){
        //dd($request->all());
        $data = Galeri::create($request->all());
        
            $data->save();

        return redirect()->route('dashboard')->with('success','Data Berhasi Ditambahkan !');
    }
    public function tampilkandata($id){

        $data = Galeri::find($id);
        //dd($data);

        return view('tampildata', compact('data'));
    }
    public function tampilkandata2($id){

        $data = Galeri::find($id);
        //dd($data);

        return view('tampildata2', compact('data'));
    }

    public function updatedata (Request $request, $id) {

        $data = Galeri::find($id);
        $data->update($request->all());
        return redirect()->route('dashboard')->with('success','Data Berhasi Diubah !');
    }
    public function updatedata2 (Request $request, $id) {

        $data = Galeri::find($id);
        $data->update($request->all());
        return redirect()->route('dashboard2')->with('success','Data Berhasi Diubah !');
    }

    public function hapusdata ($id){
        
        $data = Galeri::find($id);
        $data->delete();
        return redirect()->route('dashboard')->with('success','Data Berhasi Dihapus !');
    }
    public function hapusdata2 ($id){
        
        $data = Galeri::find($id);
        $data->delete();
        return redirect()->route('dashboard2')->with('success','Data Berhasi Dihapus !');
    }




}
