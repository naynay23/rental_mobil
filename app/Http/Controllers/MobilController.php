<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\RedirectResponse;
use App\Mobil;
use App\Merk;
class MobilController extends Controller
{
    function index(){
    	$mobil = Mobil::get();
    	return view('mobil.index', ['mobil' => $mobil]);
    }

    function insert(){
    	$mobil = new Mobil;
    	$mobil->plat_nomor = Input::get('plat_nomor');
    	$mobil->jenis_mobil = Input::get('jenis_mobil');
    	$mobil->id_merk = Input::get('merk');
    	$mobil->warna = Input::get('warna');
    	$mobil->save();

    	Session::flash('message', ['success' => true,'pesan' => 'Data berhasil ditambah']);
    	return redirect('/mobil');
    }

    function delete($id){
    	$mobil = Mobil::find($id);
    	$mobil->delete();

    	Session::flash('message', ['success' => true,'pesan' => 'Data berhasil dihapus']);
    	return redirect('/mobil');
    }

    function update($id){
    	$mobil = Mobil::find($id);
    	$mobil->plat_nomor = Input::get('plat_nomor');
    	$mobil->jenis_mobil = Input::get('jenis_mobil');
    	$mobil->id_merk = Input::get('merk');
    	$mobil->warna = Input::get('warna');
    	$mobil->save();

    	Session::flash('message', ['success' => true,'pesan' => 'Data berhasil diubah']);
    	return redirect('/mobil');
    }

    function viewInsert(){
    	$merk = Merk::all();
    	return view('mobil.add', ['merk'=>$merk]);
    }

    function viewUpdate($id){
    	$mobil = Mobil::find($id);
    	$merk = Merk::all();
    	return view('mobil.update', compact('mobil', 'merk'));
    } 
}
